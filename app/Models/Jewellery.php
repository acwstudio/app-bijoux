<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Jewellery extends Model
{
    use HasFactory, Sluggable;

    const TYPE_RESOURCE = 'jewelleries';

    protected $fillable = ['catalog_id','employee_id','vendor_code','name','slug','description','weight','active'];

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }

    public function catalog(): BelongsTo
    {
        return $this->belongsTo(Catalog::class);
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
