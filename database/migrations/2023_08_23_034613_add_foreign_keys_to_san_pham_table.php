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
        Schema::table('san_pham', function (Blueprint $table) {
            $table->foreign(['loaisanpham_MaLSP'], 'fk_sanpham_loaisanpham1')->references(['MaLSP'])->on('loai_san_pham')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['MaTK'], 'fk_sanpham_taikhoan')->references(['MaTK'])->on('tai_khoan')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('san_pham', function (Blueprint $table) {
            $table->dropForeign('fk_sanpham_loaisanpham1');
            $table->dropForeign('fk_sanpham_taikhoan');
        });
    }
};
