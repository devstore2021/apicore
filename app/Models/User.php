<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

   
    protected $fillable = [
        'name',
        'email',
        'password',
        'home_branch',
        'user_token'
    ];
 
    protected $hidden = [
        'password',
        'remember_token',
        'user_token',
    ];

    
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    
    public static function check_acount(User $user , string $email,string $tokenkey , string $password)
    {
          
       
        if( Hash::check($password, $user['password']  )  &&  ($user['user_token']=$tokenkey) && ($user['email']== $email) )
        {
             return  true;
        }
        else{

            return false;
        }

    
    }



}
