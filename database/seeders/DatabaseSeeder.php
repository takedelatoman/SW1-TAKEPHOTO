<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {

        $this->call([
            UserSeeder::class
        ]);
        $this->call([
            EventoSeeder::class
        ]);

        $this->call([
            SuscripcionSeeder::class
        ]);
        $this->call([
            TarjetaSeeder::class
        ]);

        $this->call([
            PortafolioSeeder::class
        ]);
        
    }
}
