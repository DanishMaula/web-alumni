<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;

class CreateSiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($i = 0; $i < 50; $i++){
            DB::table('students')->insert([
                'id_gender' => 1,
                'name' => $faker->name,
                'tgl_lahir' => $faker->date,
                'jurusan' => $faker->randomElement(['RPL', 'TKJ', 'MM']),
                'nik' => $faker->numberBetween(100000, 99999),
                'kelas' => $faker->randomElement(['X', 'XI', 'XII']),
                'angkatan' => $faker->randomElement(['2018', '2019', '2020']),
                'alamat' => $faker->address,
                'id_gender' => $faker->randomElement([1, 2]),
            ]);
        }

        
    }
}
