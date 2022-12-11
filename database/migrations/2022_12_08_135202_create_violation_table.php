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
        Schema::create('violation', function (Blueprint $table) {
            $table->id();
            $table->unsignedbiginteger('murid_id')->require();
            $table->foreign('murid_id')->references('id')->on('murid')->onDelete('restrict');
            $table->unsignedbiginteger('pelanggaran_id')->require();
            $table->foreign('pelanggaran_id')->references('id')->on('pelanggaran')->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('violation', function (Blueprint $table) {
            $table->dropForeign(['murid_id']);
            $table->dropColumn('murid_id');
            $table->dropForeign(['pelanggaran_id']);
            $table->dropColumn('pelanggaran_id');
        });
        
        Schema::dropIfExists('violation');
    }
};
