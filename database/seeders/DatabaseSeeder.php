<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(CatalogSeeder::class);
        $this->call(PreciousMetalSeeder::class);
        $this->call(AlloySeeder::class);
        $this->call(MaterialSeeder::class);
        $this->call(GemstoneSeeder::class);
        $this->call(MetalPuritySeeder::class);
        $this->call(WeaveSeeder::class);
        $this->call(JewellerySeeder::class);
        $this->call(ColourSeeder::class);
    }
}
