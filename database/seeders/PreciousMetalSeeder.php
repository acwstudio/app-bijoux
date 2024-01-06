<?php

namespace Database\Seeders;

use App\Models\PreciousMetal;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PreciousMetalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = config('seed.precious_metals');

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('precious_metals')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        foreach ($items as $key => $item) {

            DB::table('precious_metals')->insert([
                'name' => $item,
                'slug' => SlugService::createSlug(PreciousMetal::class, 'slug', $item),
                'active' => true,
                'created_at' => now()
            ]);
        }
    }
}
