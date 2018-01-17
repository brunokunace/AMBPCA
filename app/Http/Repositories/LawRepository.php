<?php

namespace App\Http\Repositories;

use App\Law as Model;

class LawRepository extends Repository
{
    public function __construct(Model $model)
    {
        parent::__construct($model);
    }
}