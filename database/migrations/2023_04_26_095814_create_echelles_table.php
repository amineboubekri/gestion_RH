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
        Schema::create('echelles', function (Blueprint $table) {
            $table->integer('Ref_echelle');          
            $table->string('DRPP');
            $table->string('Designation_echelle');
            $table->date('Date_echelle');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('echelles');
    }
};
