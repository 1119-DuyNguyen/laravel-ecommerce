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
        Schema::table('loai_san_pham', function (Blueprint $table) {
            $table->foreign(['loaisanpham_MaLSP'], 'fk_loaisanpham_loaisanpham1')->references(['MaLSP'])->on('loai_san_pham')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('loai_san_pham', function (Blueprint $table) {
            $table->dropForeign('fk_loaisanpham_loaisanpham1');
        });
    }
};
