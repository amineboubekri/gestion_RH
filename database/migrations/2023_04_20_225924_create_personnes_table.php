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
        Schema::create('personnes', function (Blueprint $table) {
            $table->integer('DRPP')->primary();
            $table->string('Num_poste');
            $table->string('Affiliation_Financiere');
            $table->string('Nom');
            $table->string('Prenom');
            $table->string('Nom_Français');
            $table->string('Prenom_Français');
            $table->string('CIN');            
            $table->date('date_naissance');
            $table->string('Lieu_Naissance');
            $table->string('Adresse');
            $table->string('Telephone');
            $table->string('Situation_Familiale');
            $table->integer('Nombre_enfant');
            $table->string('Lieu_Travail');
            $table->date('date_emboche');
            $table->string('Situation_Administrative');
            $table->dateTimeTz('date_recrutement');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personnes');
    }
};
