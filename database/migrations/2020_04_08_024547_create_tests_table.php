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
            $table->string('tos')->nullable($value = true);
            $table->string('respirar')->nullable($value = true);
            $table->string('salud')->nullable($value = true);
            $table->string('edad')->nullable($value = true);
            $table->string('ci')->nullable($value = true);
            $table->string('correo')->nullable($value = true);
            $table->string('telefono')->nullable($value = true);
            $table->string('direccion')->nullable($value = true);
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
