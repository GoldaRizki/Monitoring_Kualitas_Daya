<?php

namespace Database\Seeders;


use App\Models\Data;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();


        Data::create([
            'tegangan' => 0,
            'arus' => 0,
            'faktor_daya' => 0,
            'daya_aktif' => 0,
            'daya_reaktif' => 0,
            'daya_semu' => 0,
            'total_daya_aktif' => 0,
            'total_daya_reaktif' => 0,
            'total_daya_semu' => 0,
            'total_faktor_daya' => 0,
            'frekuensi' => 0,
            'reactive_power_demand' => 0,
            'apparent_power_demand' => 0,
        ]);

    }
}
