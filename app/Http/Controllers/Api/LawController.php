<?php

namespace App\Http\Controllers\Api;

use App\Http\Repositories\LawRepository as Repository;
use Illuminate\Http\Request;

class LawController extends ApiController
{
    public function __construct(Repository $repository, Request $request = null)
    {
        parent::__construct($repository, $request);
    }
}
