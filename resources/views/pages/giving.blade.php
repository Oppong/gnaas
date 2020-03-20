@extends('welcome')

@section('title', 'Giving Page')


@section('content')

<div style="background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.8)), url('images/happy-2.jpg'); height: 450px; background-size: cover; " >
  <div style="background-image: linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.8)), url('images/night.png');  height: 450px; background-size: cover; opacity:0.95;">
    <div class="banner">
      <h1 class="banner-heading">Donation</h1>
      <p class="banner-body">God is infinite yet intimate, three yet one, all-knowing yet all-forgiving. </p>
    </div>
  </div>
</div>

<div class="alumni-section">
  <div class="row">
    <div class="col-md-6 mb-4 alumni-box">
      <h6 class="display-4 alumni-section-heading"> Page Under Construction</h6>
      <hr size="5" width="80" align="left" color="#00ADAE" noshade>
      <p class="mt-4 mb-4">Please Visit the page later</p>
      <a href="/" class="pt-2 pb-2 pr-3 pl-3" style="background-color:#00ADAE; border-radius: 50px;"> <small style="color: #fff; "> <strong>GO BACK HOME</strong> </small> </a>
    </div>
    <div class="col-md-6">
      <img src="images/kingdom-2.png" alt="" class="img-fluid">
    </div>
  </div>
</div>

@endsection
