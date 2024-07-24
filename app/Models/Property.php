<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'surface',
        'rooms',
        'bedrooms',
        'floor',
        'price',
        'city',
        'address',
        'postcode',
        'sold',
    ];

    public function tags(): BelongsToMany {
        return $this->belongsToMany(Tag::class);
    }

    public function getSlug(): string
    {
        return Str::slug($this->title);
    }
}
