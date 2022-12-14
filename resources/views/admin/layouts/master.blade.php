<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>@yield('title')</title>

    {{-- print-Js --}}
    <link rel="stylesheet" href="https://printjs-4de6.kxcdn.com/print.min.js">
    <link rel="stylesheet" href="https://printjs-4de6.kxcdn.com/print.min.css">
    <link rel="stylesheet" type="text/css" href="print.css">

    {{-- jquery --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js"></script>
    {{-- font-awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- Fontfaces CSS-->
    <link href="{{ asset('admin/css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('admin/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('admin/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('admin/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet"
        media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('admin/vendor/bootstrap-5.2/bootstrap.min.css') }}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('admin/vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet"
        media="all">
    <link href="{{ asset('admin/vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('admin/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('admin/vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('admin/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('admin/vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('admin/css/theme.css') }}" rel="stylesheet" media="all">

    <style>
        #display-image {
            width: 170px;
            height: 150px;
            /* border: 1px solid black; */
            background-position: center;
            background-size: cover;
            display: none;
        }

        /* #show:hover {
            color: rgb(58, 164, 240);
        }
        #hide:hover {
            color: rgb(58, 164, 240);
        } */
        li a {
            text-decoration: none;
        }

        .testing {
            background: #ece023;
            width: 30px;
            height: 40px;
            margin: 2px;
            float: left;
        }
    </style>

</head>

<body class="animsition" id="body">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="{{ route('category#list') }}">
                    {{-- <img src="{{ asset('admin/images/icon/logo.png') }}" alt="Cool Admin" /> --}}

                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        {{-- <li class=" has-sub">
                            <a class="js-arrow" href="{{ route('category#list') }}">
                                <i class="fas fa-tachometer-alt"></i>Home Page
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('customer#page') }}">
                                <i class="fas fa-chart-bar"></i>Customers</a>
                        </li> --}}
                        <li>

                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="fas fa-chart-bar"></i>Type 1 (Maid & Nanny)</a>
                                <ul class="dropdown-menu">
                                    {{-- <li><span class="dropdown-item-text">Dropdown item text</span></li> --}}
                                    <li class="text-center">
                                        <a class="dropdown-item" href="{{ route('maid#page') }}">Maid</a>
                                    </li>
                                    <li class="text-center">
                                        <a href="{{ route('nanny#page') }}" class="dropdown-item">
                                            Nanny, Maid
                                        </a>
                                    </li>

                                    <li class="text-center">
                                        <a class="dropdown-item" href="{{ route('housekeeping#page') }}">HouseKeeping
                                        </a>
                                    </li>

                                    <li class="text-center"><a class="dropdown-item"
                                            href="{{ route('maideldercare#page') }}">Maid, Eldercare</a>
                                    </li>

                                    <li class="text-center"><a class="dropdown-item"
                                            href="{{ route('maidcook#page') }}">Maid, Cook</a></li>
                                    <li class="text-center"><a class="dropdown-item"
                                            href="{{ route('maidpetcare#page') }}">Maid, Pet Care</a>
                                    </li>
                                    <li class="text-center"><a class="dropdown-item"
                                            href="{{ route('premiumnanny#page') }}">Premium Nanny</a>
                                    </li>


                                </ul>
                            </div>
                        </li>

                        <li>

                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="fas fa-chart-bar"></i>Type 2 (Driver)</a>
                                <ul class="dropdown-menu">
                                    {{-- <li><span class="dropdown-item-text">Dropdown item text</span></li> --}}
                                    <li class="text-center"><a class="dropdown-item" href="{{ route('driver#page') }}">Driver</a></li>

                                    <li class="text-center"><a class="dropdown-item" href="{{ route('gardener#page') }}">Gardener</a>
                                    </li>

                                    <li class="text-center"><a class="dropdown-item" href="{{ route('generalworker#page') }}">General
                                            Workers</a></li>
                                    <li class="text-center"><a class="dropdown-item" href="{{ route('saleman#page') }}">Sale Man</a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                        <li>
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="fas fa-chart-bar"></i>Type 3 (Restaurant)</a>
                                <ul class="dropdown-menu">
                                    {{-- <li><span class="dropdown-item-text">Dropdown item text</span></li> --}}
                                    <li class="text-center"><a class="dropdown-item" href="{{ route('cashier#page') }}">Cashier</a></li>

                                    <li class="text-center"><a class="dropdown-item" href="{{ route('manager#page') }}">Manager</a>
                                    </li>

                                    <li class="text-center"><a class="dropdown-item"
                                            href="">Waiter/Waitress</a></li>
                                    <li class="text-center"><a class="dropdown-item" href="{{ route('helper#page') }}">Helper</a></li>
                                    <li class="text-center"><a class="dropdown-item" href="{{ route('chiefassistant#page') }}">ChiefAssitant</a>
                                    </li>
                                    <li class="text-center"><a class="dropdown-item" href="{{ route('kitchenhelper#page') }}">KitchenHelper</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li>

                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="fas fa-chart-bar"></i>Type 4 (FactoryWorkers)</a>
                                <ul class="dropdown-menu">
                                    {{-- <li><span class="dropdown-item-text">Dropdown item text</span></li> --}}
                                    <li class="text-center"><a class="dropdown-item" href="">Factory
                                            Workers</a></li>

                                </ul>
                            </div>
                        </li>

                        <li>

                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="fas fa-chart-bar"></i>Type 5 (Hotel)</a>
                                <ul class="dropdown-menu">
                                    {{-- <li><span class="dropdown-item-text">Dropdown item text</span></li> --}}
                                    {{-- <li class="text-center"><a class="dropdown-item" href="">Driver</a></li>

                                    <li class="text-center"><a class="dropdown-item" href="">Gardener</a>
                                    </li>

                                    <li class="text-center"><a class="dropdown-item" href="">General Workers</a></li> --}}


                                </ul>
                            </div>
                        </li>

                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <h4>Admin Dashboard Panel</h4>
                            {{-- <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form> --}}
                            <div class="header-button">

                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="" alt="" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">{{ Auth::user()->name }}</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        {{-- <img src="{{ asset('admin/images/icon/avatar-01.jpg') }}" alt="John Doe" /> --}}
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">{{ Auth::user()->name }}</a>
                                                    </h5>
                                                    <span class="email">{{ Auth::user()->email }}</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer my-3">
                                                <form action="{{ route('logout') }}" method="post"
                                                    class="d-flex justify-content-center">
                                                    @csrf
                                                    <button class="btn btn-dark text-white col-10">
                                                        <i class="zmdi zmdi-power"></i>Logout</a>
                                                    </button>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            @yield('content')
            <!-- END PAGE CONTAINER-->
        </div>

    </div>


    <!-- Jquery JS-->
    <script src="{{ asset('admin/vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    {{-- <script src="{{ asset('admin/vendor/bootstrap-5.2/popper.min.js') }}"></script> --}}
    <script src="{{ asset('admin/vendor/bootstrap-5.2/bootstrap.min.js') }}"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <!-- Vendor JS       -->
    <script src="{{ asset('admin/vendor/slick/slick.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/animsition/animsition.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/counter-up/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('admin/vendor/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/select2/select2.min.js') }}"></script>

    <!-- Main JS-->
    <script src="{{ asset('admin/js/main.js') }}"></script>

</body>

</html>
<!-- end document-->
