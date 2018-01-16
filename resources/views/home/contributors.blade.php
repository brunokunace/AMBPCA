<div class="causes-wrapper">
    <div class="container">
        <div class="section-name one">
            <h2>Nossos Colaboradores</h2>
            <div class="short-text">
                <h5>Empresários moradores que colaboram com a Associação</h5>
            </div>
        </div>
        <div class="causes">
            <div class="causes-list row">
                <div class="owl-carousel owl-theme" id="promotions-home">
                    @foreach($contributors as $contributor)
                    <div class="cause-wrapper col-md-offset-3 col-sm-offset-3 col-md-6 col-xs-12 col-sm-6 legal health">
                        <div class="cause content-box">
                            <div class="img-wrapper">
                                <div class="overlay">
                                </div>
                                <img class="img-responsive" src="{{asset($contributor->image)}}" alt="">
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>