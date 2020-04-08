@extends('welcome')

@section('title', 'Contact Us Page')


@section('content')

<div style="background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.8)), url('images/happy-2.jpg'); height: 450px; background-size: cover; " >
  <div style="background-image: linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.8)), url('images/night.png');  height: 450px; background-size: cover; opacity:0.95;">
    <div class="banner">
      <h1 class="banner-heading">WHO WE ARE</h1>
      <p class="banner-body">Jesus left His followers with an epic mission: tell the world of His love and His promise to return </p>
    </div>
  </div>
</div>


<div class="about-section">
  <div class="row">
    <div class="col-md-4 about-box">
      <img src="images/about.svg" alt="about-img" class="img-fluid">
    </div>

    <div class="col-md-4 text-justify about-box">
      <i class="icon-layers mb-4 start-icon"></i>
      <h6 class="about-heading">BRIEF HISTORY</h6>
      <hr size="5" width="80" align="left" color="#3BAA97" noshade>
      <p class="about-body">The University for Development Studies which was established in 1992 by the PNDC Law had its FIDS moved to
        Wa from Navrongo in 2002/2003 academic year.   </p>

      <p class="about-body">
        Four of the students admitted that year were Seventh-Day Adventist. Given that their number was too small to start a students’s fellowship, they worshiped with the Local Church.
        The 2003/2004 admission added only a student to the number.
     </p>
    </div>

    <div class="col-md-4 text-justify about-box">
      <p class="about-body">In the 2004/2005 academic however, the number increased to ten(10) with which fellowship could be started. As at <span style="color: #00ADAE;"> 5th February, 2005, </span> GNAAS UDS Wa Campus fellowship was
        organised and established with the first Sabbath worship at the Somboh Islamic Primary School.   </p>

        <p class="about-body">Today, GNAAS-UDS Wa Campus can boast of membership attendance of hundreds and
          it is interesting to know that the fellowship is growing at a fast rate both in numbers and in richness of worship.  </p>
    </div>
  </div>
</div>


<div class="about-middle-section" >
  <h4 class="col-md-12 pb-5 mb-5 text-center font-weight-bold">OUR TOTAL NUMBER</h4>

<div class="row">
  <div class="col-md-3 text-center mb-5">
    <i class="fas fa-male mb-2 fa-lg"></i>
    <h4 class="num font-weight-bold">100</h4>
    <h6>MALES</h6>
  </div>

  <div class="col-md-3 text-center mb-5">
    <i class="fas fa-female mb-2 fa-lg"></i>
    <h4 class="num font-weight-bold">1300</h4>
    <h6>FEMALES</h6>
  </div>

  <div class="col-md-3 text-center mb-5">
    <i class="fas fa-user-friends mb-2 fa-lg"></i>
    <h4 class="num font-weight-bold">3000</h4>
    <h6>TOTAL STUDENTS</h6>
  </div>

  <div class="col-md-3 text-center mb-5">
    <i class="fas fa-users mb-2 fa-lg"></i>
    <h4 class="num font-weight-bold">900</h4>
    <h6>ALUMNI</h6>
  </div>
</div>

</div>

<div class="leaders-section">
  <div class="row">
    <h4 class="col-md-12 about-heading text-center mb-5">MEET OUR LEADERS</h4>
    <div class="col-md-4 mb-5">
      <img src="images/john-01.jpg" alt="" class="img-fluid shadow img-thumbnail mb-4 img-circle" width="85px" height="85px">
      <h6 class="about-heading">Dr. John Akparep</h6>
      <p class="leaders-text">Lorem Ipsum is simply dummy text of the printing and Lorem Ipsum has been the industry's standard </p>
      <a href="#" class="pr-3 text-muted"> <i class="fab fa-twitter"></i> </a>
      <a href="#" class="pr-3 text-muted"> <i class="fab fa-instagram"></i> </a>
      <a href="#" class="text-muted pr-3"> <i class="fab fa-facebook-square"></i> </a>
    </div>

    <div class="col-md-4 mb-5">
      <img src="images/gilbert.jpg" alt="" class="img-fluid shadow img-thumbnail img-circle mb-4" width="85px" height="85px">
      <h6 class="about-heading">Wiredu Gilbert</h6>
      <p class="leaders-text">Lorem Ipsum is simply dummy text of the printing and Lorem Ipsum has been the industry's standard</p>
      <a href="#" class="pr-3 text-muted"> <i class="fab fa-twitter"></i> </a>
      <a href="#" class="pr-3 text-muted"> <i class="fab fa-instagram"></i> </a>
      <a href="#" class="text-muted pr-3"> <i class="fab fa-facebook-square"></i> </a>
    </div>

    <div class="col-md-4 mb-5">
      <img src="images/kesewah-01.png" alt="" class="img-fluid img-circle shadow img-thumbnail mb-4" width="85px" height="85px">
      <h6 class="about-heading">Boampong Kesewah</h6>
      <p class="leaders-text">Lorem Ipsum is simply dummy text of the printing and Lorem Ipsum has been the industry's standard</p>
      <a href="#" class="pr-3 text-muted"> <i class="fab fa-twitter"></i> </a>
      <a href="#" class="pr-3 text-muted"> <i class="fab fa-instagram"></i> </a>
      <a href="#" class="text-muted pr-3"> <i class="fab fa-facebook-square"></i> </a>
    </div>
  </div>
</div>




@endsection
