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
        Schema::create('diplomes', function (Blueprint $table) {
            $table->integer('Ref_diplome');          
            $table->string('Nom_diplome');
            $table->string('Specialite');
            $table->date('Date_obtention');
            $table->string('Ecole');
            $table->string('Ville_diplome');
            $table->string('DRPP');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diplomes');
    }
};
