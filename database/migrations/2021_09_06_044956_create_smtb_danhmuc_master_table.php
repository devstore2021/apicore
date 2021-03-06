<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmtbDanhmucMasterTable extends Migration
{
   
    public function up()
    {
        Schema::create('smtb_danhmuc_master', function (Blueprint $table) {
            $table->string('id_code')->unique() ;
            $table->string('description');
            $table->string('id_nv_duyet', 64);
            $table->string('record_note');
            $table->string('maker_id');
            $table->string('duyet', 64) ;
            $table->string('id_validity', 1) ;
            $table->timestamp('ngay_duyet')->nullable();
            $table->timestamp('date_modified')->nullable();
            $table->timestamp('ngay_khoitao')->nullable();
            $table->primary('id_code');
        });


    }

 

  
    public function down()
    {
        Schema::dropIfExists('smtb_danhmuc_master');
    }
}
