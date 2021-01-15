<?php

namespace App\Http\Controllers;

use App\Service\MovieService;

class MovieController extends ControllerAbstract
{

    /**
     * MovieController constructor.
     * @param MovieService $service
     */
    public function __construct(MovieService $service)
    {
        $this->service = $service;
    }
}
