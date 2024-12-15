<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .btn-custom {
            background-color: #28a745;
            color: white;
            transition: 0.3s;
        }

        .btn-custom:focus{
            box-shadow: none;
        }

        .btn-custom:hover {
            background-color: #4CAF50;
            color: white;
        }

        .card {
            border: none;
            border-radius: 1rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-control:focus {
            box-shadow: none;
            border-color: rgb(59, 153, 75)
        }
    </style>
</head>

<body>
    <section class="vh-100" style="background: url('{{ asset('images/forest.png') }}') no-repeat center center ">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-12 col-lg-5 d-none d-md-block">
                                <img src="https://www.ecolabel.net/images/eco-label-nedir.jpg"
                                    alt="login form" class="img-fluid"
                                    style="border-radius: 1rem 0 0 1rem; width: 100%; height: 100%; object-fit: cover; object-position: center;" />
                            </div>
                            <div class="col-md-12 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form method="POST" action="{{ route('register.submit') }}">
                                        @csrf

                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <span class="h1 fw-bold mb-0">Register Account</span>
                                        </div>

                                        <div class="form-outline mb-3">
                                            <div class="row">
                                                <div class="col-12 col-md-6">
                                                    <label class="form-label" for="form2FirstName"
                                                        style="margin-bottom: 0;">First Name</label>
                                                    <input type="text" id="form2FirstName"
                                                        class="form-control form-control" name="first_name"
                                                        value="{{ old('first_name') }}" />
                                                    @error('first_name')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="col-12 col-md-6">
                                                    <label class="form-label" for="form2LastName"
                                                        style="margin-bottom: 0;">Last Name</label>
                                                    <input type="text" id="form2LastName"
                                                        class="form-control form-control" name="last_name"
                                                        value="{{ old('last_name') }}" />
                                                    @error('last_name')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-outline mb-3">
                                            <label class="form-label" for="form2Email" style="margin-bottom: 0;">Email
                                                address</label>
                                            <input type="email" id="form2Email" class="form-control form-control"
                                                name="email" value="{{ old('email') }}" />
                                            @error('email')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-outline mb-3">
                                            <label class="form-label" for="form2Password"
                                                style="margin-bottom: 0;">Password</label>
                                            <input type="password" id="form2Password" class="form-control form-control"
                                                name="password" />
                                            @error('password')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-outline mb-3">
                                            <label class="form-label" for="form2ConfirmPassword"
                                                style="margin-bottom: 0;">Confirm Password</label>
                                            <input type="password" id="form2ConfirmPassword"
                                                class="form-control form-control" name="password_confirmation" />
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <button class="btn btn-custom btn btn-block" type="submit">Sign Up</button>
                                            <p class="mb-5 pb-lg-2" style="color: #393f81;">Already have an account?
                                                click <a href="{{route('login')}}" style="color: #393f81;">here</a></p>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>