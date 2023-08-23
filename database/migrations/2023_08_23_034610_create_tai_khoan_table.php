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
        Schema::create('tai_khoan', function (Blueprint $table) {
            $table->increments('MaTK');
            $table->string('TenTaiKhoan');
            $table->string('MatKhau');
            $table->tinyInteger('TrangThai');
            $table->string('DiaChi')->nullable();
            $table->integer('MaVT')->index('fk_tai_khoan_vai_tro1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tai_khoan');
    }
};
