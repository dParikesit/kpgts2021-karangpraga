<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'kpgts2020_users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get the registration data associated with the user.
     */
    public function registration()
    {
        return $this->hasOne('App\Registration');
    }

    public function registering()
    {
        return $this->hasMany('App\Registration', 'regsiterd_by', 'id');
    }

    public function canRegistUser()
    {
        return
            $this->id == 1   || // yonas
            $this->id == 8   || // jojo
            $this->id == 25  || // tere
            $this->id == 168 || // wiwid
            $this->id == 575 || // fachtur
            $this->id == 773 || // adhi
            $this->id == 777;   // nando
    }
}
