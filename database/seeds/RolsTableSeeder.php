<?php

use Illuminate\Database\Seeder;

class RolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(\App\models\Rol::class,5)->create()->each(function($rol){
            for($i=1;$i<rand(3,5);$i++){
                $rol->users()->save(factory(\App\User::class)->make());
            }
        });
    }
}
