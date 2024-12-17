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
        Schema::create('films', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->string('origin_title')->nullable();
            $table->string('duration')->nullable();
            $table->text('other_actor')->nullable();
            $table->text('note')->nullable();
            $table->longText('description')->nullable();


            /*$table->bigInteger('author_id')->unsigned()->nullable();*/  //варіант на 2 строки (1рядок)

            $table->foreignId('author_id')->nullable()->constrained(           //варіант на 1 строку
                table: 'users', indexName: 'films_author_id_foreign'
            );
            /*$table->foreignId('user_id')->constrained();*/        //якби назвав user_id (або була модель/таблиця author), а не author_id, було б ще простіше (реально 1 рядок)


            $table->integer('category_id')->unsigned()->nullable();      // те саме: $table->integer('category_id, false, true');    false - поле не автоінкрементоване, true - unsigned(
            /*$table->integer('director_id')->unsigned();*/
            $table->integer('year_id')->unsigned()->nullable();
            /*$table->integer('company_id')->unsigned();*/
            $table->integer('season_id')->unsigned()->nullable();
            $table->integer('rating_id')->unsigned()->nullable();
            /*$table->integer('composer_id')->unsigned();*/
            $table->integer('status_id')->unsigned()->nullable();
            $table->integer('age_id')->unsigned()->nullable();
            $table->integer('quality_id')->unsigned()->nullable();
            $table->integer('duration_id')->unsigned()->nullable();
            /*$table->integer('watch_id')->unsigned();*/
            $table->integer('view')->unsigned()->default(0);


            $table->string('thumbnail')->nullable();

            $table->date('date')->nullable();

            $table->integer('statuss')->default(0);    //Чернетка
            $table->integer('is_featured')->default(0);  //Обрані пости


            /*$table->foreign('author_id')->references('id')->on('users'); */            //варіант на 2 строки (2рядок)


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
