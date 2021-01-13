<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Bram Boostrap</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Favicon -->
    <link rel="shortcut icon" href="/img/logo.png" type="image/x-png">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
      <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="/img/logo-lepkom.jpg" width="50" height="50"alt="logo-lepkom"
      loading="lazy">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Portofolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Experience</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Get In Touch</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Full Page Image Header with Vertically Centered Content -->
<header class="masthead">
  <div class="container h-100">
    <div class="row align-items-center row-title">
      <div class="col-sm-3 text-center" data-aos="fade-right" data-aos-duration="1500">
        <img src="/img/3x4.jpg" class="img-fluid" my-photo" alt="my-photo">
      </div>
      <div class="col-sm-9 text-center" data-aos="fade-left" data-aos-duration="1500"\>
       <div class="my-name">Hi, i'm <strong>Bram</div>
       <div class="caption">Student of Gunadarma Univesity</div> 
      </div>
    </div>
  </div>
</header>

<!-- Page Content -->
<section id="portfolio" class="py-5">
  <div class="container">
    <h3 class="text-center title-section"><strong>PORTFOLIO</strong></h3>
    <p class="text-center font-weight-light mb-5"><small>SELECTED LATEST WORKS</small></p>
    <div class="container">
      <div class="row grid-row">
        <div class="column">
          <img src="https://images.unsplash.com/photo-1581287053822-fd7bf4f4bfec?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&h=300&fit=crop" alt="">
        <img src="https://images.unsplash.com/photo-1602576666092-bf6447a729fc?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&h=500&fit=crop" alt="">
      </div>
      <div class="column">
        <img src="https://images.unsplash.com/photo-1585844621420-c0c2f393ab71?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&h=500&fit=crop" alt="">
        <img src="https://images.unsplash.com/photo-1535223289827-42f1e9919769?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&h=400&fit=crop" alt="">
         </div>
      </div>
    </div>
  </div>
</section>
<section id="experience" class="py-5 bg-dark text-white">
  <div class="container">
    <h2 class="font-weight-light">
      EXPERIENCE
    </h2>
    <hr class="mb-5" style="border-top: 1px solid #FFFFFF">
    <div class="row mb-5">
      <div class="col-lg-8">
      <h4 class="mb-0">Lecturer</h4>
      <p class="lead">Universitas Gunadarma</p>
      <p>Making teaching materials, teaching, guiding student and making exam quest</p>
    </div>
    <div class="col-lg-4">
      Feb 2019 - Present
    </div>
  </div>
  </div>
</section>
  <section id="education" class="py-5">
    <div class="container">
      <h2 class="font-weight-light">
        EDUCATION
      </h2>
      <hr class="mb-5">
      <div class="row mb-5">
        <div class="col-lg-8">
          <h4 class="mb-0">Universitas Gunadarma</h4>
          <p class="lead">Sarjana Degree of Computer Informatic</p>
        </div>
        <div class="col-lg-4 text-lg-right">
          2017 - 2021
        </div>
      </div>
    </div>
  </section>
<section id="about" class="py-5">
  <div class="container">
    <h3 class="text-center about-me mb-5"><strong>ABOUT ME</strong></h3>
      <div class="row">
        <div class="col-lg-6 px-5">
          <blockquote class="blockquote">
            <p>
              <i class="fa fa-quote-left fa-2x">
              </i>
            </p>
            <p class="mb-0">
              <i>if i quit now, i'll dissapear right now</i>
            </p>
            <footer class="blockquote-footer">Unknown in
              <cite class="Souce Title">Momentum Chrome</cite>
            </footer>
          </blockquote>
        </div>
        <div class="col-lg-6 px-5">
          <h6>
            i am a dedicated Lecturer
          </h6>
          <p>
            im looking for positiong network engineering
          </p>
          <br>
          <a class="btn btn-outline-dark btn-myresume" href="/img/bram-cv.pdf" target="_blank" role="button">
            <i class="fas fa-arrow-alt-circle-down" aria-hidden="true"></i> MY RESUME
          </a>
        </div>
      </div>
    </div>
  </section>
  <section id="contact" class="py-5">
    <div class="container">
      <h3 class="text-center about-me mb-5"> <strong>GET IN TOUCH</strong></h3>
      <div class="row">
        <div class="col-lg-3 text-center">
          <a href="https://www.google.com/maps/place/6%C2%B021'57.6%22S+106%C2%B050'14.8%22E/@-6.365989,106.8352473,17z/data=!3m1!4b1!4m9!1m2!10m1!1e2!3m5!1s0x2e69ec139177af6f:0x0!7e2!8m2!3d-6.365989!4d106.837436?authuser=1&hl=id" 
          target="_blank"> <i class="far fa-map fa-contact-custom fa-4x mb-2"></i></a>
            <p><strong>Go to my Address? Click the icon.</strong></p>
            <p>Jl. Kedoya Raya No.53 Rt 04/ Rw 02, Pondok Cina, Beji, Depok</p>
        </div>
  
        <div class="col-lg-3 text-center">
          <a href="bramnp@null.net" target="_blank"> <i class="far fa-envelope-open fa-contact-custom fa-4x mb-2"></i></a>
          <p><strong>Email Me</strong></p>
          <p>Just click the icon or send your message to bramnp@null.net</p>
        </div>
  
        <div class="col-lg-3 text-center">
          <a href="https://api.whatsapp.com/send?phone=6281237222211&text=Hi, Bram" target="_blank"><i class="far fa-comments fa-contact-custom fa-4x mb-2"></i></a>
          <p><strong>Let's Talk</strong></p>
          <p>Just click the icon or Call my phone number 0812 3722 2211</p>
        </div>
  
        <div class="col-lg-3 text-center">
          <i class="far fa-clock fa-contact-custom fa-4x mb-2"></i>
          <p><strong>Working Hours</strong></p>
          <p>Mon to Sat – 9.00 to 18.00</p>
        </div>
      </div>
    </div>
  </section>
  
  <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
    <div class="container text-center">
  <small>Copyright &copy; Bram</small>
    </div>
  </footer>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>