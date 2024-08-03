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
        Schema::create('voitures', function (Blueprint $table) {
            $table->id('voiture_id');
            $table->unsignedBigInteger('agence_id');
            $table->string('marque');
            $table->string('modele');
            $table->string('immatriculation')->unique();
            $table->string('annee');
            $table->decimal('prix_par_jour',8,2);
            $table->timestamps();
        });
        Schema::table('voitures', function(Blueprint $table){

            $table->foreign('agence_id')->references('agence_id')->on('agences');
            });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voitures');
    }
};
