<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Movie extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'description', 'duration', 'released_at'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['released_at'];

    /**
     * Returns all users that have watched this movie.
     *
     * @return [type] [description]
     */
    public function users_watched()
    {
        return $this->belongsToMany(User::class, 'user_watched_movies');
    }
}
