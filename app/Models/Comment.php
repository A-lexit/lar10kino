<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['subject', 'body', 'film_id', 'user_id'];

    public function film() {
        return $this->belongsTo(Film::class);
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function createdAtForHumans()
    {
        return $this->created_at->diffForHumans();
    }


    public function allow()
    {
        $this->status = 1;
        $this->save();
    }

    public function disAllow()
    {
        $this->status = 0;
        $this->save();
    }

    public function toggleStatus()
    {
        if($this->status == 0)
        {
            return $this->allow();
        }

        return $this->disAllow();
    }
}
