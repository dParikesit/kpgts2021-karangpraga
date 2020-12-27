<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\RegisterController;
use App\User;
use App\Registration;

class UserController extends Controller
{

    public function create() {
      return View::make('page.user.register');
    }

    public function store(Request $request) {
      if (User::where('email', $request->input('email'))->first()) {
        $fail = 'Email is taken';
        return View::make('page.user.register', compact(['fail']));
      }

      $user = new User();
      $user->name     = $request->input('name');
      $user->email    = $request->input('email');
      $user->password = bcrypt($request->input('password'));
      $user->type     = 'user';
      $user->save();

      $regist = new Registration();
      $regist->user_id           = $user->id;
      $regist->nomor_peserta     = '';
      $regist->sma               = '';
      $regist->kelompok_ujian    = 'Saintek';
      $regist->biaya             = 50000;
      $regist->sesi              = '0';
      $regist->no_hp             = '';
      $regist->no_wa             = '';
      $regist->id_line           = '';
      $regist->metode_pembayaran = 'Transfer';
      $regist->registered_by     = NULL;
      $regist->save();

      return View::make('page.user.register-success');
    }

    public function login() {
      $old['email']    = '';
      $old['password'] = '';
      return View::make('page.user.login', compact(['old']));
    }

    public function auth(Request $request) {
      $old['email']    = $request->input('email');
      $old['password'] = $request->input('password');

      if (Auth::attempt(['email' => $old['email'], 'password' => $old['password']])) {
        $user = Auth::user();
        if ($user->type == 'user') {
          if ($user->registration->isFilled()) {
            return redirect('/user/dashboard');
          } else {
            return redirect('/user/registration/'.$user->registration->id.'/edit');
          }
        } else {
          Auth::logout();
          $fail = 'You are not user. Try login as admin.';
          return View::make('page.user.login', compact(['fail']));
        }
      } else {
        $fail = 'Username / Password mismatch';
        return View::make('page.user.login', compact(['old', 'fail']));
      }
    }

    public function logout() {
      Auth::logout();
      return redirect('/user/login');
    }

    public function dashboard() {
      $user = Auth::user();
      $biaya = $user->registration->biaya;
      if ($user->registration->metode_pembayaran == 'Transfer') {
        $biaya += $user->registration->id;
      }
      $pj = [
        "SMAN 1 Semarang" => "<strong>Belum ada PJ</strong> (line: -, -)",
        "SMAN 2 Semarang" => "<strong>Belum ada PJ</strong> (line: -, -)",
        "SMAN 3 Semarang" => "<strong>Belum ada PJ</strong> (line: -, -)",
        "SMAN 4 Semarang" => "<strong>Belum ada PJ</strong> (line: -, -)",
        "SMAN 5 Semarang" => "<strong>Belum ada PJ</strong> (line: -, -)",
        "SMAN 12 Semarang" => "<strong>Belum ada PJ</strong> (line: -)",
        "SMAN 1 Ungaran" => "<strong>Belum ada PJ</strong> (line: -, -)",
        "SMA Semesta" => "<strong>Belum ada PJ</strong> (line: -, -)",
        "SMA Karangturi" => "<strong>Belum ada PJ</strong> (line: -, -)",
        "Kolese Loyola" => "<strong>Belum ada PJ</strong> (line: -, -)",
        "SMAN 1 Kendal" => "<strong>Belum ada PJ</strong> (line: -, -)"
        // "Nama_sekolah" => "<strong>NAMA_PJ_DIGANTI_YAA</strong> (line: ID_LINENYA_DIGANTI_YAA, NO_TELP_DIGANTI_YAA)",
      ];
      return View::make('page.user.dashboard', compact(['biaya', 'pj', 'user']));
    }

    public function editPassword() {
      return View::make('page.user.password', compact([]));
    }

    public function updatePassword(Request $request) {
      if ($request->input('password')) {
        $user = Auth::user();
        $user->password = bcrypt($request->input('password'));
        $user->save();

        return View::make('page.user.password-success', compact([]));
      } else {
        $fail = 'Password tidak bisa kosong';
        return View::make('page.user.password', compact(['fail']));
      }
    }

    public function showFAQ() {
      $faqs = [
        [
          "question" => "Saya sudah membayar tapi belum diverifikasi",
          "answer" => "Silakan menunggu maksimal 3 hari, pastikan transfer hingga 3 digit terakhir."
        ],
        [
          "question" => "Saya salah memasukkan alamat email dan belum membayar. Apakah alamat email bisa diubah?",
          "answer"   => "Tidak. Anda sebaiknya membuat akun baru."
        ],
        [
          "question" => "Saya salah memasukkan alamat email dan sudah membayar. Apakah alamat email bisa diubah? ",
          "answer"   => "Silakan kontak salah satu CP yang ada di Dashboard."
        ],
        [
          "question" => "Jika saya kesulitan mendaftar secara online apakah dibuka pendaftaran offline?",
          "answer"   => "Ya. Kami akan membuka pendaftaran offline saat roadshow (sekolah tertentu). Silakan cek Jadwal Roadshow."
        ],
        [
          "question" => "Kalau PJ sekolah saya susah ditemui apa yang harus saya lakukan?",
          "answer"   => "Silakan ganti metode pembayaran menjadi Transfer."
        ],
      ];
      return View::make('page.user.faq', compact(['faqs']));
    }
}
