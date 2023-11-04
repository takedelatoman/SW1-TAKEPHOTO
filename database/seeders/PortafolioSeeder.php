<?php

namespace Database\Seeders;

use App\Models\Portafolio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PortafolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Portafolio::create([
            'foto' => 'https://www.bbva.com/wp-content/uploads/2020/05/festival2.jpg',
            'user_id' => 5
        ]);
        
        Portafolio::create([
            'foto' => 'https://www.bbva.com/wp-content/uploads/2020/05/festival2.jpg',
            'user_id' => 5
        ]);

        Portafolio::create([
            'foto' => 'https://www.bbva.com/wp-content/uploads/2020/05/festival2.jpg',
            'user_id' => 5
        ]);

        Portafolio::create([
            'foto' => 'https://www.bbva.com/wp-content/uploads/2020/05/festival2.jpg',
            'user_id' => 6
        ]);

        Portafolio::create([
            'foto' => 'https://www.bbva.com/wp-content/uploads/2020/05/festival2.jpg',
            'user_id' => 6
        ]);

        Portafolio::create([
            'foto' => 'https://www.bbva.com/wp-content/uploads/2020/05/festival2.jpg',
            'user_id' => 6
        ]);
    }
}
