<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
      /*  factory(\App\User::class,20)->create()->each(function($user){
           $user->profile()->save(factory(\App\models\Profile::class))->make();
        });*/

    /*  $users=\App\User::all()->count();
      for($i=1;$i<=$users;$i++){
          $user=\App\User::find($i);
          $user->profile()->save(factory(\App\models\Profile::class)->make());
      }*/
    }
}
