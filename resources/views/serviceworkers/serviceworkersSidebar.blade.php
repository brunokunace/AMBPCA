<div class="sidebar-wrapper col-md-4">
    <div class="sidebar">
        <div class="widget">
            <div class="widget-title">
                <h4>Profissões</h4>
                <div class="sep">
                    <div class="sep-inside"></div>
                </div>
            </div>
            <div class="categories">
                @foreach($categories as $category)
                    <a href="{{ route('serviceworkerscategory', $category->id) }}">{{ $category->name }}<span> {{  $category->workers->count()  }}</span></a>
                @endforeach
            </div>
        </div>
    </div>
</div>