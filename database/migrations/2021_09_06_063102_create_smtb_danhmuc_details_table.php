<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmtbDanhmucDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smtb_danhmuc_details', function (Blueprint $table) {

            $table->string('id_code') ;
            $table->integer('stt');
            $table->string('description');
            $table->string('ma_danhmuc');
            $table->string('id_nv_duyet', 64);
            $table->string('record_note');
            $table->string('maker_id');
            $table->string('duyet', 64) ;
            $table->string('id_validity', 1) ->defauld('C');
            $table->timestamp('ngay_duyet')->nullable();
            $table->timestamp('date_modified')->nullable();
            $table->timestamp('ngay_khoitao')->nullable();
            $table->primary('id_code');
            $table->foreign('ma_danhmuc')->references('id_code')->on('smtb_danhmuc_master');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('smtb_danhmuc_details');
    }
}
