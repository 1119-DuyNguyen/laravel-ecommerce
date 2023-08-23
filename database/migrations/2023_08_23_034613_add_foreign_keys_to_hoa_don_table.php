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
        Schema::table('hoa_don', function (Blueprint $table) {
            $table->foreign(['MaTK'], 'hoadon_ibfk_1')->references(['MaTK'])->on('tai_khoan')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['MaKM'], 'hoadon_ibfk_2')->references(['MaKM'])->on('khuyen_mai')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['MaVC'], 'hoadon_ibfk_3')->references(['MaVC'])->on('van_chuyen')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hoa_don', function (Blueprint $table) {
            $table->dropForeign('hoadon_ibfk_1');
            $table->dropForeign('hoadon_ibfk_2');
            $table->dropForeign('hoadon_ibfk_3');
        });
    }
};
