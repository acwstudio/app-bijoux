<?php

namespace Database\Seeders;

use App\Models\Material;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = config('seed.materials');

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('materials')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        foreach ($items as $key => $item) {

            DB::table('materials')->insert([
                'name' => $item,
                'slug' => SlugService::createSlug(Material::class, 'slug', $item),
                'active' => true,
                'created_at' => now()
            ]);
        }
    }
}
