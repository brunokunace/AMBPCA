<?php

namespace App\Http\Controllers;

use App\Http\Repositories\CategoryRepository;
use App\Http\Repositories\PostRepository;

class BlogController extends Controller
{
    public function index(CategoryRepository $categoryRepository, PostRepository $postRepository)
    {
        $categories = $categoryRepository->index(50);
        $posts = $postRepository->latest(5);
        return view('blog.blog')
            ->with("categories", $categories)
            ->with("posts", $posts);
    }

    public function show($id, PostRepository $postRepository, CategoryRepository $categoryRepository)
    {
        $categories = $categoryRepository->index(50);
        $post = $postRepository->read($id);

        return view('blog.blogShow')
            ->with("categories", $categories)
            ->with('post', $post);
    }
}
