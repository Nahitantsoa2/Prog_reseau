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
        Schema::create('ahats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idcli')->references('id')->on('clients');
            $table->string('Nom_produit');
            $table->date('Date_validation');
            $table->string('Montant_Total');
            $table->timestamps();
         
        });   
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
