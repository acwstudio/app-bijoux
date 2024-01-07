<?php

namespace App\Http\Resources\Api\Jewelleries;

use App\Http\Resources\Concerns\IncludeRelatedEntitiesCollectionTrait;
use App\Models\Jewellery;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class JewelleryCollection extends ResourceCollection
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
        return Jewellery::where('active', true)->count();
    }
}
