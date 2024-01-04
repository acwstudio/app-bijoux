<?php

namespace Database\Seeders;

use App\Models\Catalog;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use JetBrains\PhpStorm\NoReturn;

class CatalogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    #[NoReturn]
    public function run(): void
    {
        $items = config('seed.catalog');

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('catalogs')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        foreach ($items as $key => $item) {
            $id = DB::table('catalogs')->insertGetId([
                'parent_id' => null,
                'employee_id'   => 1,
                'name'  => $key,
                'description'  => 'Some text about this item',
                'slug' => SlugService::createSlug(Catalog::class, 'slug', $key),
                'active' => true,
                'created_at' => now(),
            ]);
            $items_1 = $items[$key];
            if (is_array($items_1)) {
                foreach ($items_1 as $key_1 => $item_1) {
                    $id_1 = DB::table('catalogs')->insertGetId([
                        'parent_id' => $id,
                        'employee_id'   => 1,
                        'name'  => is_array($item_1) ? $key_1 : $item_1,
                        'description'  => 'Some text about this item',
                        'slug' => SlugService::createSlug(Catalog::class, 'slug', is_array($item_1) ? $key_1 : $item_1),
                        'active' => true,
                        'created_at' => now(),
                    ]);
                    $items_2 = $item_1;
                    if (is_array($items_2)) {
                        foreach ($items_2 as $key_2 => $item_2) {
                            $id_2 = DB::table('catalogs')->insertGetId([
                                'parent_id' => $id_1,
                                'employee_id'   => 1,
                                'name'  => is_array($item_2) ? $key_2 : $item_2,
                                'description'  => 'Some text about this item',
                                'slug' => SlugService::createSlug(Catalog::class, 'slug', is_array($item_2) ? $key_2 : $item_2),
                                'active' => true,
                                'created_at' => now(),
                            ]);
                            $items_3 = $item_2;
                            if (is_array($items_3)) {
                                foreach ($items_3 as $key_3 => $item_3) {
                                    $id_3 = DB::table('catalogs')->insertGetId([
                                        'parent_id' => $id_2,
                                        'employee_id'   => 1,
                                        'name'  => is_array($item_3) ? $key_3 : $item_3,
                                        'description'  => 'Some text about this item',
                                        'slug' => SlugService::createSlug(Catalog::class, 'slug', is_array($item_3) ? $key_3 : $item_3),
                                        'active' => true,
                                        'created_at' => now(),
                                    ]);
                                }
                            }
                        }
                    }
                }

            }
//            dump($key);
        }
//        array_walk_recursive($items, $this->readCatalog($items));
//        $this->readCatalog($items);
        dd('ok');
//        dd($this->readCatalog($items));
    }

    private function readCatalog(array $items, $parentId = null)
    {
        $branch = array();

        foreach ($items as $item) {

            if ($item['parent_id'] == $parentId) {
                $children = $this->readCatalog($items, $item['id']);
                dump($children);
                if ($children) {
                    $item['children'] = $children;
                }

                $branch[] = $item;
            }
        }

        return $branch;
    }
}
