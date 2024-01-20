<?php

namespace App\Models;

use App\Filament\Resources\CategoryResource;
use App\Filament\Resources\TagResource;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'image',
        'price',
        'active'
    ];

    public function tag(): BelongsToMany{
        return $this->belongsToMany(TagResource::class);
    }

    public function category(): BelongsToMany{
        return $this->belongsToMany(CategoryResource::class);
    }
}
