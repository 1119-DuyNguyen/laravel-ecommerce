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
        Schema::create('hoa_don', function (Blueprint $table) {
            $table->increments('MaHD');
            $table->unsignedInteger('MaTK')->index('hoadon_ibfk_1_idx');
            $table->dateTime('NgayLap');
            $table->integer('TongTien');
            $table->unsignedInteger('MaKM')->nullable()->index('MaKM');
            $table->unsignedInteger('MaVC')->nullable()->index('hoadon_ibfk_3_idx');
            $table->unsignedTinyInteger('TrangThai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hoa_don');
    }
};
