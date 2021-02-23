<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $carros = [
            [
                'marca' => 'Chevrolet',
                'modelo' => 'Chevrolet Cruze',
                'ano'    => 2020,
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'marca' => 'BMW',
                'modelo' => 'X1 XDRIVE 28i 2.0 Turbo 16V 4x4 Aut.',
                'ano'    => 2012,
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'marca' => 'Hyundai',
                'modelo' => 'Hyundai HB20',
                'ano'    => 2020,
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'marca' => 'Nissan',
                'modelo' => 'Nissan Kicks',
                'ano'    => 2018,
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'marca' => 'Renault',
                'modelo' => 'Renault Duster',
                'ano'    => 2021,
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ]
        ];

        DB::table('carros')->insert($carros);
    }
}
