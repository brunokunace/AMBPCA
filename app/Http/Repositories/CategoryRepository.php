<?php

namespace App\Http\Repositories;

use App\Category as Model;

class CategoryRepository extends Repository
{
    public function __construct(Model $model)
    {
        parent::__construct($model);
    }
}