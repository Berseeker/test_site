<?php

use Illuminate\Database\Seeder;

class ImgsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //llenado de imagenes
        DB::table('imgs')->insert([
            'path' => 'img/pagina_inicio/slider1.png',
            'device' => false,
            'section_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
            'category_id' => 1
        ]);

        DB::table('imgs')->insert([
            'path' => 'img/pagina_inicio/slider2.png',
            'device' => false,
            'section_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
            'category_id' => 1
        ]);

        DB::table('imgs')->insert([
            'path' => 'img/pagina_inicio/slider3.png',
            'device' => false,
            'section_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
            'category_id' => 1
        ]);

        DB::table('imgs')->insert([
            'path' => 'img/pagina_inicio/rinoplastia.jpg',
            'device' => false,
            'section_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
            'category_id' => 2
        ]);

        DB::table('imgs')->insert([
            'path' => 'img/pagina_inicio/contorno_facial.jpg',
            'device' => false,
            'section_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
            'category_id' => 2
        ]);

        DB::table('imgs')->insert([
            'path' => 'img/pagina_inicio/contorno_corporal.jpg',
            'device' => false,
            'section_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
            'category_id' => 2
        ]);

        DB::table('imgs')->insert([
            'path' => 'img/pagina_inicio/baratria.png',
            'device' => false,
            'section_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
            'category_id' => 2
        ]);

        DB::table('imgs')->insert([
            'path' => 'img/pagina_inicio/cirugia_dental.png',
            'device' => false,
            'section_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
            'category_id' => 2
        ]);

        DB::table('imgs')->insert([
            'path' => 'img/pagina_inicio/banner.jpg',
            'device' => false,
            'section_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
            'category_id' => 4
        ]);

        DB::table('imgs')->insert([
            'path' => 'img/pagina_inicio/avatar.jpg',
            'device' => false,
            'section_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
            'category_id' => 5
        ]);

        DB::table('imgs')->insert([
            'path' => 'img/pagina_inicio/avatar2.jpg',
            'device' => false,
            'section_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
            'category_id' => 5
        ]);

        DB::table('imgs')->insert([
            'path' => 'img/pagina_inicio/avatar3.jpg',
            'device' => false,
            'section_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
            'category_id' => 5
        ]);

        DB::table('imgs')->insert([
            'path' => 'img/pagina_inicio/avatar4.jpg',
            'device' => false,
            'section_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
            'category_id' => 5
        ]);

        DB::table('imgs')->insert([
            'path' => 'img/pagina_inicio/blog.jpg',
            'device' => false,
            'section_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
            'category_id' => 7
        ]);

        DB::table('imgs')->insert([
            'path' => 'img/pagina_inicio/blog_.jpg',
            'device' => false,
            'section_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
            'category_id' => 7
        ]);
    }
}
