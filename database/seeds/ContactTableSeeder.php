<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\Agendavel\Contact::class, 200)->create()->each(function($contact) {
            for($i = 1; $i <= rand(1, 5); $i++) {
                $contact->numbers()->save(factory(\Agendavel\Number::class)->make());
            }
        });
    }
}
