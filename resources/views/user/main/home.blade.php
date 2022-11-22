<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nannies</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</head>

<body>

    <style>
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

    {{-- navbar --}}

    <nav class="navbar bg-light sticky-top shadow-sm-bottom">
        <div class="container-fluid p-3">
            {{-- <img src="" alt=""> --}}
            <a class="navbar-brand">Navbar</a>
            <div class="nav-menu me-5 d-flex">
                <a href="" class="navbar-brand me-5">Home</a>
                <div class="dropdown-center mt-1">
                    <a href="" class="navbar-brand me-5 dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">Services</a>
                    <ul class="dropdown-menu">
                        <li><a href="" class="dropdown-item">Nanny</a></li>
                        <li><a href="" class="dropdown-item">Maid</a></li>
                        <li><a href="" class="dropdown-item">Maid & Nanny</a></li>
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

    {{-- end navbar --}}


    {{-- carousel slide --}}

    <div class="container w-75 mt-2">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('storage/slide1.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('storage/slide1.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('storage/slide1.jpg') }}" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    {{-- end carousel slide --}}


    {{-- nanny workers --}}

    <div class="text-center mt-5 text-danger">
        <h2>NANNY WORKERS</h2>
    </div>

    <div class="container text-center">
        <div class="row">
            @foreach ($nannies as $nanny)
                <div class="col mt-5">
                    <div class="nanny card p-2 border border-0" style="width: 21rem;">
                        <img class="card-img-top" src="{{ asset('storage/' . $nanny->photo) }}" style="height: 320px"
                            alt="">
                        <div class="card-body text-start">
                            <p><b>{{ $nanny->code }}</b></p>
                            <p><b>{{ $nanny->full_part }}</b></p>
                            <p><b>{{ $nanny->salary }}</b></p>
                            <p><b>{{ $nanny->experience }}</b></p>
                        </div>
                        {{-- <button type="submit" class="btn btn-danger mb-3 rounded-pill w-75 m-auto">More Detail</button> --}}
                        <a href="" class="btn btn-danger mb-3 rounded-pill w-75 m-auto">More Detail</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{-- end nanny workers --}}


    {{-- hire for nanny --}}

    <div class="text-center mt-3 text-danger">
        <h2>HIRE FOR NANNY</h2>

        <div class="form w-50 m-auto mt-4">
          <form action="">
            <input type="text" class="form-control border border-0" placeholder="Name*">
            <input type="email" class="form-control border border-0" placeholder="example@gmail.com">
            <input type="text" class="form-control border border-0" placeholder="Phone*">
            <input type="text" class="form-control border border-0" placeholder="Full Time or Part Time*">
            <input type="text" class="form-control border border-0" placeholder="Live In or Live Out*">
            <textarea name="" class="form-control" id="" cols="10" rows="5">Note*</textarea>
          </form>
        </div>
    </div>


</body>

</html>
