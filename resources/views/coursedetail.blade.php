<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Course</title>
    <!-- ********======(((   CSS  )))======******** -->
    <link href="{{ asset('assets-2/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets-2/assets/css/style.css') }}" />
</head>

<body class="position-relative bg-light">
    <nav class="navbar navbar-expand-lg white-navbar fixed-top">
        <div class="container-xxl">
            <a class="navbar-brand ps-0 ps-lg-4 me-0" href="#"><img src="{{ asset('assets-2/assets/images/logo/Logo-dark.svg') }}" class="brandImg " />
                <b>Study</b><span><b class="text-primary">Abroad</b></span><b>Navigator</b>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto nav-links align-items-center">
                    <li class="nav-item pe-0 pe-lg-2">
                        <a class="nav-link" aria-current="page" href="../">Home
                            <span class="bottom-border"></span>
                        </a>
                    </li>
                    <li class="nav-item pe-0 pe-lg-2">
                        <a class="nav-link active" href="../course">Courses
                            <span class="bottom-border"></span>
                        </a>
                    </li>
                    <li class="nav-item pe-0 pe-lg-2">
                        <a class="nav-link" href="../scholarship">Scholarship
                            <span class="bottom-border"></span>
                        </a>
                    </li>
                    <li class="nav-item pe-0 pe-lg-2">
                        <a class="nav-link" href="../job">Jobs
                            <span class="bottom-border"></span>
                        </a>
                    </li>
                    <li class="nav-item pe-0 pe-lg-2">
                        <a class="nav-link " href="{{ route('guide') }}">Guide
                            <span class="bottom-border"></span>
                        </a>
                    </li>
                    <li class="nav-item pe-0 pe-lg-2">
                        <a class="nav-link" href="../contact">Contact
                            <span class="bottom-border"></span>
                        </a>
                    </li>
                    @if ($user === "")
                <li class="nav-item pe-2 pe-lg-2">
                    <a class="nav-link btn btn-gradiant text-white px-3 mb-3 mb-md-0" href="../login">Login</a>
                </li>
                <li class="nav-item pe-0 pe-lg-2">
                    <a class="nav-link btn btn-gradiant text-white px-3" href="../signup">Register</a>
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
                        <a class="nav-link " href="../wishlist">Wishlist
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

    <div class="container position-relative mt-5">
        <div class="row g-3 my-3">
            <div class="col-lg-8 mt-5">
                <h4 class="my-3">Course</h4>
            </div>
        </div>
        <div class="row g-3 mb-3">
            <!------------ ************======((( IMG SLDIER )))======********** ----------->
            <div class="col-12">
                <div class="container position-relative rounded-1 p-0" >
                    <div class="suite-img-slider bg-transparent" style="border-radius: 5px">
                        <!-- ************======((( FULL- WIDTH IMGES WITH NUMBER TEXT)))======********** -->
                        <div class="mySlides position-relative" >
                                 @if($course->id % 5 == 1)
                                    <img class="object-fit-cover" src="{{ asset('Course.jpg') }}" style="object-fit: cover; width: 100%; border-radius: 5px 5px 0 0; height: 300px" >
                                @elseif($course->id % 5 == 2)
                                    <img class="object-fit-cover" src="{{ asset('Course3.jpg') }}" style="object-fit: cover; width: 100%; border-radius: 5px 5px 0 0; height: 300px" >
                                @elseif($course->id % 5 == 3)
                                    <img class="object-fit-cover" src="{{ asset('Course2.jpg') }}" style="object-fit: cover; width: 100%; border-radius: 5px 5px 0 0; height: 300px" >
                                @elseif($course->id % 5 == 4)
                                    <img class="object-fit-cover" src="{{ asset('Course4.jpg') }}" style="object-fit: cover; width: 100%; border-radius: 5px 5px 0 0; height: 300px" >
                                @elseif($course->id % 5 == 5)
                                    <img class="object-fit-cover" src="{{ asset('Course5.jpg') }}" style="object-fit: cover; width: 100%; border-radius: 5px 5px 0 0; height: 300px" >


                                @endif
                           
                            
                            <div class="shadow-overlay-details"></div>
                        </div>
                    </div>
                </div>
                <!-- ************======(((PROPERTY DESCRIPTION)))======********** -->
                <div class="rounded-3 Property-highlights  bg-white shadow">
                    <div class="border-bottom p-3">
                        <h4 class=" "><b>{{$course->university->name}}</b></h4>
                        <!-- <p class="mb-2">
                            <span><img class="mb-1 me-1" src="{{asset('assets-2/assets/images/icons/location.png')}}" alt="" /></span>
                            
                        </p> -->
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="d-flex flex-wrap p-3 ">
                            <svg class="me-2 mt-1" width="16" height="16" viewBox="0 0 14 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="h-4 w-4">
                                    <path d="M5 11.5H12C12.275 11.5 12.5 11.275 12.5 11V4H11C10.4469 4 10 3.55312 10 3V1.5H5C4.725 1.5 4.5 1.725 4.5 2V11C4.5 11.275 4.725 11.5 5 11.5ZM12 13H5C3.89687 13 3 12.1031 3 11V2C3 0.896875 3.89687 0 5 0H10.1719C10.7031 0 11.2125 0.209375 11.5875 0.584375L13.4156 2.4125C13.7906 2.7875 14 3.29688 14 3.82812V11C14 12.1031 13.1031 13 12 13ZM0.75 3C1.16562 3 1.5 3.33437 1.5 3.75V11.75C1.5 13.2688 2.73125 14.5 4.25 14.5H10.25C10.6656 14.5 11 14.8344 11 15.25C11 15.6656 10.6656 16 10.25 16H4.25C1.90313 16 0 14.0969 0 11.75V3.75C0 3.33437 0.334375 3 0.75 3Z" fill="#424242"></path>
                                </svg>
                                <div class="">
                                    <p class="small mb-1"><b>Course Name</b></p>
                                    <p class="mb-0"> {{$course->course_name}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="d-flex flex-wrap p-3 ">
                                <svg class="me-2 mt-1" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="h-4 w-4">
                                    <path
                                        d="M13.6875 8C13.6875 9.50842 13.0883 10.9551 12.0217 12.0217C10.9551 13.0883 9.50842 13.6875 8 13.6875C6.49158 13.6875 5.04494 13.0883 3.97833 12.0217C2.91172 10.9551 2.3125 9.50842 2.3125 8C2.3125 6.49158 2.91172 5.04494 3.97833 3.97833C5.04494 2.91172 6.49158 2.3125 8 2.3125C9.50842 2.3125 10.9551 2.91172 12.0217 3.97833C13.0883 5.04494 13.6875 6.49158 13.6875 8ZM1 8C1 9.85652 1.7375 11.637 3.05025 12.9497C4.36301 14.2625 6.14348 15 8 15C9.85652 15 11.637 14.2625 12.9497 12.9497C14.2625 11.637 15 9.85652 15 8C15 6.14348 14.2625 4.36301 12.9497 3.05025C11.637 1.7375 9.85652 1 8 1C6.14348 1 4.36301 1.7375 3.05025 3.05025C1.7375 4.36301 1 6.14348 1 8ZM7.34375 4.28125V8C7.34375 8.21875 7.45312 8.42383 7.63633 8.54688L10.2613 10.2969C10.5621 10.4992 10.9695 10.4172 11.1719 10.1137C11.3742 9.81016 11.2922 9.40547 10.9887 9.20312L8.65625 7.65V4.28125C8.65625 3.91758 8.36367 3.625 8 3.625C7.63633 3.625 7.34375 3.91758 7.34375 4.28125Z"
                                        fill="#424242"></path>
                                </svg>
                                <div class="">
                                    <p class="small mb-1"><b>Pace</b></p>
                                    <p class="mb-0">{{$course->pace}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="d-flex flex-wrap p-3 ">
                                <svg class="me-2 mt-1" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="h-4 w-4">
                                    <path
                                        d="M13.6875 8C13.6875 9.50842 13.0883 10.9551 12.0217 12.0217C10.9551 13.0883 9.50842 13.6875 8 13.6875C6.49158 13.6875 5.04494 13.0883 3.97833 12.0217C2.91172 10.9551 2.3125 9.50842 2.3125 8C2.3125 6.49158 2.91172 5.04494 3.97833 3.97833C5.04494 2.91172 6.49158 2.3125 8 2.3125C9.50842 2.3125 10.9551 2.91172 12.0217 3.97833C13.0883 5.04494 13.6875 6.49158 13.6875 8ZM1 8C1 9.85652 1.7375 11.637 3.05025 12.9497C4.36301 14.2625 6.14348 15 8 15C9.85652 15 11.637 14.2625 12.9497 12.9497C14.2625 11.637 15 9.85652 15 8C15 6.14348 14.2625 4.36301 12.9497 3.05025C11.637 1.7375 9.85652 1 8 1C6.14348 1 4.36301 1.7375 3.05025 3.05025C1.7375 4.36301 1 6.14348 1 8ZM7.34375 4.28125V8C7.34375 8.21875 7.45312 8.42383 7.63633 8.54688L10.2613 10.2969C10.5621 10.4992 10.9695 10.4172 11.1719 10.1137C11.3742 9.81016 11.2922 9.40547 10.9887 9.20312L8.65625 7.65V4.28125C8.65625 3.91758 8.36367 3.625 8 3.625C7.63633 3.625 7.34375 3.91758 7.34375 4.28125Z"
                                        fill="#424242"></path>
                                </svg>
                                <div class="">
                                    <p class="small mb-1"><b>Course Duration</b></p>
                                    <p class="mb-0">{{$course->course_duration}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="d-flex flex-wrap p-3 ">
                                <svg class="me-2 mt-1" width="14" height="14" viewBox="0 0 14 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="h-4 w-4">
                                    <path
                                        d="M6.99974 12.6331C7.20016 12.6331 7.73099 12.4381 8.28891 11.3222C8.52724 10.8429 8.73307 10.2606 8.88474 9.59974H5.11474C5.26641 10.2606 5.47224 10.8429 5.71057 11.3222C6.26849 12.4381 6.79932 12.6331 6.99974 12.6331ZM4.90078 8.29974H9.0987C9.14203 7.88536 9.16641 7.44932 9.16641 6.99974C9.16641 6.55016 9.14203 6.11411 9.0987 5.69974H4.90078C4.85745 6.11411 4.83307 6.55016 4.83307 6.99974C4.83307 7.44932 4.85745 7.88536 4.90078 8.29974ZM5.11474 4.39974H8.88474C8.73307 3.73891 8.52724 3.15661 8.28891 2.67724C7.73099 1.56141 7.20016 1.36641 6.99974 1.36641C6.79932 1.36641 6.26849 1.56141 5.71057 2.67724C5.47224 3.15661 5.26641 3.73891 5.11474 4.39974ZM10.4041 5.69974C10.4447 6.11953 10.4637 6.55557 10.4637 6.99974C10.4637 7.44391 10.442 7.87995 10.4041 8.29974H12.4814C12.5789 7.88266 12.6331 7.44661 12.6331 6.99974C12.6331 6.55286 12.5816 6.11682 12.4814 5.69974H10.4068H10.4041ZM11.9966 4.39974C11.417 3.28661 10.4772 2.39286 9.33161 1.87016C9.71349 2.56349 10.0168 3.42745 10.2145 4.39974H11.9993H11.9966ZM3.78224 4.39974C3.97995 3.42745 4.28328 2.5662 4.66516 1.87016C3.51953 2.39286 2.57974 3.28661 2.00016 4.39974H3.78495H3.78224ZM1.51807 5.69974C1.42057 6.11682 1.36641 6.55286 1.36641 6.99974C1.36641 7.44661 1.41786 7.88266 1.51807 8.29974H3.59536C3.55474 7.87995 3.53578 7.44391 3.53578 6.99974C3.53578 6.55557 3.55745 6.11953 3.59536 5.69974H1.51807ZM9.33161 12.1293C10.4772 11.6066 11.417 10.7129 11.9966 9.59974H10.2145C10.0168 10.572 9.71349 11.4333 9.33161 12.1293ZM4.66786 12.1293C4.28599 11.436 3.98266 10.572 3.78495 9.59974H2.00016C2.57974 10.7129 3.51953 11.6066 4.66516 12.1293H4.66786ZM6.99974 13.9331C5.16091 13.9331 3.39738 13.2026 2.09713 11.9023C0.79688 10.6021 0.0664063 8.83857 0.0664062 6.99974C0.0664063 5.16091 0.79688 3.39738 2.09713 2.09713C3.39738 0.79688 5.16091 0.0664063 6.99974 0.0664062C8.83857 0.0664063 10.6021 0.79688 11.9023 2.09713C13.2026 3.39738 13.9331 5.16091 13.9331 6.99974C13.9331 8.83857 13.2026 10.6021 11.9023 11.9023C10.6021 13.2026 8.83857 13.9331 6.99974 13.9331Z"
                                        fill="#424242"></path>
                                </svg>
                                <div class="d-flex flex-wrap gap-2 align-items-center justify-content-between">
                                    <p class="small mb-1"><b>Course Link</b></p>
                                    <p class="mb-0" style="margin:3%;"><a href="{{$course->link}}"><b>Visit Link</b></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="d-flex flex-wrap p-3 ">
                                <svg class="me-2 mt-1" width="16" height="16" viewBox="0 0 14 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="h-4 w-4">
                                    <path
                                        d="M12.6875 7C12.6875 5.49158 12.0883 4.04494 11.0217 2.97833C9.95506 1.91172 8.50842 1.3125 7 1.3125C5.49158 1.3125 4.04494 1.91172 2.97833 2.97833C1.91172 4.04494 1.3125 5.49158 1.3125 7C1.3125 8.50842 1.91172 9.95506 2.97833 11.0217C4.04494 12.0883 5.49158 12.6875 7 12.6875C8.50842 12.6875 9.95506 12.0883 11.0217 11.0217C12.0883 9.95506 12.6875 8.50842 12.6875 7ZM0 7C0 5.14348 0.737498 3.36301 2.05025 2.05025C3.36301 0.737498 5.14348 0 7 0C8.85652 0 10.637 0.737498 11.9497 2.05025C13.2625 3.36301 14 5.14348 14 7C14 8.85652 13.2625 10.637 11.9497 11.9497C10.637 13.2625 8.85652 14 7 14C5.14348 14 3.36301 13.2625 2.05025 11.9497C0.737498 10.637 0 8.85652 0 7ZM7.56875 3.65313V4.04141C7.83398 4.07422 8.09922 4.14805 8.36172 4.22187C8.41367 4.23555 8.46289 4.24922 8.51484 4.26562C8.8293 4.35313 9.01523 4.67852 8.92773 4.99297C8.84023 5.30742 8.51484 5.49062 8.20039 5.40586C8.15664 5.39492 8.11563 5.38125 8.07188 5.37031C7.88047 5.31562 7.68906 5.26367 7.49492 5.22539C7.13398 5.15703 6.71563 5.18984 6.3793 5.33477C6.07852 5.46602 5.82969 5.7832 6.17148 6.00195C6.43945 6.17422 6.76758 6.26172 7.0793 6.34648C7.14492 6.36289 7.20781 6.38203 7.2707 6.39844C7.69727 6.51875 8.24141 6.67461 8.64883 6.95352C9.1793 7.31719 9.42813 7.90781 9.31055 8.54219C9.19844 9.15469 8.77188 9.55664 8.26055 9.76445C8.04727 9.85195 7.81484 9.90664 7.57148 9.93398V10.3496C7.57148 10.675 7.30625 10.9402 6.98086 10.9402C6.65547 10.9402 6.39023 10.675 6.39023 10.3496V9.87383C5.99375 9.78359 5.60547 9.65781 5.21992 9.53203C4.91094 9.43086 4.74141 9.09453 4.84531 8.78555C4.94922 8.47656 5.28281 8.30703 5.5918 8.41094C5.66016 8.43281 5.72852 8.45742 5.79688 8.4793C6.10586 8.5832 6.42305 8.68984 6.74023 8.7418C7.20508 8.81016 7.57695 8.76914 7.82031 8.6707C8.14844 8.53945 8.3043 8.14844 7.98164 7.92969C7.70547 7.74102 7.36367 7.64805 7.03828 7.56055C6.97539 7.54414 6.91523 7.52773 6.85234 7.50859C6.43945 7.39102 5.92266 7.24609 5.53437 6.99727C5.00117 6.65547 4.73047 6.08672 4.84531 5.45508C4.95469 4.85898 5.41953 4.4625 5.91172 4.24922C6.06211 4.18359 6.22344 4.13164 6.39023 4.09336V3.65313C6.39023 3.32773 6.65547 3.0625 6.98086 3.0625C7.30625 3.0625 7.57148 3.32773 7.57148 3.65313H7.56875Z"
                                        fill="#424242"></path>
                                </svg>
                                <div class="">
                                    <p class="small mb-1"><b>Tuition Fee</b></p>
                                    <p class="mb-0">{{$course->tuition_fee}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="d-flex flex-wrap p-3 ">
                                <svg class="me-2 mt-1" width="16" height="16" viewBox="0 0 14 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="h-4 w-4">
                                    <path d="M5 11.5H12C12.275 11.5 12.5 11.275 12.5 11V4H11C10.4469 4 10 3.55312 10 3V1.5H5C4.725 1.5 4.5 1.725 4.5 2V11C4.5 11.275 4.725 11.5 5 11.5ZM12 13H5C3.89687 13 3 12.1031 3 11V2C3 0.896875 3.89687 0 5 0H10.1719C10.7031 0 11.2125 0.209375 11.5875 0.584375L13.4156 2.4125C13.7906 2.7875 14 3.29688 14 3.82812V11C14 12.1031 13.1031 13 12 13ZM0.75 3C1.16562 3 1.5 3.33437 1.5 3.75V11.75C1.5 13.2688 2.73125 14.5 4.25 14.5H10.25C10.6656 14.5 11 14.8344 11 15.25C11 15.6656 10.6656 16 10.25 16H4.25C1.90313 16 0 14.0969 0 11.75V3.75C0 3.33437 0.334375 3 0.75 3Z" fill="#424242"></path>
                                </svg>
                                <div class="">
                                    <p class="small mb-1"><b>Study Mode</b></p>
                                    <p class="mb-0">{{$course->study_type}}</p>
                                </div>
                            </div>
                        </div>
                  
                    </div>
                    <div style="margin:3% 3% 0% 3% " class="justify-content-between>
                            <p class="small mb-1"><b>Course Description</b></p>
                            <p class="mb-0">{{$course->description}}</p>
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