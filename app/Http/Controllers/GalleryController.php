<?php

namespace App\Http\Controllers;

use App\Http\Repositories\GalleryRepository;

class GalleryController extends Controller
{
    public function index(GalleryRepository $galleryRepository)
    {
        $gallery = $galleryRepository->latest(100);
        return view('gallery.gallery')
            ->with("gallery", $gallery);
    }

}
