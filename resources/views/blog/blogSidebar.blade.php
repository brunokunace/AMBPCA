<div class="sidebar-wrapper col-md-4">
    <div class="sidebar">
        {{--<div class="search-bar">--}}
        {{--<form action="#" >--}}
        {{--<div class="field">--}}
        {{--<input type="text" name="search" placeholder="Busca....">--}}
        {{--<button><i class="fa fa-search"></i></button>--}}
        {{--</div>--}}
        {{--</form>--}}
        {{--</div>--}}
        <div class="widget">
            <div class="widget-title">
                <h4>Categorias</h4>
                <div class="sep">
                    <div class="sep-inside"></div>
                </div>
            </div>
            <div class="categories">
                @foreach($categories as $category)
                    <a href="#">{{ $category->name }}<span> {{  $category->posts->count()  }}</span></a>
                @endforeach
            </div>
        </div>
        <div class="widget">
            <div class="widget-title">
                <h4>Destaques</h4>
                <div class="sep">
                    <div class="sep-inside"></div>
                </div>
            </div>
            <div class="recent-posts clearfix">
                <div class="post clearfix">
                    <div class="image-wrapper">
                        <div class="mask"><a href="#"><i class="fa fa-link"></i></a></div>
                        <img src="{{ asset('img/mini/img-1.jpg') }}" alt="">
                    </div>
                    <div class="info-block">
                        <a href="#"><h4>Meu exemplo de notícia do blog</h4></a>
                        <div class="meta">
                            <p><i class="fa fa-user"></i>usuario2</p>
                            <span>&#x7C;</span>
                            <p><i class="fa fa-clock-o"></i>21  nov, 2017</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="recent-posts clearfix">
                <div class="post clearfix">
                    <div class="image-wrapper">
                        <div class="mask"><a href="#"><i class="fa fa-link"></i></a></div>
                        <img src="{{ asset('img/mini/img-1.jpg') }}" alt="">
                    </div>
                    <div class="info-block">
                        <a href="#"><h4>Meu exemplo de notícia do blog</h4></a>
                        <div class="meta">
                            <p><i class="fa fa-user"></i>usuario2</p>
                            <span>&#x7C;</span>
                            <p><i class="fa fa-clock-o"></i>21  nov, 2017</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="recent-posts clearfix">
                <div class="post clearfix">
                    <div class="image-wrapper">
                        <div class="mask"><a href="#"><i class="fa fa-link"></i></a></div>
                        <img src="{{ asset('img/mini/img-1.jpg') }}" alt="">
                    </div>
                    <div class="info-block">
                        <a href="#"><h4>Meu exemplo de notícia do blog</h4></a>
                        <div class="meta">
                            <p><i class="fa fa-user"></i>usuario2</p>
                            <span>&#x7C;</span>
                            <p><i class="fa fa-clock-o"></i>21  nov, 2017</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>