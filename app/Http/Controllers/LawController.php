<?php

namespace App\Http\Controllers;

use App\Http\Repositories\LawRepository;

class LawController extends Controller
{
    public function index(LawRepository $lawRepository)
    {
        $laws = $lawRepository->index(10);
        return view('law.law')
            ->with("laws", $laws);
    }

}
