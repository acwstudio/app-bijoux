<?php

namespace App\Repositories\Api\Catalogs;

use App\Models\Catalog;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class CatalogRepository
{
    public function index(): QueryBuilder
    {
        return QueryBuilder::for(Catalog::class)
            ->allowedFields(['id','parent_id','name'])
            ->allowedIncludes(['parent','children','jewelleries'])
            ->allowedFilters([
                AllowedFilter::exact('name'),
                AllowedFilter::exact('id'),
                AllowedFilter::exact('parent_id'),
            ])
            ->allowedSorts(['name','id']);
    }
}
