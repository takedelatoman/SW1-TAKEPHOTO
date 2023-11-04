<?php

namespace Database\Seeders;

use App\Models\Evento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Evento::create([
            'nombre' => 'Feria de Innovación Tecnológica',
            'fecha' => '2023-10-20',
            'hora' => '09:00:00',
            'tipo' => 'Feria Tecnológica',
            'lugar' => 'Centro de Convenciones TechWorld',
            'direccion' => '456 Avenida Tecnológica, Ciudad',
            'imagen' => 'https://www.escueladenegociosydireccion.com/revista/wp-content/uploads/2022/10/257647503_Revista_Principal.jpg',
            'org_id' => 3
        ]);
        
        Evento::create([
            'nombre' => 'Concierto en Vivo: Estrellas del Rock',
            'fecha' => '2023-11-15',
            'hora' => '20:00:00',
            'tipo' => 'Concierto',
            'lugar' => 'Estadio de la Música',
            'direccion' => '789 Calle del Rock, Ciudad',
            'imagen' => 'https://www.bbva.com/wp-content/uploads/2020/05/festival2.jpg',
            'org_id' => 3
        ]);
        
        Evento::create([
            'nombre' => 'Festival de Gastronomía Internacional',
            'fecha' => '2023-12-08',
            'hora' => '11:00:00',
            'tipo' => 'Festival Gastronómico',
            'lugar' => 'Plaza de los Sabores',
            'direccion' => '321 Calle de los Sabores, Ciudad',
            'imagen' => 'https://boliviaemprende.com/wp-content/uploads/2021/09/Festival-Misky-CBBA.jpg',
            'org_id' => 3
        ]);
    }
}
