<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Colour extends Model
{
    use HasFactory, Sluggable;

    const TYPE_COLOURS = 'colours';

    protected $fillable = ['employee_id','name','slug','active'];

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
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
