<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Catalog extends Model
{
    use HasFactory, Sluggable;

    const TYPE_RESOURCE = 'catalogs';

    protected $fillable = ['parent_id','name','slug','description','active'];

    public function parent(): BelongsTo
    {
        return $this->belongsTo(Catalog::class, 'parent_id');
    }

    public function children(): HasMany
    {
        return $this->hasMany(Catalog::class, 'parent_id');
    }

    public function jewelleries()
    {
//        return $this->hasMany(Jewellery::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'resource' => 'name'
            ]
        ];
    }
}
