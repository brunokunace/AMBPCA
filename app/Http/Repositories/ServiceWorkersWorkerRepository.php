<?php

namespace App\Http\Repositories;

use App\ServiceWorkersWorker as Model;

class ServiceWorkersWorkerRepository extends Repository
{
    public function __construct(Model $model)
    {
        parent::__construct($model);
    }

    public function latest($limit)
    {
        return $this->model->latest()->paginate($limit);
    }

    public function categoryList($id, $limit)
    {
        return $this->model
            ->with('category')
            ->where('service_workers_category_id', $id)
            ->paginate($limit);
    }
}