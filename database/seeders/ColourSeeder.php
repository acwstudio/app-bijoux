<?php

namespace Database\Seeders;

use App\Models\Colour;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = config('seed.colours');

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('colours')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        foreach ($items as $key => $item) {

            DB::table('colours')->insert([
                'employee_id' => 1,
                'name' => $item,
                'slug' => SlugService::createSlug(Colour::class, 'slug', $item),
                'active' => true,
                'created_at' => now()
            ]);
        }
    }
}
