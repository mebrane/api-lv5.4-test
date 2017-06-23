<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->integer('id')->unsigned();


            $table->char("dni",8)->unique();
            $table->string("firstname");
            $table->string("lastname");



            $table->primary('id');
            $table->foreign('id')->references('id')
                ->on('users')->onDelete('cascade');

      /*      $table->integer('id')->first()->change();*/
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
        Schema::dropIfExists('profiles');
    }
}
