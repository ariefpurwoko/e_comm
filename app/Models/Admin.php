<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable
     * 
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays
     * 
     * @var array
     */
    protected $hidden = [
        'password', 'rememberToken'
    ];

    /**
     * The attributes that should cast to native types
     * 
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
