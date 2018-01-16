<?php

namespace App\Http\Controllers;

use App\Http\Repositories\ServiceWorkersCategoryRepository;
use App\Http\Repositories\ServiceWorkersWorkerRepository;

class ServiceWorkersCategoryController extends Controller
{
    public function index(
        ServiceWorkersCategoryRepository $serviceWorkersCategoryRepository,
        ServiceWorkersWorkerRepository $serviceWorkersWorkerRepository
    ) {
        $categories = $serviceWorkersCategoryRepository->categoryList(50);
        $workers = $serviceWorkersWorkerRepository->latest(5);
        return view('serviceworkerscategory.serviceworkerscategory')
            ->with("categories", $categories)
            ->with("workers", $workers);
    }
}
