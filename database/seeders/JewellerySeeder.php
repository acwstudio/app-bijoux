<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Catalog;
use App\Models\Colour;
use App\Models\Employee;
use App\Models\Facet;
use App\Models\Gemstone;
use App\Models\Jewellery;
use App\Models\Material;
use App\Models\Metal;
use App\Models\MetalPurity;
use App\Models\Weave;
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
//        dd($items);
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('jewelleries')->truncate();
        DB::table('jewellery_metal')->truncate();
        DB::table('gemstone_jewellery')->truncate();
        DB::table('brand_jewellery')->truncate();
        DB::table('jewellery_material')->truncate();
        DB::table('jewellery_weave')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        foreach ($items as $item) {
//            dd($item['brand_jewellery']);
            $jewellery_id = DB::table('jewelleries')->insertGetId([
                'catalog_id' => Catalog::where('name', $item['catalog'])->first()->id,
                'employee_id' => $item['employee_id'],
                'vendor_code' => $item['vendor_code'],
                'name' => $item['name'],
                'slug' => SlugService::createSlug(Jewellery::class, 'slug', $item['name']),
                'description' => $item['description'],
                'weight' => $item['weight'],
                'price' => $item['price'],
                'active' => true,
                'created_at' => now()
            ]);
            if (! empty($item['jewellery_metal'])) {
                foreach ($item['jewellery_metal'] as $metal) {
//                dump($metal);
                    DB::table('jewellery_metal')->insertGetId([
                        'jewellery_id' => $jewellery_id,
                        'metal_id' => Metal::where('name', $metal['metal_id'])->first()->id,
                        'metal_purity_id' => MetalPurity::where('name',$metal['metal_purity_id'])->first()->id,
                        'colour_id' => Colour::where('name',$metal['colour_id'])->first()->id,
                        'employee_id' => $metal['employee_id'],
                        'coverage' => $metal['coverage'],
                        'weight' => $metal['weight'],
                    ]);
                }
            }
            if (! empty($item['gemstone_jewellery'])) {
                foreach ($item['gemstone_jewellery'] as $gemstone) {
//                dump($metal);
                    DB::table('gemstone_jewellery')->insertGetId([
                        'jewellery_id' => $jewellery_id,
                        'gemstone_id' => Gemstone::where('name', $gemstone['gemstone_id'])->first()->id,
                        'facet_id' => Facet::where('name',$gemstone['facet_id'])->first()->id,
                        'colour_id' => Colour::where('name',$gemstone['colour_id'])->first()->id,
                        'employee_id' => $gemstone['employee_id'],
                        'dimensions' => $gemstone['dimensions'],
                        'weight' => $gemstone['weight'],
                        'quantity' => $gemstone['quantity'],
                    ]);
                }
            }
            if (! empty($item['brand_jewellery'])) {
                foreach ($item['brand_jewellery'] as $brand) {

                    DB::table('brand_jewellery')->insertGetId([
                        'jewellery_id' => $jewellery_id,
                        'brand_id' => Brand::where('name', $brand['brand_id'])->first()->id,
                        'employee_id' => $brand['employee_id'],
                    ]);
                }
            }
            if (! empty($item['material_jewellery'])) {
                foreach ($item['material_jewellery'] as $material) {

                    DB::table('material_jewellery')->insertGetId([
                        'jewellery_id' => $jewellery_id,
                        'material_id' => Material::where('name', $material['material_id'])->first()->id,
                        'colour_id' => Colour::where('name',$gemstone['colour_id'])->first()->id,
                        'employee_id' => $gemstone['employee_id'],
                    ]);
                }
            }
            if (! empty($item['jewellery_weave'])) {
                foreach ($item['jewellery_weave'] as $weave) {
                    DB::table('jewellery_weave')->insertGetId([
                        'jewellery_id' => $jewellery_id,
                        'weave_id' => Weave::where('name', $weave['weave_id'])->first()->id,
                        'employee_id' => $weave['employee_id'],
                        'thickness' => $weave['thickness'],
                    ]);
                }
            }
        }
    }
}
