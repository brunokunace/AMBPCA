<?php

namespace App\Http\Controllers;

use App\Http\Repositories\ContributorRepository;
use App\Http\Repositories\PostRepository;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PostRepository $postRepository, ContributorRepository $contributorRepository)
    {
        $posts = $postRepository->latest(3);
        $contributors = $contributorRepository->featured(10, true);

        return view('home.home')
            ->with('posts', $posts)
            ->with('contributors', $contributors);
    }

}
