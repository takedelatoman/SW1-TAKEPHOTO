<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'Takeshi Kanashiro',
            'email' => 'take@gmail.com',
            'password' => Hash::make('secret'),
            'rol' => 'Administrador',
            'ci' => '12345600',
            'about' => "Hola soy un estudiante de 9no semestre.",
            'phone' => '123456700',
            'location' => 'Santa Cruz',
            'photo1' => 'https://images.hola.com/images/027c-16e382c99704-53dfc46afc49-1000/horizontal-mobile-800/portada.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('users')->insert([
            'id' => 2,
            'name' => 'Leo Messi',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('secret'),
            'rol' => 'Administrador',
            'ci' => '123000',
            'phone' => 123456789,
            'location' => 'Santa Cruz de la Sierra, Bolivia',
            'about' => 'Soy un estudiante de 9no semestre.',
            'photo1' => 'https://images.hola.com/images/027c-16e382c99704-53dfc46afc49-1000/horizontal-mobile-800/portada.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
      
        DB::table('users')->insert([
            'id' => 3,
            'name' => 'Jorge Organizador',
            'email' => 'jor@gmail.com',
            'password' => Hash::make('secret'),
            'rol' => 'Organizador',
            'ci' => '6790845 SC',
            'phone' => 62158745,
            'location' => 'Santa Cruz de la Sierra, Bolivia',
            'about' => 'Un organizador de eventos.',
            'photo1' => 'https://yt3.googleusercontent.com/ytc/APkrFKbADJw1L7WaXSiwp99KqzqI5TuvwzF0-mjBMvwuww=s900-c-k-c0x00ffffff-no-rj',
            'photo2' => 'https://yt3.googleusercontent.com/ytc/APkrFKbADJw1L7WaXSiwp99KqzqI5TuvwzF0-mjBMvwuww=s900-c-k-c0x00ffffff-no-rj',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'id' => 4,
            'name' => 'Felipe Invitado',
            'email' => 'fel@gmail.com',
            'password' => Hash::make('secret'),
            'rol' => 'Invitado',
            'ci' => '6357805 SC',
            'phone' => 62789556,
            'location' => 'Santa Cruz de la Sierra, Bolivia',
            'about' => 'Soy un estudiante de 9no semestre.',
            'photo1' => 'https://mui.kitchen/__export/1670186578564/sites/muikitchen/img/2022/12/04/felipe-rey-espaxa.jpg_1832178669.jpg',
            'photo2' => 'https://mui.kitchen/__export/1670186578564/sites/muikitchen/img/2022/12/04/felipe-rey-espaxa.jpg_1832178669.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'id' => 5,
            'name' => 'Rick Fotógrafo',
            'email' => 'rick@gmail.com',
            'password' => Hash::make('secret'),
            'rol' => 'Fotografo',
            'ci' => '6280512 SC',
            'phone' => 71112509,
            'location' => 'Santa Cruz de la Sierra, Bolivia',
            'about' => 'Me desempeño como un policia dentro de un apocalipsis zombie.',
            'photo1' => 'https://dca.gob.gt/noticias-guatemala-diario-centro-america/wp-content/uploads/2018/05/Andrew-Lincoln.jpg',
            'photo2' => 'https://dca.gob.gt/noticias-guatemala-diario-centro-america/wp-content/uploads/2018/05/Andrew-Lincoln.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'id' => 6,
            'name' => 'Leonardo DiCaprio',
            'email' => 'leo@gmail.com',
            'password' => Hash::make('secret'),
            'rol' => 'Fotografo',
            'ci' => '67908945 SC',
            'phone' => 62152145,
            'location' => 'Santa Cruz de la Sierra, Bolivia',
            'about' => 'Soy un actor, modelo y productor de cine estadounidense.',
            'photo1' => 'https://es.web.img3.acsta.net/c_310_420/medias/nmedia/18/35/52/66/20426137.jpg',
            'photo2' => 'https://es.web.img3.acsta.net/c_310_420/medias/nmedia/18/35/52/66/20426137.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'id' => 7,
            'name' => 'Shakira',
            'email' => 'shak@gmail.com',
            'password' => Hash::make('secret'),
            'rol' => 'Invitado',
            'ci' => '1790845 SC',
            'phone' => 62124545,
            'location' => 'Santa Cruz de la Sierra, Bolivia',
            'about' => 'Soy Shakira, más conocida como la top cantante colombiana.',
            'photo1' => 'https://static.mujerhoy.com/www/multimedia/202301/12/media/cortadas/shakira-cambios-look-pelo-kzqD-U190238490989BCD-624x624@MujerHoy.jpg',
            'photo2' => 'https://static.mujerhoy.com/www/multimedia/202301/12/media/cortadas/shakira-cambios-look-pelo-kzqD-U190238490989BCD-624x624@MujerHoy.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
