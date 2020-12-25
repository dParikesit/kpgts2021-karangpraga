<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'kpgts2021_users';

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
        return $this->isSuperAdmin();
    }

    public function isSuperAdmin()
    {
        return $this->type == 'superadmin';
    }

    public function isAdmin()
    {
        return $this->type == 'admin' || $this->type == 'superadmin';
    }
}
