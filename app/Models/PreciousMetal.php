<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PreciousMetal extends Model
{
    use HasFactory, Sluggable;

    const TYPE_RESOURCE = 'precious_metals';

    protected $fillable = ['name','slug','active'];

    public function jewelleries(): BelongsToMany
    {
        return $this->belongsToMany(Jewellery::class);
    }

    public function metalPurities(): HasMany
    {
        return $this->hasMany(MetalPurity::class);
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
