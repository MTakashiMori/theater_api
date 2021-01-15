<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Movie
 * @package App\Model
 */
class Movie extends ModelAbstract
{

    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * @return HasMany
     */
    public function rates()
    {
        return $this->hasMany(Rate::class, 'movie_id');
    }

}
