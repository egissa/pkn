<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nik', 'password',
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
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function penduduk()
    {
        return $this->hasOne(Penduduk::class);
    }

    public function skck()
    {
        return $this->hasOne(Skck::class);
    }

    public function usaha()
    {
        return $this->hasOne(Usaha::class);
    } 

    public function admin()
    {
        return $this->hasOne(Admin::class);
    }

    public function jabatan()
    {
        return $this->hasMany(Jabatan::class);
    }
}
