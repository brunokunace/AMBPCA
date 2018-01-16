@extends('template.app')

@section('content')
    @include('blog.bannerBlog')
    @include('blog.listBlog')
    @include('blog.blogSidebar')
    @include('blog.blogFooter')
@endsection