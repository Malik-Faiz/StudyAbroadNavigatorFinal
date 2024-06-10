<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <title>Universities</title>
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
       <!-- Bars -->
       <nav class="navBar py-sm-3 px-4 bg-white Shadow d-flex align-items-center fixed-top">
            <a class="navbar-brand CompanyLogo" href="#"> <img width="80" height="70" src="{{asset('assets-2/assets/images/logo/Logo-dark.svg')}}" /> </a>
                <b>Study</b><span><b class="text-primary">Abroad</b></span><b>Navigator</b>
            <div class="collapse navbar-collapse ps-3 h-100 justify-content-end" id="navbarSupportedContent">
                <button type="button" class="NavAncor-Acitve-reposive border-0 Nav-Hide ms-4 d-md-none py-1 px-2" onclick="NavHide()">
                    <svg class="expandbtn" width="18.484" height="13.092">
                        <use href="./assets/images/icons/toggle-svg.svg#toggle"></use>
                    </svg>
                </button>

                <ul class="navbar-nav mb-lg-0">
                    <li class="Users-profile nav-item dropdown">
                        <a class="nav-link d-flex" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="text-end d-none d-sm-block">
                                <p class="x-small mb-0">Admin</p>
                                <p class="text-dark mb-0">{{$user->first_name}} {{$user->last_name}}</p>
                            </div>
                            <img src="{{asset('assets/images/Adminpic1.png')}}" class="ms-3 ProfilePic" alt="" />
                        </a>
                        <ul class="dropdown-menu">
                            <li class="mb-2 p-2">
                                <a class="dropdown-item Profile-dropdown d-flex" href="#">
                                    <img src="{{asset('assets/images/Adminpic1.png')}}" class="me-3 ProfilePic" alt="" />
                                    <div class="text-start">
                                        <p class="x-small mb-0">{{$user->first_name}} {{$user->last_name}}</p>
                                        <p class="text-dark mb-0">Admin</p>
                                    </div>
                                </a>
                            </li>
                            <li><hr class="dropdown-divider" /></li>
                            <li class="mb-2 px-3"><a class="dropdown-item active" href="{{ route('profile.update', ['id' => $user->id]) }}" target="_blank">Update Profile</a></li>

                            <li class="mb-2 px-3"><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- NAVBAR END-->
    <!--side-bar-->
        <div class="side-menu Shadow-side-nav Animation" id="side-bar">
            <div class="overflow">
                <nav class="nav flex-column">
                    <ul class="list-unstyled">
                        <!-- Dashboard Div -->
                        <li class="nav-item px-3 mb-3">
                            <a class="btn nav-link p-2 Navigation-btn  w-100 Navigation-active text-start border-0 bg-transparent small-active" id="drop-icon-right1" href="{{ route('university') }}">
                                <svg class="Nav-svg" width="20" height="20">
                                <use href="{{asset('assets/images/icons/Navbar-icons/Ticket.svg#ticket-icon')}}"></use>
                                </svg>
                                <span class="hide-show Navigation-title mb-0 d-none">Universities</span>
                            </a>
                        </li>
                        <li class="nav-item px-3 mb-3">
                            <a class="btn nav-link p-2 Navigation-btn  w-100 text-start border-0 bg-transparent " id="drop-icon-right1" href="{{ route('dashboard') }}">
                                <svg class="Nav-svg" width="20" height="20">
                                    <use href="{{asset('assets/images/icons/Navbar-icons/Home-icon.svg#home-icon')}}"></use>
                                </svg>
                                <span class="hide-show Navigation-title mb-0 d-none">Course</span>
                            </a>
                        </li>
                        <!-- Reports Div -->

                        <li class="nav-item px-3 mb-3">
                            <a class="btn nav-link p-2 Navigation-btn w-100  text-start border-0 bg-transparent" id="drop-icon-right1" href="{{ route('scholarship') }}">
                                <svg class="Nav-svg" width="20" height="20">
                                    <use href="{{asset('assets/images/icons/Navbar-icons/Ticket.svg#ticket-icon')}}"></use>
                                </svg>
                                <span class="hide-show Navigation-title mb-0 d-none">ScholarShip</span>
                            </a>
                        </li>
                        <!-- Bootstrap Div -->
                        <li class="nav-item px-3 mb-3">
                            <a class="btn nav-link p-2 Navigation-btn w-100 text-start border-0 bg-transparent" id="drop-icon-right1" href="{{ route('jobs') }}">
                                <svg class="Nav-svg" width="20" height="20">
                                    <use href="{{asset('assets/images/icons/Navbar-icons/parking-attandent.svg#parkingattendent')}}"></use>
                                </svg>
                                <span class="hide-show Navigation-title mb-0 d-none">Jobs</span>                               
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!--*** BARS END ***-->

        <div class="page-wrapper px-3 px-md-4">
            <div class="row w-100 m-0 py-4 px-0 align-items-end Page-Heading">
                <div class="col-6 ps-0">
                    <h4 class="mb-0">Universities</h4>
                </div>
                <div class="col-6 pe-0">
                    <p class="mb-0 text-end d-sm-block d-none">
                            <svg class="Tab-HomeIcon mb-1">
                                <use href="{{ asset('assets/images/Tabs-icons/userslist.svg#userslist')}}"></use>
                            </svg>
                            Universities
                    </p>
                </div>
            </div>

            <div class="container-fluid mt-1 bg-white card-Shadow rounded-2 px-0">
                <div class="d-flex justify-content-between flex-wrap align-items-center p-4 pb-0">
                    <div class="input mb-3">
                        <input type="text" id="searchInput" class="search-box ps-3 py-1" placeholder="Please Enter" aria-label="Recipient's username" aria-describedby="button-addon2" />
                        <button class="btn bg-primary" type="button" id="searchButton" aria-label="Search" aria-describedby="button-addon2">
                            <span>
                                <svg class="SearchIcon mb-1">
                                    <use href="{{ asset('assets/images/listing/search-icon.svg#search-icon')}}"></use>
                                </svg>
                            </span>
                        </button>
                    </div>
                    <div class="mb-3 d-flex flex-wrap gap-2">
                        <button type="button" class="btn btn-primary px-3 py-2" data-bs-toggle="modal"
                        data-bs-target="#createticket">
                            <svg  class="PlusIcon">
                                <use href="{{ asset('assets/images/listing/plus.svg#plus-icon')}}"></use>
                            </svg>
                            Add University
                        </button>
                    </div>
                </div>
                       <!-- model -->
            <div class="modal fade" id="createticket" tabindex="-1" aria-labelledby="staticBackdropLabel"
            style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                    <div class="modal-header p-4">
                        <h5 class="modal-title" id="staticBackdropLabel">Create University</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-4 pb-0">
                        <div class="row g-3">
                            <div class="col-lg-6 col-md-6 col-12">
                        <form method="POST" action="{{ route('universities.store') }}" enctype="multipart/form-data">
                                 @csrf
                              
                                <label class="form-label mb-1">University Name</label>
                                <input type="text" name="name" id="name" required class="form-control mb-1 border-0 bg-body"
                                    placeholder="Please Enter">
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <label class="form-label mb-1">Universty Address</label>
                                <input type="text" name="address" id="address" required class="form-control mb-1 border-0 bg-body"
                                    placeholder="Please Enter">
                            </div>    
                            <div class="col-lg-6 col-md-6 col-12">
                                <label class="form-label mb-1">Campus</label>
                                <input type="text" name="campus" id="campus" required class="form-control mb-1 border-0 bg-body"
                                    placeholder="Please Enter">
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                            <label class="form-label text-dark mb-1">Upload Image</label>
                            <div class="d-flex gap-2">
                                <div class="">
                                    <label class="btn upload-img-container btn-file border-0 p-3 position-relative">
                                        <div class="uploadFile d-flex justify-content-center align-items-center">
                                            <img src="{{ asset('assets/images/upload-img.png')}}" height="54" width="54" id="image-preview" alt="Image Preview">
                                        </div>
                                        <input type="file" name="image" id="image" class="d-none" required="" onchange="previewImage(event)">
                                    </label>
                            
                                    </div>
                                    <div class="image-containers d-flex gap-3 flex-wrap position-relative">
                                        <div class="upload-property-image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-0">
                                <label class="form-label mb-1">University link</label>
                                <input type="text" name="university_link" id="university_link" class="form-control mb-1 border-0 bg-body">
                            </div>
                            <div class="col-12 mt-0">
                                <label class="form-label mb-1">Contact No</label>
                                <input type="text" name="contact_no" id="contact_no" required class="form-control mb-1 border-0 bg-body">
                            </div>
                           
                        </div>
                    </div>
                    <div class="modal-footer border-0 p-4 pt-0">
                        <button class="btn btn-light-light me-2" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form> 
                </div>
            </div>
        </div>
                <div class="table-responsive p-4 pe-2 pt-0" style="height: 60vh">
                    <table class="table Search-Employees table-borderless table-striped table-hover">
                        <thead class="Employees-border sticky-top bg-white" style="z-index: 1 !important">
                            <tr class="small">
                                <th scope="col" class="pb-3 ps-4 dashed-border-bottom">#</th>
                                <th scope="col" class="pb-3 dashed-border-bottom" style="min-width: 150px">University Logo</th>
                                <th scope="col" class="pb-3 dashed-border-bottom" style="min-width: 150px">University Name</th>
                                <th scope="col" class="pb-3 dashed-border-bottom" style="min-width: 150px">Address</th>
                                <th scope="col" class="pb-3 dashed-border-bottom" style="min-width: 100px">Campus</th>
                                <th scope="col" class="pb-3 dashed-border-bottom" style="min-width: 100px">Contact No</th>
                                <th scope="col" class="pb-3 dashed-border-bottom" style="min-width: 100px">University Link</th>
                                <th scope="col" class="pb-3 text-end dashed-border-bottom">Action</th>
                            </tr>
                        </thead>
                        @foreach($universities as $university)
                        <tbody class="small">
                            <tr class="mt-4">
                                <th scope="row" class="ps-4 pe-2">{{ $loop->iteration }}</th>
                                    @if($university->image)
                                        <td><img src="{{ asset($university->image) }}" alt="{{ $university->name }}" style="width: 50px; height: 50px;"></td>

                                    @endif
                                
                                <td>{{ $university->name }}</td>
                                <td>{{ $university->address }}</td>
                                <td>{{ $university->campus }}</td>
                                <td>{{ $university->contact_no }}</td>
                                <td><a href="{{ $university->university_link }}">{{ $university->university_link }}</a></td>
                                <td class="d-flex justify-content-evenly">
                                <button class="btn btn-light-success d-flex justify-content-center align-items-center border-0 px-2 edit-btn" data-bs-toggle="modal" data-bs-target="#editUniversityModal{{ $university->id }}">
                                    <svg class="svg-light-btn m-0" width="14" height="14">
                                        <use href="{{ asset('assets/images/listing/edit-pen.svg#edit-icon')}}"></use>
                                    </svg>
                                </button>

                                <!-- Edit University Modal -->
                                <div class="modal fade" id="editUniversityModal{{ $university->id }}" tabindex="-1" aria-labelledby="editUniversityModalLabel{{ $university->id }}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editUniversityModalLabel{{ $university->id }}">Edit University</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Form for editing university details -->
                                                <form method="POST" action="{{ route('university.update', $university->id) }}" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <!-- University details inputs -->
                                                    <div class="mb-3">
                                                        <label for="name" class="form-label">University Name</label>
                                                        <input type="text" class="form-control" id="name" name="name" value="{{ $university->name }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="address" class="form-label">University Address</label>
                                                        <input type="text" class="form-control" id="address" name="address" value="{{ $university->address }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="campus" class="form-label">Campus</label>
                                                        <input type="text" class="form-control" id="campus" name="campus" value="{{ $university->campus }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="university_link" class="form-label">University Link</label>
                                                        <input type="text" class="form-control" id="university_link" name="university_link" value="{{ $university->university_link }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="contact_no" class="form-label">Contact No</label>
                                                        <input type="text" class="form-control" id="contact_no" name="contact_no" value="{{ $university->contact_no }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="image" class="form-label">Current University Image</label>
                                                        @if($university->image)
                                                            <img src="{{ asset($university->image) }}" alt="University Image" style="max-width: 50px;">
                                                        @else
                                                            <p>No image available</p>
                                                        @endif
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="new_image" class="form-label">New University Image</label>
                                                        <input type="file" class="form-control" id="new_image" name="new_image">
                                                    </div>
                                                    
                                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <button class="btn btn-light-danger d-flex justify-content-center align-items-center border-0 px-2" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $university->id }}">
                                        <svg class="svg-light-btn m-0" width="14" height="14">
                                            <use href="{{ asset('assets/images/listing/delete.svg#delete-icon')}}"></use>
                                        </svg>
                                    </button>

                                    <!-- Delete Modal -->
                                    <div class="modal fade" id="deleteModal{{ $university->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $university->id }}" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteModalLabel{{ $university->id }}">Delete University</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure you want to delete {{ $university->name }}?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <form action="{{ route('university.destroy', $university->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="dropdown-menu border-0 Shadow" style="font-size: 10px; min-width: 73px !important">
                                        <li><a class="dropdown-item dropdown-menu-hover" href="#">Action</a></li>
                                        <li><a class="dropdown-item dropdown-menu-hover" href="#">Action</a></li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    @endforeach
                    </table>
                </div>
               

            </div>
        </div>
        <script src="{{ asset('assets/js/jquery-3.6.3.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>
        <script src="{{ asset('assets/js/Toggels.js') }}"></script>

        <script>
            $("#some-menu").load("./navbars.html");
        </script>
        <script>
            function previewImage(event) {
                const input = event.target;
                const reader = new FileReader();
                reader.onload = function(){
                    const dataURL = reader.result;
                    const imagePreview = document.getElementById('image-preview');
                    imagePreview.src = dataURL;
                };
                reader.readAsDataURL(input.files[0]);
            }
        
            $(document).ready(function() {
                $('#searchButton').click(function() {
                    var searchText = $('#searchInput').val().toLowerCase();
                    $('.Search-Employees tbody tr').each(function() {
                        var rowText = $(this).text().toLowerCase();
                        if (rowText.includes(searchText)) {
                            $(this).show();
                        } else {
                            $(this).hide();
                        }
                    });
                });
            });
        </script>


    </body>
</html>
