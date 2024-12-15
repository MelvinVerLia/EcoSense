<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <title>Home</title>
    <style>
        .navbar {
            background-color: #d4edda;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .navbar .navbar-brand {
            color: #155724;
            font-weight: bold;
            font-size: 1.5rem;
        }

        .navbar .navbar-brand img {
            height: 50px;
        }

        .navbar .nav-link {
            color: #155724;
            font-weight: 500;
            margin: 0 10px;
            padding-bottom: 2px;

            transition: all 0.3s ease-in-out;
        }

        .navbar .nav-link:hover {
            color: #1b925a;
        }

        .navbar .nav-link.active {
            color: #0c4128;
            font-weight: bold;
            border-bottom: 2px solid #0c4128;
            padding-bottom: 0;
        }

        .navbar-toggler {
            border: none;
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(21,87,36, 1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        .navbar-toggler:focus {
            outline: none;
            box-shadow: 0 0 5px rgba(21, 87, 36, 0.5);
        }

        .navbar-nav .nav-item .nav-link {
            font-size: 1.2rem;
            font-weight: bold;
        }

        @media (max-width: 991px) {

            .navbar-nav .nav-link.active {
                border-bottom: none;
            }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{asset('images/logo.png')}}" alt="Brand Logo">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('home') ? 'active' : '' }}"
                            href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('article') ? 'active' : '' }}"
                            href="{{ route('article') }}">Article</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('merchandise') ? 'active' : '' }}"
                            href="{{ route('merchandise') }}">Merchandise</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('contribute') ? 'active' : '' }}"
                            href="{{ route('contribute') }}">Contribute</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('profile') ? 'active' : '' }}"
                            href="{{ route('profile') }}">Profile</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>