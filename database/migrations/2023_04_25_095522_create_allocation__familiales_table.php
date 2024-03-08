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
        Schema::create('allocation_familiales', function (Blueprint $table) {
            $table->integer('Ref_allocation_familiale');          
            $table->string('Type_allocation_familiale');
            $table->string('Valeur_allocation_familiale');
            $table->date('date_allocation');
            $table->string('DRPP');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('allocation_familiales');
    }
};
