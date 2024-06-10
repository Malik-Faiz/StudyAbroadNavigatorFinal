<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Forget Password</title>
    <!-- ************======((( STYLESHEETS FILES)))======********** -->
    <link rel="stylesheet" href="{{ asset('assets-2/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets-2/assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets-2/assets/css/select2.css') }}" />
</head>

<body>

    <div class="row m-0" style="height: 100vh;">
        <div class="col-lg-6 d-none d-lg-block login-bg">
            <div class="">
                <div class="mt-5 text-center">
                    <img src="./assets-2/assets/images/login-body.png" class="object-fit-contain my-5" alt="" />
                </div>
                <div class="text-center text-white my-4 px-3">
                    <h3 class="fw-bold mb-5">Reset Your Password</h3>
                    <p class="small mb-5">Enter your email address to receive a randomly generated password.</p>
                </div>
            </div>
        </div>

        <div class="col-md-6 p-sx-5">
            <div class="py-5 text-center">
                <h2 class="mb-0">FORGET PASSWORD</h2>
                <p class="small">Remember your password? <span> <a href="./login" class="text-danger">Sign in</a></span></p>
            </div>
            @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ route('randompassword') }}" class="p-sm-5 p-3 p-lg-5 pt-sm-5 pt-0">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label regular small">Email address</label>
                    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="Please Enter Email Address" required>
                </div>
                <div class="d-flex justify-content-evenly align-items-center pt-5 mt-3">
                    <button type="submit" class="btn btn-danger px-5 w-75 text-white">Send Request</button>
                </div>
            </form>
        </div>
    </div>
    <script src="./assets-2/assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets-2/assets/js/jquery-3.6.3.min.js"></script>
    <script src="./assets-2/assets/js/main.js"></script>
    <script src="./assets-2/assets/js/select2.min.js"></script>

</body>

</html>
