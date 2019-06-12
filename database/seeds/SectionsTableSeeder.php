<?php

use Illuminate\Database\Seeder;

class SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // rellenado automatico de la tabla de users
        DB::table('sections')->insert([
            'name' => 'Inicio',
            'path' => '/',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('sections')->insert([
            'name' => 'Quienes Somos',
            'path' => '/somos',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('sections')->insert([
            'name' => 'Servicios',
            'path' => '/servicios',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('sections')->insert([
            'name' => 'Procedimientos',
            'path' => '/procedimientos',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('sections')->insert([
            'name' => 'Destinos',
            'path' => '/destinos',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('sections')->insert([
            'name' => 'Testimoniales',
            'path' => '/testimonios',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('sections')->insert([
            'name' => 'Blog',
            'path' => '/blog',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('sections')->insert([
            'name' => 'Contactanos',
            'path' => '/contacto',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
