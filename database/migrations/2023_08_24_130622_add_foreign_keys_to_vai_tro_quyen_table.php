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
        Schema::table('vai_tro_quyen', function (Blueprint $table) {
            $table->foreign(['MaQuyen'], 'fk_vai_tro_has_quyen_quyen1')->references(['MaQuyen'])->on('quyen')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['MaVT'], 'fk_vai_tro_has_quyen_vai_tro1')->references(['MaVT'])->on('vai_tro')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vai_tro_quyen', function (Blueprint $table) {
            $table->dropForeign('fk_vai_tro_has_quyen_quyen1');
            $table->dropForeign('fk_vai_tro_has_quyen_vai_tro1');
        });
    }
};
