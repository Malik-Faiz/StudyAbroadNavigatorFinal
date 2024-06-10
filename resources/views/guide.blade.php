<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>scholerShip</title>
    <!-- ********======(((   CSS  )))======******** -->
    <link href="{{ asset('assets-2/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets-2/assets/css/style.css') }}" />

    <style>

    .custom-div {
        background: linear-gradient(to bottom right, #ff7e5f, #f0b81a); /* Define the gradient */
    }
    </style>
</head>

<body class="position-relative bg-light">
    
<div>
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
                        <a class="nav-link active" href="{{ route('guide') }}">Guide
                            <span class="bottom-border"></span>
                        </a>
                    </li>
                    <li class="nav-item pe-0 pe-lg-2">
                        <a class="nav-link " href="{{ route('contact') }}">Contact
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

    </div>




<div class="custom-div">
    <div class="container position-relative mt-5">
        <div class="row g-3 my-3">
            <div class="col-lg-8 mt-5">
                <h4 class="my-3">Guide</h4>


            </div>

        </div>
        <div class="row g-3 mb-3">
            <!------------ ************======((( IMG SLDIER )))======********** ----------->
          
            <div class="col-lg-12 mt-4 mt-lg-0">
    <div class="bg-white rounded-2 card-Shadow">
        <div class="border-bottom">
            <div class="d-flex flex-wrap justify-content-between align-items-center px-4 py-3 gap-3">
                <h5 class="mb-0 text-dark">Guide</h5>
            </div>
        </div>

        <div class="accordion accordion-design-2 mt-4 p-3" id="accordionExample2">
            <div class="accordion-item rounded-1 border-1">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button rounded-1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsedemo-2-1" aria-expanded="false" aria-controls="collapseOne2-1">
                        <span>Prepare Documents for Studying Abroad</span>
                    </button>
                </h2>
                <div id="collapsedemo-2-1" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample2" >
                    <div class="accordion-body text-light-color"><b>Educational Documents:</b> Gather all your educational transcripts, certificates, and diplomas. <br><br> <b>Language Proficiency Tests:</b> Depending on the destination country, you may need to provide scores from tests like TOEFL or IELTS. <br><br> <b>Passport and Visa:</b> Ensure your passport is valid and apply for a student visa for your chosen country. <br><br> <b>Financial Documents:</b> Prepare proof of funds to cover tuition fees, living expenses, and other costs. <br><br> <b>Health Records:</b> Obtain any required medical certificates or vaccination records.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button rounded-1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsedemo2-2" aria-expanded="false" aria-controls="collapseTwo2-2">
                        <span>Steps to Apply for Universities Abroad</span>
                    </button>
                </h2>
                <div id="collapsedemo2-2" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample2">
                    <div class="accordion-body text-light-color"><b>Research:</b> Explore universities and programs that align with your academic interests and career goals. <br><br> <b>Prepare Application Materials:</b> Complete application forms, write personal statements, and gather recommendation letters. <br><br> <b>Submit Applications:</b> Send your applications to the universities of your choice before the deadlines. <br><br> <b>Wait for Offers:</b> Wait for admission decisions from the universities, which may include offers of acceptance or conditional offers. <br><br> <b>Accept Offer and Pay Deposit:</b> Once you receive an offer, accept it and pay any required deposits to secure your place.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button rounded-1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsedemo2-3" aria-expanded="false" aria-controls="collapseThree2-3">
                        <span>Embassy Process and Visa Application</span>
                    </button>
                </h2>
                <div id="collapsedemo2-3" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample2" >
                    <div class="accordion-body text-light-color"><b>Receive Offer Letter:</b> After accepting an offer from a university, you'll receive an offer letter confirming your admission. <br><br> <b>Visa Application:</b> Begin the visa application process by gathering required documents, such as the offer letter, financial proof, and passport. <br><br> <b>Schedule Embassy Appointment:</b> Schedule an appointment at the embassy or consulate of the destination country for a visa interview. <br><br> <b>Attend Visa Interview:</b> Attend the visa interview and provide all necessary documents and information. <br><br> <b>Receive Visa:</b> If approved, you'll receive your student visa, allowing you to travel to the destination country for your studies.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button rounded-1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsedemo2-4">
                        <span>Cost of Extended Study Abroad Programs</span>
                    </button>
                </h2>
                <div id="collapsedemo2-4" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample2" >
                    <div class="accordion-body text-light-color">The cost of extended study abroad programs varies depending on factors such as the duration of the program, the country of study, and the specific program requirements. Extended programs may include additional fees for housing, meals, travel, and other expenses. It's essential to review the program details and budget accordingly for all associated costs.</div>
                </div>
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
    <script src="{{asset('assets-2/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets-2/assets/js/jquery-3.6.3.min.js')}}"></script>
    <script src="{{asset('assets-2/assets/js/main.js')}}"></script>
    <script>
    </script>
</body>
</html>