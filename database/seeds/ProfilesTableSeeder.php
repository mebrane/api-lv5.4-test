<?php

use Illuminate\Database\Seeder;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users=\App\User::all()->count();
        for($i=1;$i<=$users;$i++){
            $user=\App\User::find($i);
            $user->profile()->save(factory(\App\models\Profile::class)->make());
        }
    }
}
