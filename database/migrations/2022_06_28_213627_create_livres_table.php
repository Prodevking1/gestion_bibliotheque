<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livres', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->integer('isbn');
            $table->foreignId('categorie_id')->constrained();
            $table->foreignId('auteur_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('editeur_id');
            $table->string('status')->default('Y');
            $table->integer('exemplaire')->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {  
        Schema::dropIfExists('livres');
    }
};
