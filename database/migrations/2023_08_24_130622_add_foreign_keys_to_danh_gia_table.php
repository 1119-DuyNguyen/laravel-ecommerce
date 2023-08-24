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
        Schema::table('danh_gia', function (Blueprint $table) {
            $table->foreign(['MaSP'], 'fk_tai_khoan_has_san_pham_san_pham1')->references(['MaSP'])->on('san_pham')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['MaTK'], 'fk_tai_khoan_has_san_pham_tai_khoan1')->references(['MaTK'])->on('tai_khoan')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('danh_gia', function (Blueprint $table) {
            $table->dropForeign('fk_tai_khoan_has_san_pham_san_pham1');
            $table->dropForeign('fk_tai_khoan_has_san_pham_tai_khoan1');
        });
    }
};
