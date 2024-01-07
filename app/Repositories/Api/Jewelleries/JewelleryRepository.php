<?php

namespace App\Repositories\Api\Jewelleries;

use App\Models\Jewellery;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class JewelleryRepository
{
    public function index(): QueryBuilder
    {
        return QueryBuilder::for(Jewellery::class)
            ->allowedFields(['id','catalog_id','name'])
            ->allowedIncludes(['catalog','preciousMetals'])
            ->allowedFilters([
                AllowedFilter::exact('name'),
                AllowedFilter::exact('id'),
                AllowedFilter::exact('catalog_id'),
            ])
            ->allowedSorts(['name','id']);
    }
}
