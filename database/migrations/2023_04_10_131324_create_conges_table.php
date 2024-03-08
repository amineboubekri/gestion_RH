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
        Schema::create('conges', function (Blueprint $table) {
            $table->integer('Ref_conge')->primary();
            $table->string('type_conge');
            $table->string('NomRemplacent');
            $table->integer('nbj');
            $table->integer('AnneeConge');
            $table->dateTimeTz('date_retour');
            $table->dateTimeTz('date_debut');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->timestamps();
            $table->integer('DRPP');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conges');
    }
};
