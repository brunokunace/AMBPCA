<?php

namespace App\Http\Repositories;

use App\ServiceWorkersCategory as Model;

class ServiceWorkersCategoryRepository extends Repository
{
    public function __construct(Model $model)
    {
        parent::__construct($model);
    }

    public function categoryList($limit)
    {
        return $this->model->with('workers')->paginate($limit);
    }
}