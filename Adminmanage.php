<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class AdminManage extends Authenticatable
{
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $table = 'adminmanage'; 
}