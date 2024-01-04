<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MetalPurity extends Model
{
    use HasFactory, Sluggable;

    const TYPE_RESOURCE = 'metalPurities';

    protected $fillable = ['employee_id','name','percentage','value','karat','active'];

    public function metals(): HasMany
    {
        return $this->hasMany(Metal::class);
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
