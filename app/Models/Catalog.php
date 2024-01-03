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

    protected $fillable = ['parent_id','employee_id','name','slug','description','active'];

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }

    public function jewelleries(): HasMany
    {
        return $this->hasMany(Jewellery::class);
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
