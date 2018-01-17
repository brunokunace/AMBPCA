<?php

namespace App\Http\Controllers\Api;

use App\Http\Repositories\CalendarRepository as Repository;
use Illuminate\Http\Request;

class CalendarController extends ApiController
{
    public function __construct(Repository $repository, Request $request = null)
    {
        parent::__construct($repository, $request);
    }
}
