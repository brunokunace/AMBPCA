<div class="list-cause-area">
<div class="cause col-md-12 col-sm-6 content-box">
    @foreach($gallery as $photo)
    <div class="col-md-4 col-sm-12 images-outer ">
        <div class="images-inner  ">
            <div class="nivo-activator"></div>
            <div class="images single-images-gl clearfix">
                <a href="{{ asset( $photo->url ) }}" class="nivo-trigger" data-lightbox-gallery="gallery1">
                    <img src="{{ asset( $photo->url ) }}">
                </a>
            </div>
        </div>
    </div>
    @endforeach
</div>
</div>




