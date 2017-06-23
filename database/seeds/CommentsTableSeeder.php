<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $books=\App\models\Book::all();
        $profiles=\App\models\Profile::all();

        $books->each(function($book){
            for($j=1;$j<rand(3,6);$j++){
                $book->comments()->save(factory(\App\models\Comment::class)->make());
            }

        });

        $profiles->each(function($profile){
            for($j=1;$j<rand(3,6);$j++) {
                $profile->comments()->save(factory(\App\models\Comment::class)->make());
            }
        });
    }
}
