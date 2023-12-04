<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Register | Admin </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.ico') }}">

        <!-- Bootstrap Css -->
        <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('backend/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body class="auth-body-bg">
        <div class="bg-overlay"></div>
        <div class="wrapper-page">
            <div class="p-0 container-fluid">
                <div class="card">
                    <div class="card-body">

                        <div class="mt-4 text-center">
                            <div class="mb-3">
                                <a href="index.html" class="auth-logo">
                                    <img src="{{ asset('backend/assets/images/logo-dark.png') }}" height="30" class="mx-auto logo-dark" alt="">
                                    <img src="{{ asset('backend/assets/images/logo-light.png') }}" height="30" class="mx-auto logo-light" alt="">
                                </a>
                            </div>
                        </div>

                        <h4 class="text-center text-muted font-size-18"><b>Register</b></h4>

                        <div class="p-3">

<form class="mt-3 form-horizontal" method="POST" action="{{ route('register') }}">
            @csrf

    <div class="mb-3 form-group row">
        <div class="col-12">
            <input class="form-control" id="name" type="text" name="name" required="" placeholder="Name">
        </div>
    </div>

    <div class="mb-3 form-group row">
        <div class="col-12">
            <input class="form-control" id="username" type="text" name="username" required="" placeholder="UserName">
        </div>
    </div>

     <div class="mb-3 form-group row">
        <div class="col-12">
            <input class="form-control" id="email" type="email" name="email" required="" placeholder="Email">
        </div>
    </div>

    <div class="mb-3 form-group row">
        <div class="col-12">
            <input class="form-control" id="password" type="password" name="password" required="" placeholder="Password">
        </div>
    </div>


     <div class="mb-3 form-group row">
        <div class="col-12">
            <input class="form-control" id="password_confirmation" type="password" name="password_confirmation" required="" placeholder="Password Confirmation">
        </div>
    </div>

    <div class="mb-3 form-group row">
        <div class="col-12">
            <div class="custom-control custom-checkbox">

            </div>
        </div>
    </div>

    {{-- <div class="mb-3 form-group row"">
        <div class="col-12">
            <label for="example-text-input" class="col-sm-12 col-form-label">Profile Image </label>
            <input name="profile_image" class="form-control" type="file"  id="image" >
        </div>
    </div>

    <div class="mb-3 row">
        <label for="example-text-input" class="col-sm-2 col-form-label">  </label>
       <div class="col-sm-10">
           <img id="showImage" class="rounded avatar-lg" src="{{ (!empty($editData->profile_image))? url('upload/admin_images/'.$editData->profile_image):url('upload/no_image.jpg') }}" alt="Card image cap">
       </div>
   </div> --}}

    <div class="pt-1 mt-3 text-center form-group row">
        <div class="col-12">
            <button class="btn btn-info w-100 waves-effect waves-light" type="submit">Register</button>
        </div>
    </div>

    <div class="mt-2 mb-0 form-group row">
        <div class="mt-3 text-center col-12">
            <a href="{{ route('login') }}" class="text-muted">Already have account?</a>
        </div>
    </div>
</form>
                            <!-- end form -->
                        </div>
                    </div>
                    <!-- end cardbody -->
                </div>
                <!-- end card -->
            </div>
            <!-- end container -->
        </div>
        <!-- end -->


        <!-- JAVASCRIPT -->
        <script src="{{ asset('backend/assets/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/node-waves/waves.min.js') }}"></script>

        <script src="{{ asset('backend/assets/js/app.js') }}"></script>

    </body>
</html>
