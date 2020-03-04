<?php

use Illuminate\Database\Seeder;

class PreguntasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i=0;$i<5;$i++){
            DB::table('pregunta')->insert([
                'titulo' => $faker->realText($maxNbChars = 20, $indexSize = 2),
                'id_user'=>$faker->numberBetween(1,10),
                'descripcion'=>$faker->realText($maxNbChars = 500, $indexSize = 2),
                'fecha'=>$faker->date(),
                'estado' =>$faker->numberBetween(0,1) ,
                'votos'=>$faker->numberBetween(0,100),
                'visitas'=>$faker->numberBetween(0,1000),
                'lenguaje'=>'PHP',
                'imagen'=>"",

            ]);
        }
        for($i=0;$i<5;$i++){
            DB::table('pregunta')->insert([
                'titulo' => $faker->realText($maxNbChars = 20, $indexSize = 2),
                'id_user'=>$faker->numberBetween(1,10),
                'descripcion'=>$faker->realText($maxNbChars = 500, $indexSize = 2),
                'fecha'=>$faker->date(),
                'estado' =>$faker->numberBetween(0,1) ,
                'votos'=>$faker->numberBetween(0,100),
                'visitas'=>$faker->numberBetween(0,1000),
                'lenguaje'=>'JAVA',
                'imagen'=>"",

            ]);
        }
        for($i=0;$i<5;$i++){
            DB::table('pregunta')->insert([
                'titulo' => $faker->realText($maxNbChars = 20, $indexSize = 2),
                'id_user'=>$faker->numberBetween(1,10),
                'descripcion'=>$faker->realText($maxNbChars = 500, $indexSize = 2),
                'fecha'=>$faker->date(),
                'estado' =>$faker->numberBetween(0,1) ,
                'votos'=>$faker->numberBetween(0,100),
                'visitas'=>$faker->numberBetween(0,1000),
                'lenguaje'=>'SQL',
                'imagen'=>"",

            ]);
        }
        for($i=0;$i<5;$i++){
            DB::table('pregunta')->insert([
                'titulo' => $faker->realText($maxNbChars = 20, $indexSize = 2),
                'id_user'=>$faker->numberBetween(1,10),
                'descripcion'=>$faker->realText($maxNbChars = 500, $indexSize = 2),
                'fecha'=>$faker->date(),
                'estado' =>$faker->numberBetween(0,1) ,
                'votos'=>$faker->numberBetween(0,100),
                'visitas'=>$faker->numberBetween(0,1000),
                'lenguaje'=>'PYTHON',
                'imagen'=>"",

            ]);
        }
    }
}


