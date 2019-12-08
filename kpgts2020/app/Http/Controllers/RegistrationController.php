<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Registration;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return RegistrationController::show(Auth::user()->registration);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return abort(405);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return abort(405);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function show(Registration $registration)
    {
        if ($registration->user_id != Auth::id()) {
            return abort(401);
        }
        
        return View::make('page.user.registration_show', compact(['registration']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function edit(Registration $registration)
    {
        if ($registration->user_id != Auth::id()) {
            return abort(401);
        }
        if ($registration->nomor_peserta != '') {
            return abort(403);
        }
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
        ];

        return View::make('page.user.registration_edit', compact(['registration', 'smas']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registration $registration)
    {
        if ($registration->user_id != Auth::id()) {
            return abort(401);
        }
        if ($registration->nomor_peserta != '') {
            return abort(403);
        }

        $user = Auth::user();
        $user->name                      = $request->input('name')?:'';
        $user->save();

        $registration->kelompok_ujian    = $request->input('kelompok-ujian')?:'';
        $registration->metode_pembayaran = $request->input('metode-pembayaran')?:'';
        $registration->sma               = $request->input('asal-sma')?:'';
        $registration->no_hp             = $request->input('no-hp')?:'';
        $registration->no_wa             = $request->input('no-wa')?:'';
        $registration->id_line           = $request->input('id-line')?:'';
        $registration->biaya             = 35000
        $registration->save();

        return redirect('user/dashboard');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registration $registration)
    {
        error(405);
    }
}
