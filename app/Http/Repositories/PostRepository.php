<?php

namespace App\Http\Repositories;

use App\Post as Model;

class PostRepository extends Repository
{
    public function __construct(Model $model)
    {
        parent::__construct($model);
    }

    public function latest($limit)
    {
        return $this->model->with('user')->latest()->paginate($limit);
    }
}