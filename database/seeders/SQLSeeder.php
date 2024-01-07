<?php

namespace Database\Seeders;

use App\Models\Jewellery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SQLSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        $test = DB::table('jewelleries')
//            ->where('jewelleries.id', '3')
//            ->rightJoin('catalogs','jewelleries.catalog_id','=','catalogs.id' )
//            ->select('catalogs.name as catalog', 'jewelleries.name')
//            ->get();

//        $test = DB::table('catalogs')
//            ->where('catalogs.name', 'Кольца')
//            ->join('jewelleries','jewelleries.catalog_id','=','catalogs.id' )
//            ->select('catalogs.name as catalog', 'jewelleries.name')
////            ->toSql();
//            ->get();
//
//        dd($test);

        dd(Jewellery::first()->preciousMetals);
    }
}
