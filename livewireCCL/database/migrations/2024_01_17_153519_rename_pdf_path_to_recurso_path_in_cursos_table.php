<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class RenamePdfPathToRecursoPathInCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cursos', function (Blueprint $table) {
            $table->string('recurso_path')->after('video_link'); // Asume que pdf_path es de tipo string
        });

        DB::table('cursos')->update(['recurso_path' => DB::raw('pdf_path')]);

        Schema::table('cursos', function (Blueprint $table) {
            $table->dropColumn('pdf_path');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cursos', function (Blueprint $table) {
            $table->string('pdf_path')->after('video_link'); // Asume que recurso_path es de tipo string
        });

        DB::table('cursos')->update(['pdf_path' => DB::raw('recurso_path')]);

        Schema::table('cursos', function (Blueprint $table) {
            $table->dropColumn('recurso_path');
        });
    }
}