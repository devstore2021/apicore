<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TokensModel extends Model
{
    use HasFactory;


    protected $table = 'personal_access_tokens';


    protected $fillable = [
        'tokenable',
        'tokenable_type',
        'name',
        'token',
        'tokenable_id',
        'abilities',
        'last_used_at'
    ];

}


 