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
        Schema::table('chi_tiet_hoa_don', function (Blueprint $table) {
            $table->foreign(['MaHD'], 'chitiethoadon_ibfk_1')->references(['MaHD'])->on('hoa_don')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['MaSP'], 'chitiethoadon_ibfk_2')->references(['MaSP'])->on('san_pham')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('chi_tiet_hoa_don', function (Blueprint $table) {
            $table->dropForeign('chitiethoadon_ibfk_1');
            $table->dropForeign('chitiethoadon_ibfk_2');
        });
    }
};
