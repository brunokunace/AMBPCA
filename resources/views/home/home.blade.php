@extends('template.app')

@section('content')
<!-- basic-slider start -->
@include('home.slider')

<!-- Features -->
@include('home.features')

<!-- Special Cuase Paralax -->
{{--@include('home.specialCause')--}}

<!-- Causes -->
@include('home.cause')

<!-- work togather -->
@include('home.work')

<!-- team -->
{{--@include('home.team')--}}

<!-- Volunteers -->
{{--@include('home.volunteeers')--}}

<!-- gallery -->
{{--@include('home.gallery')--}}

<!-- Blog -->
@include('home.blog')

@endsection