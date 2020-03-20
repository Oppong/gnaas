@extends('welcome')

@section('title', 'Gallery Page')


@section('content')

<div style="background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.8)), url('images/happy-2.jpg'); height: 450px; background-size: cover; " >
  <div style="background-image: linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.8)), url('images/night.png');  height: 450px; background-size: cover; opacity:0.95;">
    <div class="banner">
      <h1 class="banner-heading">Our Gallery</h1>
      <p class="banner-body">God is infinite yet intimate, three yet one, all-knowing yet all-forgiving. </p>
    </div>
  </div>
</div>

<div class="gallery-section-one">
  <div class="row">

    <div class="col-md-8">
      <div class="row">
        <div class="col-md-3 zoom">
          <img src="images/2.png" alt="" class="img-fluid">
        </div>

        <div class="col-md-3 zoom">
          <img src="images/4.png" alt="" class="img-fluid">
        </div>

        <div class="col-md-3 zoom">
          <img src="images/6.png" alt="" class="img-fluid">
        </div>
        <div class="col-md-3 zoom">
          <img src="images/7.png" alt="" class="img-fluid">
        </div>
      </div>
    </div>

    <div class="col-md-4 pl-5 ">
        <h5 class="font-weight-bold">CATEGORIES</h5>
        <p> <a href="#" class="text-dark">Lawra Evangelism </a> </p>
        <p> <a href="#" class="text-dark">General Evangelism </a> </p>
    </div>
  </div>
</div>


@endsection
