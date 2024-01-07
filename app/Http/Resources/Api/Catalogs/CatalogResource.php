<?php

namespace App\Http\Resources\Api\Catalogs;

use App\Http\Resources\Api\Jewelleries\JewelleryCollection;
use App\Http\Resources\Concerns\IncludeRelatedEntitiesResourceTrait;
use App\Models\Catalog;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CatalogResource extends JsonResource
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
            'type' => Catalog::TYPE_RESOURCE,
            'attributes' => $this->attributeItems(),
            'relationships' => [
                'parent' => $this->sectionRelationships('catalogs.parent', CatalogResource::class),
                'children' => $this->sectionRelationships('catalog.children', CatalogCollection::class),
                'jewelleries' => $this->sectionRelationships('catalog.jewelleries', JewelleryCollection::class)
            ]
        ];
    }

    function relations(): array
    {
        return [
            CatalogResource::class => $this->whenLoaded('parent'),
            CatalogCollection::class => $this->whenLoaded('children'),
            JewelleryCollection::class => $this->whenLoaded('jewelleries')
        ];
    }
}
