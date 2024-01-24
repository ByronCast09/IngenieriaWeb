<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('preguntas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('prueba_id');
            $table->text('contenido');
            $table->timestamps();

            $table->foreign('prueba_id')->references('id')->on('pruebas')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('preguntas');
    }
};
