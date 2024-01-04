<?php

namespace Database\Seeders;

use App\Models\Metal;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MetalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = config('seed.metals');

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
//        DB::table('metals')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        foreach ($items as $key => $item) {

            DB::table('metals')->insert([
                'employee_id' => 1,
                'name' => $item[$key],
                'slug' => SlugService::createSlug(Metal::class, 'slug', $item[$key]),
                'active' => true
            ]);
        }
    }
}
