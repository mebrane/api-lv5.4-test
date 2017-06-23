<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string("title");
            $table->text("description");
            $table->timestamps();
        });

        Schema::create('book_profile', function (Blueprint $table) {

            $table->integer('book_id')->unsigned();
            $table->foreign('book_id')->references('id')
                ->on('books')->onDelete('cascade');

            $table->integer('profile_id')->unsigned();
            $table->foreign('profile_id')->references('id')
                ->on('profiles')->onDelete('cascade');

            $table->unique(["book_id","profile_id"]);

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
        Schema::dropIfExists('book_profile');
        Schema::dropIfExists('books');
    }
}
