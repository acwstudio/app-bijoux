<?php

namespace App\Http\Resources\Api\Catalogs;

use App\Http\Resources\Concerns\IncludeRelatedEntitiesCollectionTrait;
use App\Models\Catalog;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class CatalogCollection extends ResourceCollection
{
    use IncludeRelatedEntitiesCollectionTrait;

    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
//    public function toArray(Request $request): array
//    {
//        return parent::toArray($request);
//    }

    protected function total(): int
    {
        return Catalog::where('active', true)->count();
    }
}
