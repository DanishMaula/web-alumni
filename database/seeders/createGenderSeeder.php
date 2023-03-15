<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class createGenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\jenis_kelamin::create(
            [
                'jenkel' => 'Laki-laki'
            ]
        );
        \App\Models\jenis_kelamin::create(
            [
                'jenkel' => 'Perempuan'
            ]
        );
        
    }
}
