<?php

namespace App\Http\Controllers\Api;

use App\Http\Repositories\ContributorRepository as Repository;
use Illuminate\Http\Request;

class ContributorController extends ApiController
{
    public function __construct(Repository $repository, Request $request = null)
    {
        parent::__construct($repository, $request);
    }

}
