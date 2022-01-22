<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'cursos',
            function (Blueprint $table) {
                $table->id(); // Id clásico.
                $table->string('name'); // Varchar 255.
                $table->string('slug'); // Para crear URLs amigables.
                $table->text('descripcion'); // Text.
                $table->text('categoria');
                $table->timestamps(); // Created at y Updated at.
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
}
