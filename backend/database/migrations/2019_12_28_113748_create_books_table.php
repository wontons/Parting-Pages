<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 128);
            $table->string('author', 128);
            $table->string('publisher', 128);
            //$table->integer('author_id');
            //$table->integer('publisher_id');
            $table->string('isbn', 13)->nullable();
            $table->enum('condition', ['fine', 'great', 'good', 'fair', 'poor']);
            $table->boolean('highlighting');
            $table->double('price', 9, 2);
            $table->boolean('sold');

            //$table->foreign('author_id')->references('id')->on('authors')->onDelete('cascade');
            //$table->foreign('publisher_id')->references('id')->on('publishers')->onDelete('cascade');

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
        Schema::dropIfExists('books');
    }
}
