<div class="list-cause-area">
<div class="cause col-md-12 col-sm-6 content-box">
    @foreach($events as $event)
    <div class="info-block">
        @php
            $date = \Carbon\Carbon::createFromFormat('Y-m-d', $event->date);
            $value = $date->format('d/m Y');
        @endphp
        <div class="{{ \Carbon\Carbon::today() >  $date ? 'event-calendar event-passed' : 'event-calendar'  }}">
            {{ $value }}
        </div>
        <div class="col-md-8 col-sm-6">
            <h4>{{ $event->title }}</h4>
        </div>
        <div class="col-md-3 col-sm-6">
            <a href="{{ route('event',$event->id) }}" class="btn btn-min btn-secondary"><span>Mais Detalhes!</span></a>
        </div>

    </div>
    @endforeach
    <div class="pagination-wrapper">
        {{ $events->links() }}
    </div>
</div>
</div>
