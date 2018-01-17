@extends('template.app')

@section('content')
    @include('calendar.calendarBanner')
    @include('calendar.calendarList')
    @include('calendar.calendarFooter')
@endsection