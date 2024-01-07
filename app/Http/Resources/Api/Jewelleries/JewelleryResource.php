<?php

namespace App\Http\Resources\Api\Jewelleries;

use App\Http\Resources\Api\Catalogs\CatalogResource;
use App\Http\Resources\Api\PreciousMetals\PreciousMetalCollection;
use App\Http\Resources\Concerns\IncludeRelatedEntitiesResourceTrait;
use App\Models\Jewellery;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class JewelleryResource extends JsonResource
{
    use IncludeRelatedEntitiesResourceTrait;
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'type' => Jewellery::TYPE_RESOURCE,
            'attributes' => $this->attributeItems(),
            'relationships' => [
                'catalog' => $this->sectionRelationships('jewelleries.catalog', CatalogResource::class),
                'preciousMetals' => $this->sectionRelationships('jewelleries.precious-metals', PreciousMetalCollection::class)
            ]
        ];
    }

    function relations(): array
    {
        return [
            CatalogResource::class => $this->whenLoaded('catalog'),
            PreciousMetalCollection::class => $this->whenLoaded('preciousMetals')
        ];
    }
}
