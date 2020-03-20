<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        @foreach($sliders as $item)
            <li data-target="#carouselExampleIndicators" data-slide-to="{{$loop->index}}" class="{{$loop->first ? 'active' : ''}}"></li>
        @endforeach
    </ol>
    <div class="carousel-inner">

    @foreach($sliders as $key => $slider)
        <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
            <div style="background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.8)), url({{$slider->getFirstMediaUrl()}}); height: 750px; background-size: cover; ">
                <div style="background-image: linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.8)), url('images/night.png'); height: 750px; background-size: cover; opacity:0.95;">
                    <div class="intro">
            
                        <h1 class="intro-heading text-uppercase">{{$slider->title}}</h1>
                        <p class="intro-body"> {{$slider->content}}</p>
                        <a href="/service" class="pt-2 pb-2 pr-2 pl-2 mr-4" style="background-color:#00ADAE; border:solid #00ADAE;  border-radius: 50px; color: white;"> <small> <strong> <i class="fab fa-apple fa-lg"></i> &nbsp; DOWNLOAD APP</strong> </small> </a>
                        <a href="/service" class="pt-2 pb-2 pr-2 pl-2 " style="background-color:#00ADAE; border:solid #00ADAE;  border-radius: 50px; color: white;"> <small> <strong> <i class="fab fa-google-play fa-lg"></i> &nbsp; DOWNLOAD APP</strong> </small> </a>
                    </div>
                </div>
            </div>
        </div>

    @endforeach
    </div>
</div>