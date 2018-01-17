<div class="list-cause-area">
<div class="cause col-md-12 col-sm-6 content-box">
    @foreach($laws as $law)
    <div class="info-block">
        <div class="col-md-10 col-sm-6">
            <h4>{{ $law->title }}</h4>
        </div>
        <div class="col-md-2 col-sm-6">
            <a href="{{ $law->url }}" target="_blank" class="btn btn-min btn-secondary"><span>Download!</span></a>
        </div>

    </div>
    @endforeach
    <div class="pagination-wrapper">
        {{ $laws->links() }}
    </div>
</div>
</div>
