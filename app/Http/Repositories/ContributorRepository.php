<?php

namespace App\Http\Repositories;

use App\Contributor as Model;

class ContributorRepository extends Repository
{
    public function __construct(Model $model)
    {
        parent::__construct($model);
    }

    public function featured($limit, $featured)
    {
        return $this->model->where('featured', $featured)->paginate($limit);
    }

}