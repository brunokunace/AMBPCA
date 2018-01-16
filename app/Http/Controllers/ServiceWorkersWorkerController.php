<?php

namespace App\Http\Controllers;

use App\Http\Repositories\ServiceWorkersCategoryRepository;
use App\Http\Repositories\ServiceWorkersWorkerRepository;

class ServiceWorkersWorkerController extends Controller
{
    public function index(
        ServiceWorkersCategoryRepository $serviceWorkersCategoryRepository,
        ServiceWorkersWorkerRepository $serviceWorkersWorkerRepository
    ) {
        $categories = $serviceWorkersCategoryRepository->categoryList(50);
        $workers = $serviceWorkersWorkerRepository->latest(5);
        return view('serviceworkers.serviceworkers')
            ->with("categories", $categories)
            ->with("workers", $workers);
    }

    public function show(
        ServiceWorkersCategoryRepository $serviceWorkersCategoryRepository,
        ServiceWorkersWorkerRepository $serviceWorkersWorkerRepository,
        $id
    ) {
        $categories = $serviceWorkersCategoryRepository->categoryList(50);
        $workers = $serviceWorkersWorkerRepository->categoryList($id, 5);
        return view('serviceworkers.serviceworkers')
            ->with("categories", $categories)
            ->with("workers", $workers);
    }
}
