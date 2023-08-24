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
        Schema::create('san_pham', function (Blueprint $table) {
            $table->increments('MaSP');
            $table->unsignedInteger('MaTK')->index('fk_sanpham_taikhoan_idx');
            $table->string('TenSP');
            $table->integer('SoLuong');
            $table->integer('DonGia');
            $table->string('HinhAnh');
            $table->tinyInteger('TrangThai')->default(1);
            $table->integer('loaisanpham_MaLSP')->index('fk_sanpham_loaisanpham1_idx');
            $table->float('DanhGia', 10, 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('san_pham');
    }
};
