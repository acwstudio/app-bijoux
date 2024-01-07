<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Jewellery extends Model
{
    use HasFactory, Sluggable;

    const TYPE_RESOURCE = 'jewelleries';

    protected $fillable = ['catalog_id', 'vendor_code', 'name', 'slug', 'description', 'active'];

    public function skus(): HasMany
    {
//        return $this->hasMany(Sku::class);
    }

    public function catalog(): BelongsTo
    {
        return $this->belongsTo(Catalog::class);
    }

    public function materials(): BelongsToMany
    {
        return$this->belongsToMany(Material::class);
    }

    public function gemstones(): BelongsToMany
    {
        return $this->belongsToMany(Gemstone::class);
    }

    public function alloys(): BelongsToMany
    {
        return $this->belongsToMany(Alloy::class);
    }

    public function preciousMetals(): BelongsToMany
    {
        return $this->belongsToMany(PreciousMetal::class)->withPivot('weight','coverage','colour_id');
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
