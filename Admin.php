<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;  
use Illuminate\Notifications\Notifiable; 

class Admin extends Authenticatable
{
    use Notifiable;  

    protected $fillable = ['name', 'email', 'password'];
    protected $table = 'admins';

    protected $hidden = [
        'password', 'remember_token',
    ];

   
    public function getAuthPasswordName()
{
    return 'password';  
}

    public function getAuthIdentifier()
    {
        return $this->getKey();  
    }

    public function getAuthPassword()
    {
        return $this->password; 
    }

    public function getRememberToken()
    {
        return $this->remember_token;
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    public function getRememberTokenName()
    {
        return 'remember_token';
    }
}
