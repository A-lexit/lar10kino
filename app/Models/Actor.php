<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Actor extends Model
{
    use HasFactory;
    use HasSlug;

    protected $fillable = ['name', 'slug'];

    public function films()
    {
        return $this->belongsToMany(Film::class);
    }



    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }



    public function scopeFirstFilm($query, $slug)
    {
        return $query->where('slug', $slug)->firstOrFail();  //orderBy('id', 'desc')
    }



}