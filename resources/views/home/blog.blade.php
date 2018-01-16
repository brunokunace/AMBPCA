<section  class="blog-area blog-post-wrapper">
    <div class="container">
        <div class="section-name one">
            <h2>Novas Notícias</h2>
            <div class="short-text">
                <h5>Principais acontecimentos da associação</h5>
            </div>
        </div>
        <div class="row">
            @foreach($posts as $post)
            <div class="col-md-4 col-sm-6">
                <div class="blog-box">
                    <div class="blog-top-desc">
                        <div class="blog-date">
                            {{ $post->created_at->format('d-m Y') }}
                        </div>
                        <h4>{{ $post->title }}</h4>
                        <i class="fa fa-user-o"></i> <strong>{{ $post->user->name }}</strong>
                    </div>
                    <img src="{{asset($post->image)}}" alt="">
                    <div class="blog-btm-desc">
                        <p>{{ str_limit($post->content, 100)  }}</p>
                        <a href="{{ route('blog.show', $post->id) }}" class="btn btn-min btn-solid"> Leia Mais  <i class="fa fa-arrow-right"></i> </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>