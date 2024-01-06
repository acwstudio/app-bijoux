<?php

namespace Database\Seeders;

use App\Models\MetalPurity;
use App\Models\PreciousMetal;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MetalPuritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = config('seed.metal_purities');

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('metal_purities')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        foreach ($items as $key => $item) {

            $preciousMetal = PreciousMetal::where('name', $item['name'])->first();
//            dd($preciousMetal->id);
            DB::table('metal_purities')->insert([
                'precious_metal_id' => $preciousMetal->id,
                'slug' => SlugService::createSlug(MetalPurity::class, 'slug', $item['name'] . ' ' . $item['value']),
                'value' => $item['value'],
                'active' => true,
                'created_at' => now()
            ]);
        }
    }
}
