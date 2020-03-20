@extends('welcome')

@section('title', 'Blog Page')


@section('content')

<div style="background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.8)), url('images/happy-2.jpg'); height: 450px; background-size: cover; " >
  <div style="background-image: linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.8)), url('images/night.png');  height: 450px; background-size: cover; opacity:0.95;">
    <div class="banner">
      <h1 class="banner-heading">OUR BLOG</h1>
      <p class="banner-body">Jesus left His followers with an epic mission: tell the world of His love and His promise to return </p>
    </div>
  </div>
</div>

<div class="blog-section">
  <div class="row">
    <div class="col-md-4">
        <div class="card">
          <div class="zoom">
            <a href="/intro"><img src="images/11.jpg" alt="" class="img-fluid" > </a>
          </div>
          <div class="card-body">
            <h6><a href="/intro" class="blog-section-heading"> Is Our God Just</a> </h6>
            <p class="blog-body">Jesus left His followers with an epic mission: tell the world of His love and His promise to retur</p>

            <a href="#" class="blog-text small mr-4"> <i class="fa fa-user"></i> &nbsp; Amponsah-Kwatiah </a>
            <a href="#" class="blog-text small"> <i class="fa fa-calendar"></i> &nbsp; Jan 5, 2020 </a>
          </div>
        </div>
    </div>
  </div>
</div>



@endsection
