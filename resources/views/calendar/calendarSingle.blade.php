@extends('template.app')

@section('content')
    @include('calendar.calendarBanner')
<div class="blog-posts col-md-12">
    <div class="blog-post single-post">
        <h2>{{ $event->title }}</h2>
        <div class="meta">
            @php
                $date = \Carbon\Carbon::createFromFormat('Y-m-d', $event->date)->format('d/m/Y');
            @endphp
            <h5><i class="fa fa-clock-o"></i><a href="#">{{ $date }}</a></h5>
        </div>
        <p class="first"> {{ $event->content }}</p>
    </div>
</div>
    @include('calendar.calendarFooter')
@endsection
