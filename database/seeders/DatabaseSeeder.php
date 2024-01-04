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
        $this->call(EmployeeSeeder::class);
        $this->call(CatalogSeeder::class);
        $this->call(MetalSeeder::class);
        $this->call(GemstoneSeeder::class);
        $this->call(ColourSeeder::class);
        $this->call(FacetSeeder::class);
        $this->call(MetalPuritySeeder::class);
        $this->call(WeaveSeeder::class);
        $this->call(JewellerySeeder::class);
    }
}
