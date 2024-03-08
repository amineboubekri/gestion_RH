<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('notations', function (Blueprint $table) {
            $table->integer('Ref_note')->primary();
            $table->float('Note_appliquee');
            $table->float('Note_rentabilite');
            $table->float('Note_capacite');
            $table->float('Note_comportement_professionnel');
            $table->float('Note_recherche');
            $table->string('Mention');
            $table->string('Commentaire');            
            $table->integer('Annee');
            $table->string('DRPP');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notations');
    }
};

