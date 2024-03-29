<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Gemstone extends Model
{
    use HasFactory, Sluggable;

    const TYPE_RESOURCE = 'gemstones';

    protected $fillable = ['employee_id','name','active'];

    public function employees(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }

    public function jewelleries(): BelongsToMany
    {
        return $this->belongsToMany(Jewellery::class);
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
