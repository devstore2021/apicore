<?php

namespace App\Models;

 
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\Contracts\HasAbilities;

class ManagerToken extends Model  
{
 
    public static function createTokenCustom(string $name)
    {
        
         $plainTextToken = hash('sha256', $name);

 
         return $plainTextToken;
 
      
    }
   
    public static function findToken($token)
    {
        /*if (strpos($token, '|') === false) {
            return static::where('token', hash('sha256', $token))->first();
        }

        [$id, $token] = explode('|', $token, 2);

        if ($instance = static::find($id)) {
            return hash_equals($instance->token, hash('sha256', $token)) ? $instance : null;
        }
        */
    }

    public function currentAccessToken()
    {
       // return $this->accessToken;
    }

 
     
}
