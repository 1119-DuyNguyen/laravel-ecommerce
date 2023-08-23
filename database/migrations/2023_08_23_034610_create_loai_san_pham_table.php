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
        Schema::create('loai_san_pham', function (Blueprint $table) {
            $table->integer('MaLSP', true);
            $table->string('TenLSP');
            $table->text('Mota');
            $table->tinyInteger('TrangThai');
            $table->integer('loaisanpham_MaLSP')->nullable()->index('fk_loaisanpham_loaisanpham1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loai_san_pham');
    }
};
