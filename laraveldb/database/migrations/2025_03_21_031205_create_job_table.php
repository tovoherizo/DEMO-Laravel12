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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('titre')->nullable();
            $table->string('image')->nullable();
            $table->string('category')->nullable();
            $table->string('location')->nullable();
            $table->string('salary_min')->nullable();
            $table->string('salary_max')->nullable();
            $table->string('contrat')->nullable();
            $table->date('date_limit')->nullable();
            $table->longText('description')->nullable();
            $table->longText('responsability')->nullable();
            $table->longText('qualification')->nullable();
            $table->longText('detail_entreprise')->nullable();
            $table->timestamps();
        });
       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
