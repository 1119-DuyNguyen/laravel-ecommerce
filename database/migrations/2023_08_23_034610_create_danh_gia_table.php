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
        Schema::create('danh_gia', function (Blueprint $table) {
            $table->unsignedInteger('MaTK')->index('fk_tai_khoan_has_san_pham_tai_khoan1_idx');
            $table->unsignedInteger('MaSP')->index('fk_tai_khoan_has_san_pham_san_pham1_idx');
            $table->float('DanhGia', 10, 0);

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
        Schema::dropIfExists('danh_gia');
    }
};
