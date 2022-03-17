<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kategorija;


class KategorijaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kategorija::create([
            'naziv'=>'Slalom skija'
        ]);
        Kategorija::create([
            'naziv'=>'Veleslalom skija'
        ]);
        Kategorija::create([
            'naziv'=>'Spust skija'
        ]);
        Kategorija::create([
            'naziv'=>'SlalomVeleslalom skija'
        ]);
        
        
    }
}
