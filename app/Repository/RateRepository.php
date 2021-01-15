<?php

namespace App\Repository;

use App\Model\Rate;

class RateRepository extends RepositoryAbstract
{

    /**
     * MovieRepository constructor.
     * @param Rate $model
     */
    public function __construct(Rate $model)
    {
        $this->model = $model;
        $this->relationship = [];
    }
}
