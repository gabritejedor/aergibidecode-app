<?php

use Illuminate\Database\Seeder;

class RespuestasTableSeeder extends Seeder
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
            DB::table('respuesta')->insert([
                'descripcion' => $faker->realText($maxNbChars = 500, $indexSize = 2),
                'codigo' => $faker->realText($maxNbChars = 500, $indexSize = 2),
                'imagen'=>'',
                'destacado'=>0,
                'fecha' => $faker->date(),
                'id_user'=>$faker->numberBetween(1,10),
                'id_pregunta'=>$faker->numberBetween(1,20),


            ]);
        }


    }
}
