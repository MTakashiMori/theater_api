<?php

namespace App\Http\Controllers;

use App\Constants\StatusCode;
use App\Service\RateService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * Class RateController
 * @package App\Http\Controllers
 */
class RateController extends ControllerAbstract
{

    /**
     * MovieController constructor.
     * @param RateService $service
     */
    public function __construct(RateService $service)
    {
        $this->service = $service;
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request)
    {
        $data = $this->service->create($request->all());
        return response()->json([
            'message' => __('messages.created'),
            'data' => $data,
        ], StatusCode::HTTP_CREATED);
    }
}
