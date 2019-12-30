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
            $table->string('publisher', 128)->nullable();
            $table->string('isbn', 13)->nullable();
            $table->enum('condition', ['fine', 'great', 'good', 'fair', 'poor']);
            $table->boolean('highlighting')->default(false);
            $table->double('price');
            $table->boolean('sold')->default(false);

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
