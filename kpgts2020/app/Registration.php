<?php

namespace App;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{

    protected $table = 'kpgts2020_registrations';
    
    /**
     * Get the user that owns the registration data.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function registered()
    {
        return $this->belongsTo('App\User', 'registered_by', 'id');
    }

    public function register() {
        $count = Registration::where([
            ['nomor_peserta', '<>', ''],
            ['kelompok_ujian', '=', $this->kelompok_ujian],
        ])->count();
        $nomor_peserta = (string) ($count+1);
        while (strlen($nomor_peserta) < 5) {
          $nomor_peserta = "0" . $nomor_peserta;
        }
        if ($this->kelompok_ujian == "Saintek")     { $nomor_peserta = "01-" . $nomor_peserta; }
        else if ($this->kelompok_ujian == "Soshum") { $nomor_peserta = "02-" . $nomor_peserta; }
        $nomor_peserta = "008-" . $nomor_peserta;

        $this->nomor_peserta = $nomor_peserta;
        $this->registered_by = Auth::id();
        $this->save();
    }

    public function isFilled()
    {
        return !(
            $this->user->name == '' ||
            $this->sma == '' ||
            $this->kelompok_ujian == '' ||
            !($this->biaya == 35000) ||
            $this->metode_pembayaran == '' ||
            $this->no_hp == '' ||
            $this->no_wa == ''
        );
    }
}
