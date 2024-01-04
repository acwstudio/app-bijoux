<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Jewellery extends Model
{
    use HasFactory, Sluggable;

    const TYPE_RESOURCE = 'jewelleries';

    protected $fillable = ['catalog_id', 'employee_id', 'vendor_code', 'name', 'slug', 'description', 'weight', 'active'];

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }

    public function catalog(): BelongsTo
    {
        return $this->belongsTo(Catalog::class);
    }

    public function metals(): BelongsToMany
    {
        return $this->belongsToMany(Metal::class);
    }

    public function gemstones(): BelongsToMany
    {
        return $this->belongsToMany(Gemstone::class);
    }

    public function brands(): BelongsToMany
    {
        return $this->belongsToMany(Brand::class);
    }

    public function weaves(): BelongsToMany
    {
        return $this->belongsToMany(Weave::class);
    }

    public function materials(): BelongsToMany
    {
        return $this->belongsToMany(Material::class);
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
