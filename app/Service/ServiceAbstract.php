<?php

namespace App\Services;


use App\Repository\RepositoryAbstract;
use Exception;
use Illuminate\Support\Collection;

/**
 * Class Service
 * @package App\Services
 */
class ServiceAbstract
{
    /**
     * @var $repository RepositoryAbstract
     */
    protected $repository;

    /**
     * Service constructor.
     * @param $repository
     * @param $historyRepository
     */
    public function __construct($repository, $historyRepository)
    {
        $this->repository = $repository;
        $this->historyRepository = $historyRepository;
    }

    /**
     * @param $request
     * @return Collection
     */
    public function all($request = null)
    {
        isset($request['size']) ?
            $size = $request['size'] :
            $size = 15;

        isset($request['sortBy']) ?
            $field = $request['sortBy'] :
            $field = null;

        isset($request['orderDesc']) ?
            $order = $request['orderDesc'] :
            $order = null;

        unset($request['page']);
        unset($request['size']);
        unset($request['sortBy']);
        unset($request['orderDesc']);

        $response = collect([
            'message' => __('messages.list'),
            'data' => null,
            'code' => 200
        ]);

        $data = $this->repository->all($request, $field, $order)->paginate($size);

        $response['data'] = $data;

        return $response;

    }

    /**
     * @param $id
     * @return Collection
     */
    public function find($id)
    {
        $response = collect([
            'message' => __('messages.list'),
            'data' => null,
            'code' => 200
        ]);

        $data = $this->repository->find($id);

        $response['data'] = $data;

        return $response;
    }

    /**
     * @param $request
     * @return mixed
     */
    public function create($request)
    {
        return $this->repository->create($request);
    }

    /**
     * @param $request
     * @param $id
     * @return mixed
     */
    public function update($request, $id)
    {
        return $this->repository->update($request, $id);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function destroy($id)
    {
        $response = collect([
            'message' => __('messages.list'),
            'data' => null,
            'code' => 200
        ]);

        $response['data'] = $this->destroy($id);

        return $response;
    }

    /**
     * @return mixed
     */
    public function random()
    {
        $data = $this->repository->all(null);
        return $data->get()->random()->id;
    }

    /**
     * @return Collection
     */
    public function totalCount()
    {
        try {
            return collect([
                'data' => $this->repository->all(null)->count(),
                'message' => Messages::success,
                'status_code' => 200,
            ]);
        } catch (\Exception $e) {
            return collect([
                'data' => null,
                'message' => $e->getMessage(),
                'status_code' => $e->getCode()
            ]);
        }
    }

}
