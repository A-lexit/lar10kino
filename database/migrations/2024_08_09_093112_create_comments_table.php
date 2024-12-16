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
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subject')->nullable();
            $table->text('body');
//            $table->unsignedBigInteger('article_id');
            $table->integer('status')->default(0);

            $table->integer('film_id')->nullable(); // Цього достатньо
            /*$table->integer('film_id')->constrained('films')->nullable();*/        // Було так раніше
            /*$table->foreignId('article_id')->constrained()->onDelete('cascade'); */  //У Шматова так

            $table->integer('user_id')->nullable();
            /*$table->integer('user_id')->constrained('users')->nullable();*/   //Чомусь прокатує
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
