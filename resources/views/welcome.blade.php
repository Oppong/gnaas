<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="This is the Official website for Ghana National Association of Adventist Students UDS Wa-Campus">
    <meta name="keywords" content="GNAAS, UDS, UDS Wa-Campus, Adventist, ">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto:400,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title> GNAAS WA-Campus | @yield('title')</title>
  </head>
  <body>
  <div id="app">
    <nav class="navbar navbar-expand-lg navs">
      <!-- <img src="" alt="" class="navbar-brand" > -->
      <div class="navbar-brand">
          <a class="text-muted">GNAAS UDS WA-CAMPUS</a>
      </div>

      <button  class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-bars "></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="/" class="nav-link text-muted mr-3 ">Home</a></li>
          <li class="nav-item"><a href="about" class="nav-link text-muted mr-3">About</a></li>
          <li class="nav-item"><a href="/contact" class="nav-link text-muted mr-3">Contact</a></li>
          <li class="nav-item"><a href="/gallery" class="nav-link text-muted mr-3">Gallery</a></li>
          <li class="nav-item"><a href="/giving" class="nav-link text-muted mr-3">Giving</a></li>
          <li class="nav-item"><a href="/alumni" class="nav-link text-muted mr-3">Alumni</a></li>


          <div class="dropdown">
            <a href="#" type="button" class="nav-link text-muted mr-3 dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown">Resources</a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item text-muted" href="#" >Newsletter</a>
              <a class="dropdown-item text-muted" href="#" >Constitution</a>
            </div>
          </div>

          <li class="nav-item"><a href="/blog" class="nav-link text-muted mr-3">Blog</a></li>
        </ul>
      </div>
    </nav>

    <div class="">
      @yield('content')
    </div>

     <footer>
         <div class="row">
            <div class="col-md-4 mb-4">
                <h6 class="mb-4">WHO WE ARE</h6>
                <p class="footer-text">Lorem ipsum reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="col-md-3 mb-4">
                <h6 class="mb-4">HAVE ANY QUESTIONS?</h6>
                <p>+233 055 234 1201 </br> +233 050 099 9212 </br> gnaasudswacampus1@gmail.com</p>
                <p></p>
            </div>
            <div class="col-md-2 quick mb-4">
                <h6 class="mb-4">QUICK LINKS</h6>
                <p><a href="/contact" class="text-white">Contact Us</a> </p>
                <p><a href="/about" class="text-white">About Us</a></p>
                <p><a href="/blog" class="text-white">Blog</a></p>
                <p><a href="/giving" class="text-white">Giving</a></p>
                <p><a href="/alumni" class="text-white">Alumni</a></p>
                <p><a href="/gallery" class="text-white">Gallery</a></p>
            </div>
            <div class="col-md-3 mb-4">
                <h6 class="mb-4">SOCIAL MEDIA</h6>
                <a href="#" class="text-white pr-4"> <i class="fab fa-twitter"></i> </a>
                <a href="#" class="text-white pr-4"> <i class="fab fa-instagram"></i> </a>
                <a href="#" class="text-white pr-4"> <i class="fab fa-facebook-square"></i> </a>
                <a href="#" class="text-white pr-4"> <i class="fab fa-youtube"></i> </a>
            </div>
         </div>

         <hr color="#fafafa">

         <div class="row mt-4">
              <div class="col-md-6">
                <p> <small>Copyright (c) 2020 GNAAS UDS WA CAMPUS.</small> </p>
              </div>
              <div class="col-md-6 xs:text-left">
                <p> <small>Developed by Amponsah</small> </p>
              </div>
         </div>
     </footer>


     </div>
    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js" charset="utf-8"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script type="text/javascript">
      $('.num').counterUp({delay:10, time:2000});
      $('#flash-overlay-modal').modal();
    </script>
  </body>
</html>
