<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class TaiKhoan extends Authenticatable
{
    use Notifiable;

    protected $table = "tai_khoan";
    public $timestamps = false;
    protected $guard = 'customer';
    protected $fillable = [
        'name',
        'email',
        'password',
        'address',
        'phone'
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];

}
