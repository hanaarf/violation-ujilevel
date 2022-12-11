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
        Schema::create('guru', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedbiginteger('mapel_id')->require();
            $table->foreign('mapel_id')->references('id')->on('mapel')->onDelete('restrict');
            $table->string('nik');
            $table->string('alamat');
            $table->string('email');
            $table->string('pw');
            $table->string('telp');
            $table->date('tgl_lahir');
            $table->enum('gender',['p','l']);
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
        Schema::table('guru', function (Blueprint $table) {
            $table->dropForeign(['mapel_id']);
            $table->dropColumn('mapel_id');
        });
        Schema::dropIfExists('guru');
    }
};
