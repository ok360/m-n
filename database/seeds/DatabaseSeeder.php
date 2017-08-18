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

        factory (\App\Student::class, 50)->create();

        // $this->call(UsersTableSeeder::class);

//        \App\Student::create([
//            'name'=>'Ahad',
//            'class'=>'9th'
//                             ]);

    }
}
