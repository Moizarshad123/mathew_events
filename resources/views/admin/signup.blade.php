<!DOCTYPE html>
<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ asset('admin/assets') }}" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Register - {{env('APP_NAME')}}</title>

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/fonts/boxicons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/css/core.css') }}"
        class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/css/theme-default.css') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/css/pages/page-auth.css') }}" />
    <!-- Helpers -->
    <script src="{{ asset('admin/assets/vendor/js/helpers.js') }}"></script>
    <script src="{{ asset('admin/assets/js/config.js')}}"></script>

</head>

<body class="hold-transition login-page">
    <!-- Content -->

    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <!-- Register -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center">
                            <a href="{{ url('login') }}" class="app-brand-link gap-2">

                                <span class="app-brand-text demo text-body fw-bolder">Best Meeting Venues</span>
                            </a>
                        </div>
                        <!-- /Logo -->
                        <p class="mb-4">Please sign-in to your account and start the adventure</p>

                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form action="{{route('admin.register')}}" method="POST" id="formAuthentication" class="mb-3">
                            @csrf
                       
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" autofocus />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" />
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" />
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone" />
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Organization Type</label>
                                <input type="text" class="form-control" id="organization_type" name="organization_type" />
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Organization Name</label>
                                <input type="text" class="form-control" id="organization_name" name="organization_name" />
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Country</label>
                                <input type="text" class="form-control" id="country" name="country" />
                            </div>

                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="" class="form-label">State</label>
                                        <input type="text" class="form-control" id="state" name="state" />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="form-label">Zip</label>
                                        <input type="text" class="form-control" id="zip" name="zip" />
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 form-password-toggle">

                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control" name="password"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary d-grid w-100" type="submit">Sign Up</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /Register -->
            </div>
        </div>
    </div>

    <!-- / Content -->



    <!-- Core JS -->
    <script src="{{ asset('admin/assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('admin/assets/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Main JS -->
    <script src="{{ asset('admin/assets/js/main.js')}}"></script>
</body>

</html>
