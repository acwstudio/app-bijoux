<?php

namespace Database\Seeders;

use App\Models\Alloy;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlloySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = config('seed.alloys');

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('alloys')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        foreach ($items as $key => $item) {

            DB::table('alloys')->insert([
                'name' => $item,
                'slug' => SlugService::createSlug(Alloy::class, 'slug', $item),
                'active' => true,
                'created_at' => now()
            ]);
        }
    }
}
