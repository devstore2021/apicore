<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhmucMaster extends Model
{
    use HasFactory;

    
    protected $table = 'smtb_danhmuc_master';


    protected $fillable = [
        'id_code',
        'description',
        'id_validity',
        'id_nv_duyet',
        'record_note',
        'maker_id',
        'duyet'
    ];


}
