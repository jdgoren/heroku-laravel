<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Movie;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Returns all movies that this user has watched.
     *
     * @return [type] [description]
     */
    public function movies_watched()
    {
        return $this->belongsToMany(Movie::class, 'user_watched_movies');
    }

    /**
     * Returns true if the user has seen the movie, otherwise false.
     *
     * @param  Movie   $movie [description]
     * @return boolean        [description]
     */
    public function hasSeen(Movie $movie)
    {
        return $this->movies_watched()->where('id', $movie->id)->exists();
    }
}
