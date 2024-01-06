<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class MetalPurity extends Model
{
    use HasFactory, Sluggable;

    const TYPE_RESOURCE = 'precious_metals';

    protected $fillable = ['precious_metal_id','slug','value','active'];

    public function preciousMetal(): BelongsTo
    {
        return $this->belongsTo(PreciousMetal::class);
    }

    public function skus(): BelongsToMany
    {
//        return $this->belongsToMany(Sku::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => ['precious_metal_id','value']
            ]
        ];
    }
}
