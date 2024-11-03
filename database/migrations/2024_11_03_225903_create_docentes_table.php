<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocentesTable extends Migration
{
    public function up()
    {
        Schema::create('docentes', function (Blueprint $table) {
            $table->id();
            $table->text('nombre');
            $table->text('apellido');
            $table->text('mail')->unique();
            $table->text('especialidad');
            $table->timestamps();
        });

        // Modificar la tabla informes para agregar la relación con docentes
        Schema::table('informes', function (Blueprint $table) {
            $table->foreignId('docente_id')->nullable()->constrained('docentes')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::table('informes', function (Blueprint $table) {
            $table->dropForeign(['docente_id']);
            $table->dropColumn('docente_id');
        });

        Schema::dropIfExists('docentes');
    }
}
