<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Services</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>

    <style>
        .info div .data {
            text-align: justify;
        }

        .nav-menu a {
            color: red;
        }

        .dropdown-menu a {
            color: black;
            margin-top: 10px;
        }

        .dropdown-menu a:hover {
            color: red;
        }

        .card-body p {
            font-size: 18px;
        }

        .nanny {
            transition: all 0.5s;
        }

        .nanny:hover {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .form input {
            background-color: #F1F1F1;
            margin-top: 25px;
            height: 45px;
        }

        .form textarea {
            background-color: #F1F1F1;
            margin-top: 25px;
        }
    </style>
    <nav class="navbar bg-light sticky-top shadow-sm-bottom">
        <div class="container-fluid p-3">
            {{-- <img src="" alt=""> --}}
            <a class="navbar-brand"></a>
            <div class="nav-menu me-5 d-flex">
                <a href="https://maharthailinaung.com/" class="navbar-brand me-5">Home</a>
                <div class="dropdown-center mt-1">
                    <a href="" class="navbar-brand me-5 dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">Services</a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('mainmaid#page') }}" class="dropdown-item">Maid</a></li>
                        <li><a href="{{ route('user#home') }}" class="dropdown-item">Nanny, Maid</a></li>

                        <li><a href="{{ route('mainhousekeeping#page') }}" class="dropdown-item">HouseKeeping</a></li>

                        <li><a href="{{ route('mainmaideldercare#page') }}" class="dropdown-item">Maid, Eldercare</a></li>
                        <li><a href="{{ route('mainmaidcook#page') }}" class="dropdown-item">Maid, Cook</a></li>
                        <li><a href="" class="dropdown-item">Maid, Pet Care</a></li>
                        <li><a href="#" class="dropdown-item">Premium Nanny</a></li>

                    </ul>
                </div>
                <div class="dropdown-center mt-1">
                    <a href="" class="navbar-brand me-5 dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">EN/TH</a>
                    <ul class="dropdown-menu">
                        <li><a href="" class="dropdown-item">ENG</a></li>
                        <li><a href="" class="dropdown-item">THAI</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    {{-- navbar --}}

    {{-- <nav class="navbar navbar-expand-lg bg-light sticky-top shadow-sm-bottom">
        <div class="container-fluid p-3">

            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler m-auto" data-bs-target="#menu" data-bs-toggle="collapse">
                <span class="navbar-toggler-icon"></span>
            </button>



        </div>
    </nav> --}}


    {{-- <nav class="navbar fixed-top navbar-expand-lg bg-light ">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div id="menu" class="collapse navbar-collapse text-center">
                <ul class="navbar-nav">
                    <li class="nav-item mx-lg-3 my-3 my-lg-0">
                        <a href="" class="nav-link">Home</a>
                    </li>

                    <li class="nav-item mx-lg-3 my-3 my-lg-0">
                        <div class="dropdown-center mt-1">
                            <a href="" class="navbar-brand me-5 dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false">Services</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('mainmaid#page') }}" class="dropdown-item">Maid</a></li>
                                <li><a href="{{ route('user#home') }}" class="dropdown-item">Nanny, Maid</a></li>
                                <li><a href="" class="dropdown-item">Maid, Eldercare</a></li>
                                <li><a href="" class="dropdown-item">Maid, Cook</a></li>
                                <li><a href="" class="dropdown-item">Maid, Pet Care</a></li>
                                <li><a href="" class="dropdown-item">Premium Nanny</a></li>
                                <li><a href="" class="dropdown-item">HouseKeeping</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>

            </div>
    </nav> --}}

    {{-- end navbar --}}

    @yield('content')

    <p class="mt-5 text-center">
        This site is protected by reCAPTCHA and the Google <span class="text-danger">Privacy Policy</span> and <span
            class="text-danger">Terms of Service</span> apply.
    </p>


</body>

</html>


</div>
