<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Agendavel\Contact;
use Agendavel\Number;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contacts = factory(Contact::class, 200)->create();

        $contacts->each(function($contact) {

            $generateAmount = rand(1, 5);

            for($i = 1; $i <= $generateAmount; $i++) {
                $number = factory(Number::class)->make();
                $contact->numbers()->save($number);
            }

        });
    }
}
