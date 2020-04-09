<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('temperatura')->nullable($value = true)->default('NULL');
            $table->string('tos')->nullable($value = true)->default('NULL');
            $table->string('respirar')->nullable($value = true)->default('NULL');
            $table->string('salud')->nullable($value = true)->default('NULL');
            $table->string('edad')->nullable($value = true)->default('NULL');
            $table->string('ci')->nullable($value = true)->default('NULL');
            $table->string('correo')->nullable($value = true)->default('NULL');
            $table->string('telefono')->nullable($value = true)->default('NULL');
            $table->string('direccion')->nullable($value = true)->default('NULL');
            $table->timestamps();

            $table->foreignId('user_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tests');
    }
}
