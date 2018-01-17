<?php

namespace App\Http\Repositories;

use App\Calendar as Model;

class CalendarRepository extends Repository
{
    public function __construct(Model $model)
    {
        parent::__construct($model);
    }

    public function latest($limit)
    {
        return $this->model->latest()->paginate($limit);
    }
}