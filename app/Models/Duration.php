<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Duration extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['title', 'slug', 'film_id'];




}
