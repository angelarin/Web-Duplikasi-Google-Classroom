<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawabansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawabans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_isipost');
            $table->string('file_jb')->nullable();
            $table->text('isi_jb')->nullable();
            $table->bigInteger('nilai');
            $table->string('status');
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users')->onDelete('restrict');
            $table->foreign('id_isipost')->references('id')->on('isiposts')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jawabans');
    }
}
