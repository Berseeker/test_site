<?php

use Illuminate\Database\Seeder;

class TextosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //llenado por default de los textos de la pagina
        DB::table('textos')->insert([
            'name' => 'Titulo Slider1 part1',
            'description' => 'BIENVENIDO A',
            'section_id' => 1,
            'category_id' =>1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('textos')->insert([
            'name' => 'Titulo Slider1 part2',
            'description' => 'MEDICAL PARADISE',
            'section_id' => 1,
            'category_id' =>1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('textos')->insert([
            'name' => 'Parrafo Slider1',
            'description' => 'Experimenta una nueva forma de cuidar tu salud.',
            'section_id' => 1,
            'category_id' =>1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('textos')->insert([
            'name' => 'Titulo Slider2 part1',
            'description' => 'NOSOTROS TE AYUDAMOS A PLANIFICAR',
            'section_id' => 1,
            'category_id' =>1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('textos')->insert([
            'name' => 'Titulo Slider2 part2',
            'description' => 'TUS PROXIMAS VACACIONES MEDICAS',
            'section_id' => 1,
            'category_id' =>1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('textos')->insert([
            'name' => 'Parrafo Slider2',
            'description' => 'Nuestro equipo tiene como objetivo brindar servicios quirurgicos y no quirurgicos de alta calidad a todos nuestros clientes.',
            'section_id' => 1,
            'category_id' =>1,
            'created_at' => now(),
            'updated_at' => now()
        ]);


        DB::table('textos')->insert([
            'name' => 'Titulo Slider3 part1',
            'description' => 'SOMOS PROFESIONALES',
            'section_id' => 1,
            'category_id' =>1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('textos')->insert([
            'name' => 'Titulo Slider3 part2',
            'description' => 'TEN CADA UNA DE NUESTRA ÁREA.',
            'section_id' => 1,
            'category_id' =>1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('textos')->insert([
            'name' => 'Parrafo Slider3',
            'description' => 'Nuestro grupo de especialistas te ayudara a lograr tu resultado ideal.',
            'section_id' => 1,
            'category_id' =>1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
