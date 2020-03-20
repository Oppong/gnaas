@extends('welcome')

@section('title', 'Contact Us Page')


@section('content')

<div style="background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.8)), url('images/happy-2.jpg'); height: 450px; background-size: cover; " >
  <div style="background-image: linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.8)), url('images/night.png');  height: 450px; background-size: cover; opacity:0.95;">
    <div class="banner">
      <h1 class="banner-heading">HAVE ANY QUESTIONS</h1>
      <p class="banner-body">Do you have any question bothering your mind!! Feel free to contact us </p>
    </div>
  </div>
</div>

@include('flash::message')
<div class=" contact-section">
  <div class="row">
    <div class="col-md-6 mb-5 pt-5 mt-5 contact-box">
    <img src="images/contact.svg" alt="contact-img" class="img-fluid">
    </div>
    <div class="col-md-6">
        <form class="" action="sendemail" method="post">
            @csrf
          <div class="form-group">
            <label for="name" class="mb-2">Name</label>
            <input type="text" name="name" placeholder="smith asante" class="form-control form-input" id="name">
          </div>

          <div class="form-group">
            <label for="email" class="mb-2">Email</label>
            <input type="email" name="email" placeholder="smithasante@example.com" class="form-control form-input" id="email">
          </div>

          <div class="form-group">
            <label for="subject" class="mb-2">Subject</label>
            <input type="text" name="subject" placeholder="Faith of Our Fathers" class="form-control form-input" id="subject">
          </div>

          <div class="form-group">
            <label for="content" class="mb-2">Your Message</label>
            <textarea name="yourMessage" rows="7" cols="50" class="form-control" id="content"></textarea>
          </div>

          <input type="submit" value="SEND MESSAGE" class="pt-2 pb-2 pr-3 pl-3" style="background-color:#00ADAE; border:solid #00ADAE;  border-radius: 50px; color: white;">
        </form>

          <br>
 @if($errors->any())
        <div class="alert alert-danger">

          <ul>

            @foreach($errors->all() as $error)

                  <li>{{$error}}</li>

            @endforeach

            </ul>
        </div>

@endif
    </div>

  </div>
</div>




@endsection
