<?php

namespace App\Http\Controllers;

use App\Http\Repositories\PostRepository;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PostRepository $postRepository)
    {
        $posts = $postRepository->latest(3);

        return view('home.home')->with('posts', $posts);
    }

}
