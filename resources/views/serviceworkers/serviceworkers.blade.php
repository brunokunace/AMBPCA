@extends('template.app')

@section('content')
    @include('serviceworkers.serviceworkersBanner')
    @include('serviceworkers.serviceworkersList')
    @include('serviceworkers.serviceworkersSidebar')
    @include('serviceworkers.serviceworkersFooter')
@endsection