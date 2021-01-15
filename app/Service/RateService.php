<?php

namespace App\Service;

use App\Repository\RateRepository;
use App\Services\ServiceAbstract;

class RateService extends ServiceAbstract
{

    /**
     * MovieService constructor.
     * @param RateRepository $repository
     */
    public function __construct(RateRepository $repository)
    {
        $this->repository = $repository;
    }
}
