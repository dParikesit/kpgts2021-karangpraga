<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\RegisterController;
use App\Registration;
use App\User;
use Carbon\Carbon;
use Lava;

class AdminController extends Controller
{
    public function dashboard() {
      include(app_path() . '/../vendor/khill/lavacharts/src/Lavacharts.php');
      $lava = new \Khill\Lavacharts\Lavacharts;

      $peserta_cnt = User::where('type', 'user')->count();
      $peserta_reg_cnt = User::where('type', 'user')
                            ->whereHas('registration', function($query) {
                              $query->where('nomor_peserta', '<>', '');
      })->count();
      
      $table = $lava->DataTable();
      $table->addDateColumn('Tanggal')
            ->addNumberColumn('Membuat Akun')
            ->addNumberColumn('Terverifikasi');

      $diff = Carbon::today()->diffInDays(new Carbon('12/10/2019'));
      for ($i = $diff; $i >= 0; $i--) {
        $day = Carbon::today()->subDays($i);
        $nextDay = Carbon::today()->subDays($i-1);
        $registered = Registration::where([['created_at', '>=', $day], ['created_at', '<=', $nextDay]])->count();
        $verified   = Registration::where([['updated_at', '>=', $day], ['updated_at', '<=', $nextDay], ['nomor_peserta', '<>', '']])->count();

        $table->addRow([
          $day, $registered, $verified
        ]);
      }

      $chart = $lava->LineChart('Progress Peserta', $table);

      return View::make('page.admin.dashboard', compact(['peserta_cnt', 'peserta_reg_cnt', 'chart', 'lava']));
    }

    public function users() {
      $users = User::where('type', 'user')->get();
      return View::make('page.admin.users', compact(['users']));
    }

    public function user($id) {
      $user = User::find($id);
      if ($user && $user->type == 'user') {
        return View::make('page.admin.user', compact(['user']));
      } else {
        return abort(404);
      }
    }

    public function createUser() {
      if (Auth::user()->canRegistUser()) {
        $smas = [
            'SMAN 1 Semarang',
            'SMAN 2 Semarang',
            'SMAN 3 Semarang',
            'SMAN 4 Semarang',
            'SMAN 5 Semarang',
            'SMAN 12 Semarang',
            'SMAN 1 Ungaran',
            'SMA Semesta',
            'SMA Karangturi',
            'Kolese Loyola',
            'SMAN 1 Kendal',
        ];
        return View::make('page.admin.user_create', compact(['smas']));
      } else {
        abort(404);
      }
    }

    public function storeUser(Request $request) {
      if (Auth::user()->canRegistUser()) {
        $user = new User();
        $user->name                            = $request->input('name')?:'';
        $user->email                           = $request->input('email')?:'';
        $user->password                        = bcrypt('kpgts2020');
        $user->type                            = 'user';
        $user->save();

        $regist = new Registration();
        $regist->user_id           = $user->id;
        $regist->nomor_peserta     = '';
        $regist->sma               = $request->input('asal-sma')?:'';
        $regist->kelompok_ujian    = $request->input('kelompok-ujian')?:'';
        $regist->biaya             = 0;
        $regist->no_hp             = $request->input('no-hp')?:'';
        $regist->no_wa             = $request->input('no-wa')?:'';
        $regist->id_line           = $request->input('id-line')?:'';
        $regist->sesi              = $request->input('sesi')?:'0';
        $regist->metode_pembayaran = $request->input('metode-pembayaran')?:'';
        $regist->registered_by     = 0;
        $regist->save();

        return redirect('/admin/user/' . $user->id);
      } else {
        abort(404);
      }
    }

    public function editUser($id) {
      $user = User::find($id);
      if ($user && $user->type == 'user' && Auth::user()->canRegistUser()) {
        $smas = [
            'SMAN 1 Semarang',
            'SMAN 2 Semarang',
            'SMAN 3 Semarang',
            'SMAN 4 Semarang',
            'SMAN 5 Semarang',
            'SMAN 12 Semarang',
            'SMAN 1 Ungaran',
            'SMA Semesta',
            'SMA Karangturi',
            'Kolese Loyola',
            'SMAN 1 Kendal',
        ];
        return View::make('page.admin.user_edit', compact(['user', 'smas']));
      } else {
        return abort(404);
      }
    }

    public function updateUser(Request $request, $id) {
      $user = User::find($id);
      if ($user && $user->type == 'user' && Auth::user()->canRegistUser()) {
        $user->name                            = $request->input('name')?:'';
        $user->registration->kelompok_ujian    = $request->input('kelompok-ujian')?:'';
        $user->registration->metode_pembayaran = $request->input('metode-pembayaran')?:'';
        $user->registration->sma               = $request->input('asal-sma')?:'';
        $user->registration->no_hp             = $request->input('no-hp')?:'';
        $user->registration->no_wa             = $request->input('no-wa')?:'';
        $user->registration->id_line           = $request->input('id-line')?:'';
        $user->sesi                            = $request->input('sesi')?:'0';
        $user->biaya                           = 45000;
        $user->registration->save();
        $user->save();

        return redirect('/admin/user/' . $user->id);
      } else {
        return abort(404);
      }
    }

