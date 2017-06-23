<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolsTableSeeder::class); //+Users
        $this->call(BooksTableSeeder::class);
        $this->call(ProfilesTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
    }
}
