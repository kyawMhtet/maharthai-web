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


    {{-- JQuery --}}
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

        .offcanvas-body li {
            margin-right: 10px;
        }

        .offcanvas-body li a {
            font-size: 17px;
        }

    </style>
    {{-- <nav class="navbar navbar-expand-lg bg-light sticky-top shadow-sm-bottom">


        <button class="navbar-toggler m-auto" data-bs-target="#menu" data-bs-toggle="collapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="container-fluid p-3" id="">

            <a class="navbar-brand"></a>
            <div class="nav-menu me-5 d-flex collapse navbar-collapse" >
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
                        <li><a href="{{ route('mainmaidpetcare#page') }}" class="dropdown-item">Maid, Pet Care</a></li>
                        <li><a href="{{ route('mainpremiumnanny#page') }}" class="dropdown-item">Premium Nanny</a></li>
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
    </nav> --}}

    {{-- <nav class="navbar navbar-expand-lg bg-white shadow-sm p-3 sticky-top">
        <div class="container-fluid">
            <div class="fixed">

            </div>

            <div>
                <button class="navbar-toggler" data-bs-target="#menu" data-bs-toggle="collapse">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div id="menu" class="collapse navbar-collapse text-center">
                    <ul class="navbar-nav">
                        <li class="nav-item mx-lg-3 my-3 my-lg-0">
                            <a href="" class="nav-link">Home</a>
                        </li>

                        <li class="nav-item mx-lg-3 my-3 my-lg-0">
                            <a href="" class="nav-link">About</a>
                        </li>

                        <li class="nav-item mx-lg-3 my-3 my-lg-0">
                            <a href="" class="nav-link">Service</a>
                        </li>

                        <li class="nav-item mx-lg-3 my-3 my-lg-0">
                            <a href="" class="nav-link">Blog</a>
                        </li>

                        <li class="nav-item mx-lg-3 my-3 my-lg-0">
                            <a href="" class="nav-link">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav> --}}



    <nav class="navbar navbar-expand-lg bg-light p-3 fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            {{-- <img src="{{ asset('storage/maharthai.jpg') }}" class="d-block" alt="..." alt=""> --}}
            <h4 class="text-danger"><b>Mahar Thai Lin Aung</b></h4>
          </a>

          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="https://maharthailinaung.com/">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Services
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('mainmaid#page') }}" class="dropdown-item">Maid</a></li>
                        <li><a href="{{ route('user#home') }}" class="dropdown-item">Nanny, Maid</a></li>

                        <li><a href="{{ route('mainhousekeeping#page') }}" class="dropdown-item">HouseKeeping</a></li>

                        <li><a href="{{ route('mainmaideldercare#page') }}" class="dropdown-item">Maid, Eldercare</a></li>
                        <li><a href="{{ route('mainmaidcook#page') }}" class="dropdown-item">Maid, Cook</a></li>
                        <li><a href="{{ route('mainmaidpetcare#page') }}" class="dropdown-item">Maid, Pet Care</a></li>
                        <li><a href="{{ route('mainpremiumnanny#page') }}" class="dropdown-item">Premium Nanny</a></li>
                    </ul>
                  </li>

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      EN/TH
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">ENG</a></li>
                      <li><a class="dropdown-item" href="#">THAI</a></li>
                    </ul>
                  </li>

              </ul>
            </div>
          </div>
        </div>
    </nav>




    {{-- navbar --}}

    {{-- end navbar --}}

    @yield('content')

    <p class="mt-5 text-center">
        This site is protected by reCAPTCHA and the Google <span class="text-danger">Privacy Policy</span> and <span
            class="text-danger">Terms of Service</span> apply.
    </p>


</body>

</html>


</div>