    public function registUser(Request $request, $id, $sesi) {
      $user = User::find($id);
      if ($user && $user->type == 'user' && Auth::user()->canRegistUser()) {
        $data;
        if ($user->registration->nomor_peserta == '') {
          $user->registration->register($sesi);
          $data = [
            'nama'              => $user->name,
            'nomor_peserta'     => $user->registration->nomor_peserta,
            'sma'               => $user->registration->sma,
            'kelompok_ujian'    => $user->registration->kelompok_ujian,
            'email'             => $user->email,
            'no_hp'             => $user->registration->no_hp,
            'no_wa'             => $user->registration->no_wa,
            'id_line'           => $user->registration->id_line,
            'sesi'              => $user->registration->sesi,
            'metode_pembayaran' => $user->registration->metode_pembayaran,
            'action'            => 'regist',
          ];
        } else {
          $user->registration->sesi = $sesi;
          $user->registration->save();
          $user->save();
          $data = [
            'nama'              => $user->name,
            'nomor_peserta'     => $user->registration->nomor_peserta,
            'sma'               => $user->registration->sma,
            'kelompok_ujian'    => $user->registration->kelompok_ujian,
            'email'             => $user->email,
            'no_hp'             => $user->registration->no_hp,
            'no_wa'             => $user->registration->no_wa,
            'id_line'           => $user->registration->id_line,
            'sesi'              => $user->registration->sesi,
            'metode_pembayaran' => $user->registration->metode_pembayaran,
            'action'            => 'pindah_sesi',
          ];
        }

        $count = User::where('type', 'user')
                     ->whereHas('registration', function($query) {
                        $query->where('nomor_peserta', '<>', '');
                      }
        )->count();
        $gscript_url = [
          'https://script.google.com/macros/s/AKfycbyKckxTxRTXPF_wfaTk3Xy6p5rhBLpyeiu2dFdjK2vwdQC8DMrn/exec'
        ];
        $ch = curl_init($gscript_url[0]);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $resp = curl_exec($ch);
        curl_close($ch);

        return redirect('/admin/user/'.$id);
      } else {
        return abort(404);
      }
    }

    public function uploadKartu(Request $request) {
      //dd($request->input('kartu-peserta'));
        $filename = md5($request->input('nomor-peserta')).'.'.$request->file('kartu-peserta')->getClientOriginalExtension();
        $request->file('kartu-peserta')->move(public_path('kartu-peserta'), $filename);

        return redirect('/admin/user/'.$request->input('id'));
    }

    public function create() {
      return View::make('page.admin.register');
    }

    public function store(Request $request) {
      if (User::where('email', $request->input('email'))->first()) {
        $fail = 'Email is taken';
        return View::make('page.admin.register', compact(['fail']));
      }

      $user = new User();
      $user->name     = $request->input('name');
      $user->email    = $request->input('email');
      $user->password = bcrypt($request->input('password'));
      $user->type     = 'ca-admin';
      $user->save();

      return View::make('page.admin.register-success');
    }

    public function login() {
      $old['email']    = '';
      $old['password'] = '';
      return View::make('page.admin.login', compact(['old']));
    }

    public function auth(Request $request) {
      $old['email']    = $request->input('email');
      $old['password'] = $request->input('password');

      if (Auth::attempt(['email' => $old['email'], 'password' => $old['password']])) {
        $user = Auth::user();
        if ($user->isAdmin()) {
          return redirect('/admin/dashboard');
        } else if ($user->type == 'user') {
          Auth::logout();
          $fail = 'You are not admin. Try login as user.';
          return View::make('page.admin.login', compact(['fail']));
        } else {
          Auth::logout();
          $fail = 'Your account hasn\'t been verified yet.';
          return View::make('page.admin.login', compact(['fail']));
        }
      } else {
        $fail = 'Username / Password mismatch';
        return View::make('page.admin.login', compact(['old', 'fail']));
      }
    }

    public function logout() {
      Auth::logout();
      return redirect('/admin/login');
    }

    public function editPassword() {
      return View::make('page.admin.password', compact([]));
    }

    public function updatePassword(Request $request) {
      if ($request->input('password')) {
        $user = Auth::user();
        $user->password = bcrypt($request->input('password'));
        $user->save();

        return View::make('page.admin.password-success', compact([]));
      } else {
        $fail = 'Password tidak bisa kosong';
        return View::make('page.admin.password', compact(['fail']));
      }
    }
}
