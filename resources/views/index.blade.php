<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>
  <!-- ************======((( STYLESHEETS FLIES)))======********** -->
  <link rel="stylesheet" href="{{ asset('assets-2/assets/css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets-2/assets/css/style.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets-2/assets/css/select2.css') }}" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
  .heart-button {
        background-color: #f30a11; /* Set background color to orange */
        border-color: red; /* Set border color to orange */
        color: white; /* Set text color to white */
    }
  .heart-button:hover {
        background-color: white; /* Change background color on hover */
        border-color: red; /* Change border color on hover */
        color: red; /* Set text color to white */

    }
    #searchInput {
        width: 900px; /* Adjust width as needed */
        height: 40px; /* Adjust height as needed */
        padding: 10px; /* Adjust padding as needed */
        border: 2px solid #ccc; /* Border color */
        border-radius: 8px; /* Border radius */
        transition: box-shadow 0.3s;
        color: #333; /* Text color */
    }

    #searchInput:hover {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .card:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Depth effect on hover */
            transform: translateY(-15px); /* Slight upward movement on hover */
        }
    .card img:hover {
        filter: brightness(90%); /* Slightly darken the image on hover */
    }
    .card{
        background: linear-gradient(to bottom right, #fad9af, #fab76b);
    }
    .custom-div {
        /* background-color: #f2e6c4; */
        background: linear-gradient(to bottom right, #86c0f7, #fcc47e); /* Define the gradient */
    }
    .show {
        transition: transform 0.3s;
        /* background: linear-gradient(to bottom right, #fad9af, #fab76b); */
        }

    .show:hover {
        transform: translateY(-10px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
</style>
</head>
<body>
    @if(session('success'))
        <script>
            // JavaScript code to show the alert
            window.onload = function() {
                alert("{{ session('success') }}");
            };
        </script>
    @endif
  <!-- ************======((( NAVBAR START)))======********** -->
  <div>
  <nav class="navbar navbar-expand-lg  white-navbar fixed-top">
    <div class="container-xxl">
        <a class="navbar-brand ps-0 ps-lg-4  me-0" href="#"><img src="{{asset('assets-2/assets/images/logo/Logo-dark.svg')}}" class="brandImg " />
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
                    <a class="nav-link active" aria-current="page" href="./">Home
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
                    <a class="nav-link" href="{{ route('contact') }}">Contact
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
                </li>
            </ul>
        </div>
    </div>
</nav>
</div>

  <!-- ************======((( PAGE HEADER )))======********** -->
  <div class="Page-heading text-center">
    <div class="d-flex justify-content-center">
      <div class="col-12 col-md-6">
        <h1 class="text-black text-uppercase">Browse Your Degree Around The World</h1>

      </div>
    </div>
  </div>
  <!-- ************======((( CITIES FORMS )))======********** -->

    <div class="container Search-Area">
        <div class="row-cols-12 searcbar-home">
        <input id="searchInput" type="text" class="form-control p-2" placeholder="Enter Your Preferred Degree Name">        </div>
    </div>


    <!-- ************======((( MAIN CONTENT TEXT START)))======********** -->
<div class="custom-div">
    <div class="container pb-4" bis_skin_checked="1">
        <div class="mt-5">
            <div class="">
                <h3>  Scholarships for International Students</h3>
                <p>Worried about your study costs?</p>
            </div>
      
        <div id="scholarship-container" class="row">
            @foreach($scholarship as $index => $scholarship)
            <div class="col-md-4 mb-4 scholarship-card" style="display: {{ $index < 3 ? 'block' : 'none' }};">
        <div class="card" style="width: 100%; border-radius: 15px; transition: all 0.3s ease;">
            <div class="carousel-inner rounded-start">
                <div class="carousel-item property-images active" style="width: 100%; height: 300px;">
                    <img src="{{ asset($scholarship->image) }}" class="d-block img-fluid" style="object-fit: cover; width: 100%; height: 100%; border-radius: 15px; transition: filter 0.3s ease;">
                    <div class="shadow-overlay"></div>
                </div>
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $scholarship->name }}</h5>
                <p class="card-text">Deadline: {{ $scholarship->application_deadline }}</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <a href="./scholarship/{{ $scholarship->id }}" class="btn btn-primary">Read more</a>
                    </div>
                    @if ($user === "")
                        <div>
                            <form action="{{ route('wishlistlogin') }}">    
                                <button type="submit" class="btn heart-button">
                                    <i class="fas fa-heart"></i> <!-- Assuming you are using Font Awesome -->      
                                </button>
                            </form>
                        </div>
                    @endif
                    @if ($user)
                        <div>
                            <form action="{{ route('wishlistscholarshipadd') }}" method="POST">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ $user->id }}">
                                <input type="hidden" name="scholarship_id" value="{{ $scholarship->id }}">
                                <button type="submit" class="btn heart-button">
                                    <i class="fas fa-heart"></i> <!-- Assuming you are using Font Awesome -->      
                                </button>
                            </form>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>            
    @endforeach
        </div>
        <div class="text-center mt-4">
            <button id="show-more" class="btn btn-primary">Show More</button>
            <button id="show-less" class="btn btn-secondary" style="display: none;">See Less</button>
        </div>
    </div>

  
    <!-- Discover study abroad countries -->
    <div class="mt-5">
    <div>
        <h3>Discover Universities</h3>
        <p>Explore our detailed breakdowns of the study abroad destinations around the world!</p>
    </div>
    <div class="container pb-4">
        <div class="row" id="university-container">
            @foreach($universities as $index => $university)
            <div class="col-md-4 mb-4 university-card" style="display: {{ $index < 3 ? 'block' : 'none' }};">
        <div class="card" style="width: 100%; border-radius: 15px; transition: all 0.3s ease;">
            <div id="carouselcountries{{ $index }}" class="carousel slide caruselSlides">
                <div class="carousel-inner rounded-start">
                    <div class="carousel-item property-images active" style="width: 100%; height: 300px;">
                        <img src="{{ $university->image }}" class="d-block object-fit-contain" style="object-fit: cover; width: 100%; height: 100%; border-radius: 15px; transition: filter 0.3s ease;">
                        <div class="shadow-overlay"></div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $university->name }}</h5>
                <p class="card-text">Campus: {{ $university->campus }}</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <a href="./university/{{ $university->id }}" class="btn btn-primary">Read more</a>
                    </div>
                    @if ($user === "")
                        <div>
                            <form action="{{ route('wishlistlogin') }}">
                                <button type="submit" class="btn heart-button">
                                    <i class="fas fa-heart"></i> <!-- Assuming you are using Font Awesome -->
                                </button>
                            </form>
                        </div>
                    @endif
                    @if ($user)
                        <div>
                            <form action="{{ route('wishlistuniversityadd') }}" method="POST">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ $user->id }}">
                                <input type="hidden" name="university_id" value="{{ $university->id }}">
                                <button type="submit" class="btn heart-button">
                                    <i class="fas fa-heart"></i> <!-- Assuming you are using Font Awesome -->
                                </button>
                            </form>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
            @endforeach
        </div>
        <div class="text-center mt-4">
            <button id="show-more-universities" class="btn btn-primary">Show More</button>
            <button id="show-less-universities" class="btn btn-secondary" style="display: none;">See Less</button>
        </div>
        </div>
    </div>

        <!-- Student guides and tips -->
        <div class="mt-5">
        <div>
            <h3>Discover Courses</h3>
            <p>Learn our best tips for studying abroad!</p>
        </div>
        <div class="container pb-4">
            <div class="row" id="course-container">
                @foreach($course as $index => $course)
                <div class="col-md-4 mb-4 course-card" style="display: {{ $index < 3 ? 'block' : 'none' }};">
        <div class="card" style="width: 100%; border-radius: 15px; transition: all 0.3s ease;">
            <div class="carousel-inner rounded-start">
                <div class="carousel-item property-images active" style="width: 100%; height: 300px;">
                    @if($index % 5 == 0)
                        <img src="Course.jpg" class="d-block object-fit-contain" style="object-fit: cover; width: 100%; height: 100%; border-radius: 15px; transition: filter 0.3s ease;">
                    @elseif($index % 5 == 1)
                        <img src="Course3.jpg" class="d-block object-fit-contain" style="object-fit: cover; width: 100%; height: 100%; border-radius: 15px; transition: filter 0.3s ease;">
                    @elseif($index % 5 == 2)
                        <img src="Course2.jpg" class="d-block object-fit-contain" style="object-fit: cover; width: 100%; height: 100%; border-radius: 15px; transition: filter 0.3s ease;">
                    @elseif($index % 5 == 3)
                        <img src="Course4.jpg" class="d-block object-fit-contain" style="object-fit: cover; width: 100%; height: 100%; border-radius: 15px; transition: filter 0.3s ease;">
                    @elseif($index % 5 == 4)
                        <img src="Course5.jpg" class="d-block object-fit-contain" style="object-fit: cover; width: 100%; height: 100%; border-radius: 15px; transition: filter 0.3s ease;">
                    @endif
                    <div class="shadow-overlay"></div>
                </div>
            </div>
            <div class="card-body">
                <h5 class="card-title">{{$course->course_name}}</h5>
                <p class="card-text">Tuition fee: {{$course->tuition_fee}}</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <a href="./course/{{ $course->id }}" class="btn btn-primary">Read more</a>
                    </div>
                    @if ($user === "")
                        <div>
                            <form action="{{ route('wishlistlogin') }}">
                                <button type="submit" class="btn heart-button">
                                    <i class="fas fa-heart"></i> <!-- Assuming you are using Font Awesome -->
                                </button>
                            </form>
                        </div>
                    @endif
                    @if ($user)
                        <div>
                            <form action="{{ route('wishlistcourseadd') }}" method="POST">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ $user->id }}">
                                <input type="hidden" name="course_id" value="{{ $course->id }}">
                                <button type="submit" class="btn heart-button">
                                    <i class="fas fa-heart"></i> <!-- Assuming you are using Font Awesome -->
                                </button>
                            </form>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
                @endforeach
            </div>
            <div class="text-center mt-4">
                <button id="show-more-courses" class="btn btn-primary">Show More</button>
                <button id="show-less-courses" class="btn btn-secondary" style="display: none;">See Less</button>
            </div>
        </div>
    </div>
          <!-- Jobs guide and tips -->
          <div class="mt-5">
        <div>
            <h3>Discover Jobs for Students</h3>
            <p>Learn our best tips for jobs abroad!</p>
        </div>
        <div class="container pb-4">
            <div class="row" id="job-container">
                @foreach($job as $index => $job)
                <div class="col-md-4 mb-4 job-card" style="display: {{ $index < 3 ? 'block' : 'none' }};">
        <div class="card" style="width: 100%; border-radius: 15px; transition: all 0.3s ease;">
            <div class="carousel-inner rounded-start">
                <div class="carousel-item property-images active" style="width: 100%; height: 300px;">
                    <img src="{{$job->job_image}}" class="d-block object-fit-contain" style="object-fit: cover; width: 100%; height: 100%; border-radius: 15px; transition: filter 0.3s ease;">
                    <div class="shadow-overlay"></div>
                </div>
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $job->job_name }}</h5>
                <p class="card-text">Location: {{ $job->job_location }}</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <a href="./job/{{ $job->id }}" class="btn btn-primary">Read more</a>
                    </div>
                    @if ($user === "")
                        <div>
                            <form action="{{ route('wishlistlogin') }}">    
                                <button type="submit" class="btn heart-button">
                                    <i class="fas fa-heart"></i> <!-- Assuming you are using Font Awesome -->      
                                </button>
                            </form>
                        </div>
                    @endif
                    @if ($user)
                        <div>
                            <form action="{{ route('wishlistjobadd') }}" method="POST">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ $user->id }}">
                                <input type="hidden" name="job_id" value="{{ $job->id }}">
                                <button type="submit" class="btn heart-button">
                                    <i class="fas fa-heart"></i> <!-- Assuming you are using Font Awesome -->      
                                </button>
                            </form>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
                @endforeach
            </div>
            <div class="text-center mt-4">
                <button id="show-more-jobs" class="btn btn-primary">Show More</button>
                <button id="show-less-jobs" class="btn btn-secondary" style="display: none;">See Less</button>
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
            <p class="text-white">+92 307 9632803</p>

            <h5 class="text-white mt-4">
                <svg class="me-1" width="18" height="13">
                    <use href="{{asset('assets-2/assets/images/icons/email.svg#email')}}"></use>
                </svg>
                Email
            </h5>
            <p class="text-white">fizashahzad777@gmail.com</p>
        </div>
    </footer>
    <div class="bg-black text-center py-2 footer-copyright"><a href="/" class="text-decoration-none">StudyAbroad.com</a> 2024, All Rights Reserved.</div>
