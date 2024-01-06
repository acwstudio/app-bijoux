<?php

namespace Database\Seeders;

use App\Models\Gemstone;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GemstoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = config('seed.gemstones');

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('gemstones')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        foreach ($items as $key => $item) {

            DB::table('gemstones')->insert([
                'name' => $item,
                'slug' => SlugService::createSlug(Gemstone::class, 'slug', $item),
                'active' => true,
                'created_at' => now()
            ]);
        }
    }
}
