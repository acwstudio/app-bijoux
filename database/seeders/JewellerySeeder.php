<?php

namespace Database\Seeders;

use App\Models\Catalog;
use App\Models\Colour;
use App\Models\Jewellery;
use App\Models\MetalPurity;
use App\Models\PreciousMetal;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JewellerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = config('seed.jewelleries');

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('jewelleries')->truncate();
        DB::table('jewellery_precious_metal')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        foreach ($items as $key => $item) {

            $jewellery_id = DB::table('jewelleries')->insertGetId([
                'catalog_id' => Catalog::where('name', $item['catalog'])->first()->id,
                'name' => $item['name'],
                'slug' => SlugService::createSlug(Jewellery::class, 'slug', $item['name']),
                'description' => $item['description'],
                'weight' => $item['weight'],
                'active' => true,
                'created_at' => now()
            ]);

            if (! empty($item['jewellery_precious_metal'])) {
                foreach($item['jewellery_precious_metal'] as $metal) {
                    $precious_metal = PreciousMetal::where('name', $metal['precious_metal'])->first();
//                dd($precious_metal);
                    DB::table('jewellery_precious_metal')->insert([
                        'jewellery_id' => $jewellery_id,
                        'precious_metal_id' => $precious_metal->id,
                        'colour_id' => Colour::where('name', $metal['colour'])->first()->id,
                        'metal_purity_id' => MetalPurity::where('precious_metal_id', $precious_metal->id)->where('value', $metal['metal_purities'])->first()->id,
                        'coverage' => $metal['coverage'],
                        'weight' => $metal['weight']
                    ]);
                }
            }
        }
    }
}