</div>

  <!-- ************======(((  SCRIPT TAGS FOR JS AND JQ FILES)))======********** -->
  <script src="{{asset('assets-2/assets/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets-2/assets/js/jquery-3.6.3.min.js')}}"></script>
  <script src="{{asset('assets-2/assets/js/main.js')}}"></script>
  <script src="{{asset('assets-2/assets/js/select2.min.js')}}"></script>
  <script>
    $(document).ready(function () {
      $("#my-dropdown").select2();
    });

    
  </script>
  <script>
      document.addEventListener('DOMContentLoaded', function() {
        let currentRowCount = 1;
        const cardsPerRow = 3;
        const totalCards = document.querySelectorAll('.scholarship-card').length;
        const totalRows = Math.ceil(totalCards / cardsPerRow);
        const showMoreButton = document.getElementById('show-more');
        const showLessButton = document.getElementById('show-less');

        showMoreButton.addEventListener('click', function() {
            if (currentRowCount < totalRows) {
                currentRowCount++;
                showCards();
                if (currentRowCount === totalRows) {
                    showMoreButton.style.display = 'none';
                }
                showLessButton.style.display = 'inline-block';
            }
        });

        showLessButton.addEventListener('click', function() {
            if (currentRowCount > 1) {
                currentRowCount--;
                showCards();
                if (currentRowCount === 1) {
                    showLessButton.style.display = 'none';
                }
                showMoreButton.style.display = 'inline-block';
            }
        });

        function showCards() {
            const cards = document.querySelectorAll('.scholarship-card');
            cards.forEach((card, index) => {
                if (index < currentRowCount * cardsPerRow) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        }
    });
  </script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
        let currentRowCountUniversities = 1;
        const cardsPerRowUniversities = 3;
        const totalRowsUniversities = Math.ceil({{ count($universities) }} / cardsPerRowUniversities);
        const showMoreButtonUniversities = document.getElementById('show-more-universities');
        const showLessButtonUniversities = document.getElementById('show-less-universities');

        showMoreButtonUniversities.addEventListener('click', function() {
            if (currentRowCountUniversities < totalRowsUniversities) {
                currentRowCountUniversities++;
                showUniversityCards();
                if (currentRowCountUniversities === totalRowsUniversities) {
                    showMoreButtonUniversities.style.display = 'none';
                }
                showLessButtonUniversities.style.display = 'inline-block';
            }
        });

        showLessButtonUniversities.addEventListener('click', function() {
            if (currentRowCountUniversities > 1) {
                currentRowCountUniversities--;
                showUniversityCards();
                if (currentRowCountUniversities === 1) {
                    showLessButtonUniversities.style.display = 'none';
                }
                showMoreButtonUniversities.style.display = 'inline-block';
            }
        });

        function showUniversityCards() {
            const universityCards = document.querySelectorAll('.university-card');
            universityCards.forEach((card, index) => {
                card.style.display = index < currentRowCountUniversities * cardsPerRowUniversities ? 'block' : 'none';
            });
        }
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        let currentRowCountCourses = 1;
        const cardsPerRowCourses = 3;
        const totalCardsCourses = document.querySelectorAll('.course-card').length;
        const totalRowsCourses = Math.ceil(totalCardsCourses / cardsPerRowCourses);
        const showMoreButtonCourses = document.getElementById('show-more-courses');
        const showLessButtonCourses = document.getElementById('show-less-courses');

        showMoreButtonCourses.addEventListener('click', function() {
            if (currentRowCountCourses < totalRowsCourses) {
                currentRowCountCourses++;
                showCourseCards();
                if (currentRowCountCourses === totalRowsCourses) {
                    showMoreButtonCourses.style.display = 'none';
                }
                showLessButtonCourses.style.display = 'inline-block';
            }
        });

        showLessButtonCourses.addEventListener('click', function() {
            if (currentRowCountCourses > 1) {
                currentRowCountCourses--;
                showCourseCards();
                if (currentRowCountCourses === 1) {
                    showLessButtonCourses.style.display = 'none';
                }
                showMoreButtonCourses.style.display = 'inline-block';
            }
        });

        function showCourseCards() {
            const courseCards = document.querySelectorAll('.course-card');
            courseCards.forEach((card, index) => {
                card.style.display = index < currentRowCountCourses * cardsPerRowCourses ? 'block' : 'none';
            });
        }
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        let currentRowCountJobs = 1;
        const cardsPerRowJobs = 3;
        const totalCardsJobs = document.querySelectorAll('.job-card').length;
        const totalRowsJobs = Math.ceil(totalCardsJobs / cardsPerRowJobs);
        const showMoreButtonJobs = document.getElementById('show-more-jobs');
        const showLessButtonJobs = document.getElementById('show-less-jobs');

        showMoreButtonJobs.addEventListener('click', function() {
            if (currentRowCountJobs < totalRowsJobs) {
                currentRowCountJobs++;
                showJobCards();
                if (currentRowCountJobs === totalRowsJobs) {
                    showMoreButtonJobs.style.display = 'none';
                }
                showLessButtonJobs.style.display = 'inline-block';
            }
        });

        showLessButtonJobs.addEventListener('click', function() {
            if (currentRowCountJobs > 1) {
                currentRowCountJobs--;
                showJobCards();
                if (currentRowCountJobs === 1) {
                    showLessButtonJobs.style.display = 'none';
                }
                showMoreButtonJobs.style.display = 'inline-block';
            }
        });

        function showJobCards() {
            const jobCards = document.querySelectorAll('.job-card');
            jobCards.forEach((card, index) => {
                card.style.display = index < currentRowCountJobs * cardsPerRowJobs ? 'block' : 'none';
            });
        }
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
    var searchInput = document.getElementById("searchInput");

    searchInput.addEventListener("input", function() {
        var searchTerm = searchInput.value.trim().toLowerCase();
        
        // If search term is empty, refresh the page
        if (searchTerm === "") {
            location.reload();
            return;
        }

        // Scholarships
        var scholarships = document.querySelectorAll(".scholarship-card");
        scholarships.forEach(function(scholarship) {
            var scholarshipName = scholarship.querySelector(".card-title").textContent.toLowerCase();
            var scholarshipDeadline = scholarship.querySelector(".card-text").textContent.toLowerCase();
            
            if (scholarshipName.includes(searchTerm) || scholarshipDeadline.includes(searchTerm)) {
                scholarship.style.display = "block";
            } else {
                scholarship.style.display = "none";
            }
        });

        // Universities
        var universities = document.querySelectorAll(".university-card");
        universities.forEach(function(university) {
            var universityName = university.querySelector(".card-title").textContent.toLowerCase();
            var universityCampus = university.querySelector(".card-text").textContent.toLowerCase();
            
            if (universityName.includes(searchTerm) || universityCampus.includes(searchTerm)) {
                university.style.display = "block";
            } else {
                university.style.display = "none";
            }
        });

        // Courses
        var courses = document.querySelectorAll(".course-card");
        courses.forEach(function(course) {
            var courseName = course.querySelector(".card-title").textContent.toLowerCase();
            var courseTuitionFee = course.querySelector(".card-text").textContent.toLowerCase();
            
            if (courseName.includes(searchTerm) || courseTuitionFee.includes(searchTerm)) {
                course.style.display = "block";
            } else {
                course.style.display = "none";
            }
        });

        // Jobs
        var jobs = document.querySelectorAll(".job-card");
        jobs.forEach(function(job) {
            var jobTitle = job.querySelector(".card-title").textContent.toLowerCase();
            var jobLocation = job.querySelector(".card-text").textContent.toLowerCase();
            
            if (jobTitle.includes(searchTerm) || jobLocation.includes(searchTerm)) {
                job.style.display = "block";
            } else {
                job.style.display = "none";
            }
        });
    });
});

</script>


</body>

</html>