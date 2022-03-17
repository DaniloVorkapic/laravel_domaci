<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Kategorija;
use App\Models\Skije;
use App\Models\Porizvodjac;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Kategorija::truncate();
        User::truncate();
        Skije::truncate();
        Porizvodjac::truncate();

        $this->call([
            KategorijaSeeder::class
        ]);


         Skije::factory(10)->create();

    }
}
