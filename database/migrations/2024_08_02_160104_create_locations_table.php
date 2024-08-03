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
        Schema::create('locations', function (Blueprint $table) {
            $table->id('location_id');
            $table->unsignedBigInteger('voiture_id');
            $table->unsignedBigInteger('client_id');
             $table->date('date_debut');
            $table->date('date_fin');
            $table->decimal('prix_total', 8, 2);
            $table->timestamps();
        });
        Schema::table('locations', function (Blueprint $table) {
            $table->foreign('voiture_id')->references('voiture_id')->on('voitures');
            $table->foreign('client_id')->references('client_id')->on('clients');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locations');
    }
};
