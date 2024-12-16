<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;


class Category extends Model
{
    use HasFactory;
    use HasSlug;

    protected $fillable = ['title', 'slug'];


    public function films()
    {
        return $this->hasMany(Film::class);
    }

////////////////////////////////////////////////////////////////////

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

////////////////////////////////////////////////////////////////////
    public function scopeFindBySlug($query, $slug)
    {
        return $query->where('slug', $slug)->firstOrFail();
    }
}
