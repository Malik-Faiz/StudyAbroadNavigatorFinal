<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CONTECT US</title>
    <!-- ********======(((   CSS  )))======******** -->
    <link rel="stylesheet" href="{{ asset('assets-2/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets-2/assets/css/style.css') }}" />
</head>

<body>
    <!-- ************======((( NAVBAR START)))======********** -->
    <nav class="navbar navbar-expand-lg  white-navbar fixed-top">
        <div class="container-xxl">
            <a class="navbar-brand ps-0 ps-lg-4  me-0" href="#"><img src="{{ asset('assets-2/assets/images/logo/Logo-dark.svg') }}" class="brandImg " />
                <b>Study</b><span><b class="text-primary">Abroad</b></span><b>Navigator</b>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto nav-links align-items-center">
                    <li class="nav-item pe-0 pe-lg-2">
                        <a class="nav-link " aria-current="page" href="./">Home
                            <span class="bottom-border"></span>
                        </a>
                    </li>
                    <li class="nav-item pe-0 pe-lg-2">
                        <a class="nav-link " href="./course">Courses
                            <span class="bottom-border"></span>
                        </a>
                    </li>
                    <li class="nav-item pe-0 pe-lg-2">
                        <a class="nav-link" href="./scholarship">Scholarship
                            <span class="bottom-border"></span>
                        </a>
                    </li>
                    <li class="nav-item pe-0 pe-lg-2">
                        <a class="nav-link" href="./job">Jobs
                            <span class="bottom-border"></span>
                        </a>
                    </li>
                    <li class="nav-item pe-0 pe-lg-2">
                        <a class="nav-link " href="{{ route('guide') }}">Guide
                            <span class="bottom-border"></span>
                        </a>
                    </li>
                    <li class="nav-item pe-0 pe-lg-2">
                        <a class="nav-link active" href="{{ route('contact') }}">Contact
                            <span class="bottom-border"></span>
                        </a>
                    </li>
                    @if ($user === "")
                <li class="nav-item pe-2 pe-lg-2">
                    <a class="nav-link btn btn-gradiant text-white px-3 mb-3 mb-md-0" href="./login">Login</a>
                </li>
                <li class="nav-item pe-0 pe-lg-2">
                    <a class="nav-link btn btn-gradiant text-white px-3" href="./signup">Register</a>
                </li>
                
                <li class="Users-profile nav-item dropdown">
                  <a class="nav-link d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="text-end d-none d-sm-block" bis_skin_checked="1">
                      <p class="small mb-0">Guest</p>
                    </div>
                    <img src="{{asset('assets-2/assets/images/background-image/navbar-per.png')}}" class="ms-3" alt="">
                  </a>
                  <ul class="dropdown-menu">
                    <li class="mb-2 p-2">
                      <a class="text-decoration-none d-flex" href="#">
                        <img src="{{asset('assets-2/assets/images/Adminpic1.png')}}" class="me-3" alt="">
                        <div class="text-start" bis_skin_checked="1">
                          <p class="x-small text-dark mb-0">Guest</p>
                          <p class="text-dark mb-0">Welcome</p>
                        </div>
                      </a>
                    </li>
                    @endif
                    @if($user)
                    <li class="nav-item pe-0 pe-lg-2">
                        <a class="nav-link " href="./wishlist">Wishlist
                            <span class="bottom-border"></span>
                        </a>
                    </li>
                    <li class="Users-profile nav-item dropdown">
                  <a class="nav-link d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="text-end d-none d-sm-block" bis_skin_checked="1">
                      <p class="small mb-0">{{$user->first_name}} {{$user->last_name}}</p>
                    </div>
                    <img src="{{asset('assets-2/assets/images/background-image/navbar-per.png')}}" class="ms-3" alt="">
                  </a>
                  <ul class="dropdown-menu">
                    <li class="mb-2 p-2">
                      <a class="text-decoration-none d-flex" href="#">
                        <img src="{{asset('assets-2/assets/images/Adminpic1.png')}}" class="me-3" alt="">
                        <div class="text-start" bis_skin_checked="1">
                          <p class="x-small text-dark mb-0">{{$user->first_name}} {{$user->last_name}}</p>
                          <p class="text-dark mb-0">Welcome</p>
                        </div>
                      </a>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li class="mb-2 px-3"><a class="dropdown-item  rounded-2" href="{{ route('profile.update', ['id' => $user->id]) }}">My Profile</a></li>
                    <li class="mb-2 px-3"><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <div class="Page-heading-contact text-center">
        <div class="d-flex justify-content-center">
            <div class="col-12 col-md-6">
                <h1 class="text-white text-uppercase">NEED HELP </h1>
                <p class="text-white text-uppercase mb-0 fs-1">We are here for you 24/7</p>
                <p class="text-white"></p>
            </div>
        </div>
    </div>

    <!--*********************************-->
        <div class="contactus-bg">
            <div class="container-xxl    ">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-5 d-none d-lg-block">
                        <img src="{{asset('assets-3/images/aboutus-1st.png')}}" class="mt-5 object-fit-cover" alt="" />
                    </div>
                    <div class="col-lg-7 col-md-12 py-5 ps-4 ps-md-5">
                        <h4 class=" text-uppercase border-custom position-relative mb-4"></h4>
                        <h1 class="text-uppercase font-family-extrabold"><b>Our <span class="text-primary font-family-bold"> Vision </span></b></h1>
                        <p class="small mt-">Our vision is to make a transformative impact on Study Abroad Service Sector through continual innovation in student services by connecting institutions, recruiters, and students across the globe.</p>
                        </br>
                        </br>
                        <h1 class="text-uppercase font-family-extrabold"><b>Our <span class="text-primary font-family-bold"> Mission </span></b></h1>
                        <p class="small mt-">Our mission is to create a global EdTech ecosystem wherein our universities can showcase the best they have to offer and partners and students can choose what suits them the most. We are bringing global education within everyone’s reach and we are accomplishing it in a very unique way – by using our ultra-efficient online platform employing high-end technology, but with a human touch that sets us apart. We are transcending international boundaries everyday and are assisting more and more stakeholders leverage our market reach and expertise to achieve and exceed their business goals.</p>

                    </div>
        
                </div>
            </div>
        </div>
        <!-- ************======(((ABOUT OWASOFT )))======********** -->
        <div class="contactus-bg">
        <div class="container-xxl justify-content-center align-items-center pt-5">
            <div class="text-center pt-md-4">
                <h1 class="mb-0">
                    <span class="mb-0"> Team </span><span class="text-primary"><b> Support </b></span>
                </h1>
                <div class="row py-5 g-5 w-100 mx-auto justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card contact-card p-3 py-4">
                            <div class="card-body">
                                <img src="{{ asset('assets-2/assets/images/email.png') }}" alt="" />
                                <h6 class="card-subtitle my-3 pt-2  text-primary"><strong>Fiza Shahzad</strong>
                                </h6>
                                <p class="card-text paragraph"> Co-Founder and CEO </p>
                                <p class="card-text offer text-primary"><strong>fizashahzad777@gmail.com</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card contact-card p-3 py-4">
                            <div class="card-body">
                                <img src="{{ asset('assets-2/assets/images/penthouse.png') }}" alt="" />
                                <h6 class="card-subtitle my-3 pt-2 text-primary"><strong> Dr Supervisor </strong>
                                </h6>
                                <p class="card-text paragraph mb-4"> Supervisor </p>
                                <p class="card-text text-primary"><strong>supervisor@gmail.com</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
  <!-- ************======(((  FOOTER START )))======********** -->
  <div class="container-fluid p-0 footer-large">
  <footer class="row pt-5 px-5 w-100 justify-content-between">
        <div class="col-md-4 col-sm-6 mb-3">
            <p class="text-white mt-4">Study Abroad Navigator is a Platform where you can explore different Universities and courses and Scholarships arounf the world. This platform gives you full information of International Universities with their provided link.</p>
            <ul class="list-unstyled d-flex flex-wrap gap-3 social-links mt-5">
                <li>
                    <a href="https://www.linkedin.com/" class="social-icon p-3 h-100 d-flex">
                        <svg width="20" height="20">
                            <use href="{{asset('assets-2/assets/images/icons/linkedin.svg#linkedin')}}"></use>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/" class="social-icon p-3 h-100 d-flex">
                        <svg width="20" height="20">
                            <use href="{{asset('assets-2/assets/images/icons/facebook.svg#facebook')}}"></use>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/" class="social-icon p-3 h-100 d-flex">
                        <svg width="20" height="20">
                            <use href="{{asset('assets-2/assets/images/icons/instagram-svg.svg#instagram')}}"></use>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="https://www.tiktok.com/" class="social-icon p-3 h-100 d-flex">
                        <svg width="20" height="20">
                            <use href="{{asset('assets-2/assets/images/icons/tiktok-svg.svg#tiktok')}}"></use>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="https://www.youtube.com/" class="social-icon p-3 h-100 d-flex">
                        <svg width="20" height="20">
                            <use href="{{asset('assets-2/assets/images/icons/youtube-svg.svg#youtube')}}"></use>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-md-4 col-sm-6 mb-3">
            <div class="d-flex">
                <h4 class="text-white link-heading position-relative pb-3">Contact Info</h4>
            </div>
            <h5 class="text-white mt-4">
                <svg class="me-1" width="13" height="17">
                    <use href="{{asset('assets-2/assets/images/icons/Address.svg#address')}}"></use>
                </svg>
                Address
            </h5>
            <p class="text-white">Mumtaz Market Plaza #2 office #17, Gujranwala</p>

            <h5 class="text-white mt-4">
                <svg class="me-1" width="17" height="17">
                    <use href="{{asset('assets-2/assets/images/icons/phone.svg#phone')}}"></use>
                </svg>
                Phone Number
            </h5>
            <p class="text-white">+92 310 1234567</p>

            <h5 class="text-white mt-4">    
                <svg class="me-1" width="18" height="13">
                    <use href="{{asset('assets-2/assets/images/icons/email.svg#email')}}"></use>
                </svg>
                Email
            </h5>
            <p class="text-white">fizashahzad777@gmail.com</p>
        </div>
    </footer>
    <div class="bg-black text-center py-2 footer-copyright"><a href="" class="text-decoration-none">StudyAbroad.com</a> 2023, All Rights Reserved.</div>
</div>

    <!-- ********======(((   JS DELIVERY   )))======******** -->
    <script src="{{asset('assets-2/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets-2/assets/js/jquery-3.6.3.min.js')}}"></script>
    <script src="{{asset('assets-2/assets/js/main.js')}}"></script>
</body>
</html>