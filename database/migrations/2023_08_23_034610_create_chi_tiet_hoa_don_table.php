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
        Schema::create('chi_tiet_hoa_don', function (Blueprint $table) {
            $table->unsignedInteger('MaHD');
            $table->unsignedInteger('MaSP')->index('MaSP');
            $table->unsignedInteger('DonGia');
            $table->unsignedInteger('SoLuong');

            $table->primary(['MaHD', 'MaSP']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chi_tiet_hoa_don');
    }
};
