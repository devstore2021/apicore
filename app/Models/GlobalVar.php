<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GlobalVar extends Model
{
    use HasFactory;

 public static function error_code( )
{

    $error_code     =   array(
        'ER001'         =>     'true',
        'ER002'  =>      'false' ,
    );

    return $error_code ;

}

public static $message_code        =       array(
    "MS001"         =>     "Thành công",
    "MS002"   =>      "Giá trị đã tồn tại" );




}
