<div class="list-cause-area">
<div class="cause col-md-8 col-sm-6 content-box">
    @foreach($workers as $worker)
    <div class="info-block">
        <h4>{{ $worker->title }}</h4>
        <p>{{ $worker->content }}</p>
    </div>
    @endforeach
    <div class="pagination-wrapper">
        {{ $workers->links() }}
    </div>
</div>
</div>
