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
            $table->id();
            $table->timestamps();

			$table->bigInteger('author_id')->unsigned()->index()->nullable();
			$table->string('slug')->unique();
			$table->string('title');
			$table->text('annotation')->nullable();
			$table->string('cover_url')->nullable();
			$table->timestamp('release_date')->nullable();
			$table->boolean('is_published')->default(false);


			$table->foreign('author_id')->references('id')->on('authors');
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
