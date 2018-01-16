<div class="blog-posts col-md-8">
    @foreach($posts as $post)
    <div class="blog-box">
        <div class="blog-top-desc">
            <div class="blog-date">
                {{ $post->created_at->format('d/m Y') }}
            </div>
            <h4>{{ $post->title }}</h4>
            <i class="fa fa-user-o"></i> <strong> {{ $post->user->name }}</strong>
            {{--<i class="fa fa-commenting-o"></i> <strong>10 Comentários</strong>--}}
        </div>
        <img class="img-responsive" src="{{ asset( $post->image ) }}" alt="">
        <div class="blog-btm-desc">
            <p>{{ str_limit($post->content, 200)  }}</p>
            <a href="{{ route('blog.show', $post->id) }}" class="btn btn-min btn-solid"> Leia Mais  <i class="fa fa-arrow-right"></i> </a>
        </div>
    </div>
    @endforeach
    <div class="pagination-wrapper">
        {{ $posts->links() }}
    </div>
</div>
<!-- sidebar -->

