<?php

namespace App\Http\Controllers\Api;

use App\Http\Repositories\ServiceWorkersWorkerRepository as Repository;
use Illuminate\Http\Request;

class ServiceWorkersWorkerController extends ApiController
{
    public function __construct(Repository $repository, Request $request = null)
    {
        parent::__construct($repository, $request);
    }

}
