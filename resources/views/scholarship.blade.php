<!DOCTYPE html>
<html lang="en">

<head>
    <title>Scholarship</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('assets-2/assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets-2/assets/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('assets-2/assets/css/select2.css')}}" />
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
        .card {
            background: linear-gradient(to bottom right, #fad9af, #fab76b);
        transition: transform 0.3s, box-shadow 0.3s;
        background-color: #f5e4e4; /* Change the background color as desired */
    }

    .card:hover {
        transform: translateY(-20px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    #courseSearch {
        width: 800px; /* Adjust width as needed */
        height: 40px; /* Adjust height as needed */
        border: 2px solid #3b3a3a; /* Border color */
        border-radius: 8px; /* Border radius */
        transition: box-shadow 0.3s;
        color: #ffffff; /* Text color */
        background-color: #3b3a3a;
    }

    #courseSearch:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .custom-div {
        /* background-color: #f2e6c4; */
        background: linear-gradient(to bottom right, #ff7e5f, #f0b81a); /* Define the gradient */
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
                        <a class="nav-link active" href="./scholarship">Scholarship
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
                        <a class="nav-link" href="./contact">Contact
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
    

    <!-- ************======((( TABS FORMS)))======********** -->
    <div class="custom-div">
    <div class="container-xl pb-6 property_ads">
        <div class="row justify-content-center my-5">
            <div class="col-lg-8">
                <input type="text" id="courseSearch" class="form-control mb-3" placeholder="Search for Scholarship..." onkeyup="filterCourses()">
            </div>
        </div>
    
        @foreach($scholarship as $index => $sch)
        <!-- <div class="bg-gradient pb-10 "> -->
        <div class="container-xl pb-4 property_ads row justify-content-center my-5">
    <div class="col-lg-10">
        <div class="row g-3">
            <div class="col-12">
                <div class="card mb-1 border-1" style="border-radius: 15px;">
                    <div class="row g-4">
                        <div class="col-md-5">
                            <img src="{{asset($sch->image)}}" class="d-block object-fit-contain" style="object-fit: cover; width: 100%; height: 100%; border-radius: 15px;" />
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <div class="d-flex justify-content-between flex-wrap">
                                    <div class="">
                                        <h4 class="card-title mb-2 text-truncate">{{$sch->name}}</h4>
                                        <p class="small mb-0 text-gray text-truncate">
                                            <span><img class="me-2" src="{{asset('assets-2/assets/images/icons/location.png')}}" alt="" /></span>{{$sch->university->name}}
                                        </p>
                                    </div>
                                    <div class="text-end">
                                        @if ($user)
                                        <div>
                                            <form action="{{ route('wishlistscholarshipadd') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="user_id" value="{{ $user->id }}">
                                                <input type="hidden" name="scholarship_id" value="{{ $sch->id }}">
                                                <button type="submit" class="btn heart-button">
                                                    <i class="fas fa-heart"></i>
                                                </button>
                                            </form>
                                        </div>
                                        @endif
                                        @if ($user==="")
                                        <div>
                                            <a class="btn heart-button" href="{{route('index')}}">
                                                <i class="fas fa-home"></i>
                                            </a>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="card-text border-bottom border-top my-3">
                                    <div class="d-flex align-items-center justify-content-between py-2">
                                        <div class="text-center d-flex justify-content-between gap-2 align-items-center flex-wrap">
                                            <p class="small mb-0"><b>Application Deadline:</b> {{$sch->application_deadline}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-wrap gap-2 align-items-center justify-content-between">
                                    @php
                                    $description = $sch->description;
                                    $words = explode(' ', $description);
                                    $truncatedDescription = implode(' ', array_slice($words, 0, 10)) . (count($words) > 10 ? '... <a href="./scholarship/' . $sch->id . '"><b>Read more</b></a>' : '');
                                    @endphp
                                    <p class="mb-0"><b>Description:</b> {!! $truncatedDescription !!}</p>
                                    <button style="margin-left:68%" type="button" class="btn heart-button" onclick="window.location.href='{{$sch->link}}'">Visit Scholarship</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        @endforeach 
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
         function filterCourses() {
            var searchText = document.getElementById("courseSearch").value.toLowerCase();
            var courseCards = document.querySelectorAll(".property_ads .card");

            courseCards.forEach(function (card) {
                var courseName = card.querySelector(".card-title").textContent.toLowerCase();
                if (courseName.includes(searchText)) {
                    card.closest(".property_ads").style.display = "block";
                } else {
                    card.closest(".property_ads").style.display = "none";
                }
            });
            if (searchText.trim() === "") {
                window.location.reload(); // Reload the page if the search field is empty
                return; // Exit the function early to prevent further execution
            }
        }


    </script>
</body>

</html>