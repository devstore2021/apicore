<?php

namespace App\Models\FuncList;

use App\Models\Api\DanhmucMaster;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TaokhoaFunc  
{
 
    public static function taokhoa_danhmuc_master( )
    {

        $maxid = DanhmucMaster::max('id_code')+1;

        return $maxid;
 
    }


}
