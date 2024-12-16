<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'is_admin',
        'author_id',
        'user_id',
        'status'

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function films()
    {
        return $this->hasMany(Film::class, 'id', 'author_id');
        /*return $this->hasMany(Film::class, 'author_id');*/          //Більш короткий варіант
    }
    public function comments()
    {
        return $this->hasMany(Comment::class, 'id', 'user_id');
    }







    public static function add($fields)
    {
        $user = new static;
        $user->fill($fields);
        $user->save();

        return $user;
    }

    public function edit($fields)
    {
        $this->fill($fields); //name,email

        $this->save();
    }


    public function remove()
    {
        $this->removeAvatar();
        $this->delete();
    }


    public function uploadAvatar($image)
    {
        if($image == null) { return; }

        $this->removeAvatar();

        $filename = Str::random(10) . '.' . $image->extension();
        $image->storeAs('uploads', $filename);
        $this->avatar = $filename;
        $this->save();
    }

    public function removeAvatar()
    {
        if($this->avatar != null)
        {
            Storage::delete('uploads/' . $this->avatar);
        }
    }


/*
 * Зберігатимо по шляху /uploads/uploads/ оскільки в config/filesystem - 'root' => public_path('uploads')
 */
    public function getImage()
    {
        if($this->avatar == null)
        {
            return '/img/no-image.png';
        }

        return '/uploads/uploads/' . $this->avatar;
    }



    public function ban()
    {
        $this->statuss = 1;
        $this->save();
    }

    public function unban()
    {
        $this->statuss = 0;
        $this->save();
    }


    public function toggleBan()
    {
        if(!$this->statuss == null)
        {
            return $this->unban();
        }

        return $this->ban();
    }


}
