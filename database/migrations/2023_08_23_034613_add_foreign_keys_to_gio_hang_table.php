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
        Schema::table('gio_hang', function (Blueprint $table) {
            $table->foreign(['MaTK'], 'giohang_ibfk_1')->references(['MaTK'])->on('tai_khoan')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['MaSP'], 'giohang_ibfk_2')->references(['MaSP'])->on('san_pham')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('gio_hang', function (Blueprint $table) {
            $table->dropForeign('giohang_ibfk_1');
            $table->dropForeign('giohang_ibfk_2');
        });
    }
};
