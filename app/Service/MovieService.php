<?php

namespace App\Service;

use App\Repository\MovieRepository;
use App\Services\ServiceAbstract;

class MovieService extends ServiceAbstract
{

    /**
     * MovieService constructor.
     * @param MovieRepository $repository
     */
    public function __construct(MovieRepository $repository)
    {
        $this->repository = $repository;
    }
}
