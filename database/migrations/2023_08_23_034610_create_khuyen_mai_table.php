<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khuyen_mai', function (Blueprint $table) {
            $table->increments('MaKM');
            $table->string('TenKM');
            $table->integer('DieuKienKM');
            $table->dateTime('NgayBD');
            $table->integer('PhanTramKM');
            $table->dateTime('NgayKT');
            $table->tinyInteger('TrangThai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khuyen_mai');
    }
};
