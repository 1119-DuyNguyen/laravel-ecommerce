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
        Schema::create('option_san_pham', function (Blueprint $table) {
            $table->increments('MaOption');
            $table->unsignedInteger('MaSP')->index('fk_optionsanpham_sanpham1_idx');
            $table->string('TenOption');
            $table->integer('DonGia');
            $table->integer('SoLuong');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('option_san_pham');
    }
};
