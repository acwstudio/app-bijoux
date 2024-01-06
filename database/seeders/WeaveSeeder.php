<?php

namespace Database\Seeders;

use App\Models\Weave;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WeaveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = config('seed.weaves');

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('weaves')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        foreach ($items as $key => $item) {

            DB::table('weaves')->insert([
                'name' => $item,
                'slug' => SlugService::createSlug(Weave::class, 'slug', $item),
                'active' => true,
                'created_at' => now()
            ]);
        }
    }
}
