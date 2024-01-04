<?php

namespace Database\Seeders;

use App\Models\Facet;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FacetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = config('seed.facets');

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('facets')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        foreach ($items as $key => $item) {

            DB::table('facets')->insert([
                'employee_id' => 1,
                'name' => $item,
                'slug' => SlugService::createSlug(Facet::class, 'slug', $item),
                'active' => true,
                'created_at' => now()
            ]);
        }
    }
}
