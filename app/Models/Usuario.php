<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Auth;

class Usuario extends RModel implements Authenticatable
{
    protected $table = "usuarios";

    protected $fillable = ['email','login', 'password', 'nome'];

    public function getAuthIdentifierName()
    {
        return "login";
    }

    public function getAuthIdentifier()
    {
        return $this->login;
    }

    public function getAuthPassword()
    {
        return $this->password;
    }
    
    public function getRememberToken()
    {

    }
    
    public function setRememberToken($value)
    {

    }
    
    public function getRememberTokenName()
    {

    }

    public function setLoginAttribute($login)
    {
        $value = preg_replace("/[^0-9]/","",$login);
        $this->attributes["login"] = $value;
    }
    
}
