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
        $faker = Faker\Factory::create();
        for($i=0;$i<20;$i++){
            DB::table('users')->insert([
                'name' => $faker->firstName,
                'mensajes'=>$faker->numberBetween(0,1000),
                'agradecimientos'=>$faker->numberBetween(0,1000),
                'email' => $faker->email,
                'password'=>bcrypt('1234'),
                'rol'=>0,
                'imagen'=>"./default",

           ]);
        }


        DB::table('users')->insert([
            'name' => "gabri",
            'mensajes'=>$faker->numberBetween(0,1000),
            'agradecimientos'=>$faker->numberBetween(0,1000),
            'email' => "gabri@aergibide.com",
            'password'=>bcrypt('1234'),
            'rol'=>1,
            'imagen'=>"./default",

        ]);
    }
}
