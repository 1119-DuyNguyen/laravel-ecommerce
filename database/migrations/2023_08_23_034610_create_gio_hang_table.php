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
        Schema::create('gio_hang', function (Blueprint $table) {
            $table->unsignedInteger('MaTK')->index('giohang_ibfk_1_idx');
            $table->unsignedInteger('MaSP')->index('giohang_ibfk_2_idx');
            $table->integer('SoLuong');

            $table->primary(['MaTK', 'MaSP']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gio_hang');
    }
};
