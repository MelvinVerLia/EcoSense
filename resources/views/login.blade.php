<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        .btn-custom {
            background-color: #28a745;
            color: white;
            transition: 0.3s;
        }

        .btn-custom:hover {
            background-color: #4CAF50;
            color: white;
        }

        .btn-custom:focus{
            box-shadow: none;
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
    <section class="vh-100" style="background:url('{{ asset('images/forest.png') }}') no-repeat center center">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="https://www.arborday.org/sites/arborday.org/files/styles/embed_large/public/media/2024-11/hero_campaigns-and-past-projects_national-tree_0.jpg.webp"
                                    alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem; width: 100%; height: 100%; object-fit: cover; object-position: center;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form action="{{ route('login.submit') }}" method="POST">
                                        @csrf
                                        @if(session('success'))
                                            <div class="alert alert-success">
                                                {{ session('success') }}
                                            </div>
                                        @endif
                                        @if ($errors->has('email'))
                                            <div class="alert alert-danger">{{ $errors->first('email') }}</div>
                                        @endif

                                        @if ($errors->has('password'))
                                            <div class="alert alert-danger">{{ $errors->first('password') }}</div>
                                        @endif

                                        <div class="d-flex align-items-center mb-4 pb-2">
                                            <span class="h1 fw-bold mb-0">Login Account</span>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example17"
                                                style="margin-bottom: 0;">Email address</label>
                                            <input type="email" id="form2Example17" class="form-control form-control"
                                                name="email" />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example27"
                                                style="margin-bottom: 0;">Password</label>
                                            <input type="password" id="form2Example27" class="form-control form-control"
                                                name="password" />

                                            <a class="small text-muted" href="#!">Forgot password?</a>
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <button class="btn btn-custom btn btn-rounded" type="submit">Login</button>

                                            <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? click
                                                <a href="{{route('register')}}" style="color: #393f81;">here</a>
                                            </p>
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
</body>

</html>