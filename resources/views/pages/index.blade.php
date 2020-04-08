@extends('welcome')

@section('title', 'Home Page')


@section('content')

@include('includes.banner')


<div class="mission-section">

        <div class="row">
                <div class="col-md-4" v-for="mission in missions">
                        <i class="fas fa-user-shield mission-icon"></i>
                        <h6 class="mission-heading mt-4">WHO WE ARE</h6>
                        <p class="mission-body text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis officia iste in iure debitis, reprehenderit possimus, at sunt facere </p>
                </div>

                <div class="col-md-4" v-for="mission in missions">
                        <i class="fas fa-tags mission-icon"></i>
                        <h6 class="mission-heading mt-4">WHy WE EXIST</h6>
                        <p class="mission-body text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis officia iste in iure debitis, reprehenderit possimus, at sunt facere </p>
                </div>

                <div class="col-md-4" v-for="mission in missions">
                        <i class="fas fa-synagogue mission-icon"></i>
                        <h6 class="mission-heading mt-4">OUR COMMUNITY</h6>
                        <p class="mission-body text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis officia iste in iure debitis, reprehenderit possimus, at sunt facere </p>
                </div>
        </div>


</div>

<div style="background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.8)), url('images/happy-2.jpg'); height: 450px; background-size: cover; " >
  <div style="background-image: linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.8)), url('images/night.png');  height: 450px; background-size: cover; opacity:0.95;">
    <div class="banner">
      <h1 class="banner-heading">WHO WE ARE</h1>
      <p class="banner-body">Jesus left His followers with an epic mission: tell the world of His love and His promise to return </p>
    </div>
  </div>
</div>



<div class="upcoming-section">
        <div class="row">

        <div class="col-md-12 text-center mb-4">
                <h6 class="mission-heading mt-4">UPCOMING EVENTS</h6>
                <p class="mission-body text-center">Lorem Perspiciatis officia iste in iure debitis, reprehenderit possimus, at sunt facere </p>
        </div>
                @foreach($upcoming as $upcoming)
                <div class="col-md-4 mt-4">
                     <div class="zoom">
                        <img src="{{$upcoming->getFirstMediaUrl('upcoming')}}" alt="" class="img-fluid">
                     </div>
                        <h6 class="mission-heading mt-4">{{$upcoming->title}}</h6>
                        <p class="mission-body text-justify"> {{ Str::limit($upcoming->body, 100)}} </p>
                </div>
                @endforeach


        </div>
</div>


@endsection
