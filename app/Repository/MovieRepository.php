<?php

namespace App\Repository;

use App\Model\Movie;

class MovieRepository extends RepositoryAbstract
{

    /**
     * MovieRepository constructor.
     * @param Movie $model
     */
    public function __construct(Movie $model)
    {
        $this->model = $model;
        $this->relationship = [
            'rates'
        ];
    }
}
