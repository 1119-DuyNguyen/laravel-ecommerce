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
        Schema::table('option_san_pham', function (Blueprint $table) {
            $table->foreign(['MaSP'], 'fk_optionsanpham_sanpham1')->references(['MaSP'])->on('san_pham')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('option_san_pham', function (Blueprint $table) {
            $table->dropForeign('fk_optionsanpham_sanpham1');
        });
    }
};
