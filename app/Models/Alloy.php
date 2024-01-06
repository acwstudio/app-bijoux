<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Alloy extends Model
{
    use HasFactory, Sluggable;

    const TYPE_RESOURCE = 'alloys';

    protected $fillable = ['name','slug','active'];

    public function skus(): BelongsToMany
    {
//        return $this->belongsToMany(Sku::class);
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
