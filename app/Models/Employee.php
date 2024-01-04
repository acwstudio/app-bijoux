<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Employee extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    const TYPE_RESOURCE = 'employees';

    protected $fillable = ['name','email','password'];

    protected $hidden = ['password','remember_token',];

    protected $casts = ['email_verified_at' => 'datetime','password' => 'hashed'];

    public function catalogs(): HasMany
    {
        return $this->hasMany(Catalog::class);
    }

    public function jewelleries(): HasMany
    {
        return $this->hasMany(Jewellery::class);
    }

    public function metals()
    {
        return $this->hasMany(Metal::class);
    }
}
