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
        Schema::create('vai_tro_quyen', function (Blueprint $table) {
            $table->integer('MaVT')->index('fk_vai_tro_has_quyen_vai_tro1_idx');
            $table->unsignedInteger('MaQuyen')->index('fk_vai_tro_has_quyen_quyen1_idx');

            $table->primary(['MaVT', 'MaQuyen']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vai_tro_quyen');
    }
};
