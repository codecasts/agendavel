<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new Agendavel\User();
        $user->email = 'diego@hernandev.com';
        $user->password = bcrypt('abcd1234');
        $user->name = 'Diego Hernandes';
        $user->save();

        factory('Agendavel\User', 20)->create();
    }
}
