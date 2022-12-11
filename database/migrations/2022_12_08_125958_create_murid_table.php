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
        Schema::create('murid', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedbiginteger('kelas_id')->require();
            $table->foreign('kelas_id')->references('id')->on('kelas')->onDelete('restrict');
            $table->string('nisn');
            $table->string('alamat');
            $table->string('email');
            $table->string('pw');
            $table->string('telp');
            $table->date('tgl_lahir');
            $table->enum('gender',['p','l']);
            $table->string('point');
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
        Schema::table('murid', function (Blueprint $table) {
            $table->dropForeign(['kelas_id']);
            $table->dropColumn('kelas_id');
        });
        
        Schema::dropIfExists('murid');
    }
};
