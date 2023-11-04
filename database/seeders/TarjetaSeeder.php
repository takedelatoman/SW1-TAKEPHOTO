<?php

namespace Database\Seeders;

use App\Models\Tarjeta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TarjetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tarjeta::create([
            'numero' => '1294567812345678',
            'nombre' => 'Takeshi Kanashiro',
            'fecha_v' => '2023-12-01',
            'saldo'    => 0.0,
            'gasto'    => 0.0,
            'cvc'    => '123',
            'user_id' => 2
        ]);

        Tarjeta::create([
            'numero' => '2345678923456789',
            'nombre' => 'Leo Messi',
            'fecha_v' => '2025-05-01',
            'saldo'    => 0.0,
            'gasto'    => 0.0,
            'cvc'    => '456',
            'user_id' => 1
        ]);

        Tarjeta::create([
            'numero' => '3456789034567890',
            'nombre' => 'Jorge Herrera',
            'fecha_v' => '2026-01-01',
            'saldo'    => 0.0,
            'gasto'    => 0.0,
            'cvc'    => '789',
            'user_id' => 3
        ]);

        Tarjeta::create([
            'numero' => '3456789034567890',
            'nombre' => 'Felipe Montalvan',
            'fecha_v' => '2026-01-01',
            'saldo'    => 0.0,
            'gasto'    => 0.0,
            'cvc'    => '789',
            'user_id' => 4
        ]);

        Tarjeta::create([
            'numero' => '3456789034567890',
            'nombre' => 'Rick Grimes',
            'fecha_v' => '2026-01-01',
            'saldo'    => 0.0,
            'gasto'    => 0.0,
            'cvc'    => '789',
            'user_id' => 5
        ]);

        Tarjeta::create([
            'numero' => '9802754802345738',
            'nombre' => 'Leonardo DiCaprio',
            'fecha_v' => '2026-07-30',
            'saldo'    => 0.0,
            'gasto'    => 0.0,
            'cvc'    => '966',
            'user_id' => 6
        ]);

        Tarjeta::create([
            'numero' => '3456789034567890',
            'nombre' => 'Shakira',
            'fecha_v' => '2026-01-01',
            'saldo'    => 0.0,
            'gasto'    => 0.0,
            'cvc'    => '789',
            'user_id' => 7
        ]);
    }
}
