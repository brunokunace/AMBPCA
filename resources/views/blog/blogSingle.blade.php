<div class="blog-posts col-md-8">
    <div class="blog-post single-post">
        <h2>{{ $post->title }}</h2>
        <div class="meta">
            <h5><i class="fa fa-user"></i><a href="#">{{ $post->user->name }}</a></h5>
            <h5><i class="fa fa-clock-o"></i><a href="#">{{ $post->created_at->format('d/m/Y') }}</a></h5>
        </div>
        <div class="img-wrapper">
            <img class="img-responsive" src="{{ asset( $post->image ) }}" alt="">
        </div>
        <p class="first"> {{ $post->content }}</p>
    </div>
</div>
