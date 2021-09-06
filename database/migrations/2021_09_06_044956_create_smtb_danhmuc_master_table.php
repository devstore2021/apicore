<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmtbDanhmucMasterTable extends Migration
{
   
    public function up()
    {
        Schema::create('smtb_danhmuc_master', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

  
    public function down()
    {
        Schema::dropIfExists('smtb_danhmuc_master');
    }
}
