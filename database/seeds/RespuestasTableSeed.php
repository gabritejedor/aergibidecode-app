<?php

use Illuminate\Database\Seeder;

class RespuestasTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i=0;$i<4;$i++){
            DB::table('users')->insert([
                'apodo' => $faker->firstName,
                'mensajes'=>$faker->numberBetween(0,1000),
                'agradecimientos'=>$faker->numberBetween(0,1000),
                'email' => $faker->email,
                'password'=>bcrypt('1234'),
                'rol'=>0,
                'img'=>"./default",

            ]);
        }


        DB::table('users')->insert([
            'apodo' => "gabri",
            'mensajes'=>$faker->numberBetween(0,1000),
            'agradecimientos'=>$faker->numberBetween(0,1000),
            'email' => "gabri@aergibide.com",
            'password'=>bcrypt('1234'),
            'rol'=>1,
            'img'=>"./default",

        ]);
    }
}
