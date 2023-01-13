@extends('user.main.layouts.master')

@section('title', 'General Worker')

@section('content')

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

        .generalworker {
            transition: all 0.5s;
        }

        .generalworker:hover {
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

        @media(max-width: 576px) {
            .filter1 {

                width: 15rem;
            }

            .filter {
                margin-right: 225px;
            }
        }

        @media(max-width: 470px) {
            .filter1 {
                width: 15rem;
            }

            .filter {
                margin-right: 225px;
            }
        }
    </style>


    {{-- carousel slide --}}
    <div class="slider container mt-5">
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

    <div class="filter container w-25 mt-5">
        <div class="filter1 shadow-sm py-2 rounded text-danger">
            <form action="{{ route('generalworker#search') }}" method="get">
                @csrf
                <div class="d-flex">
                    <div class="mt-1 d-flex m-auto">
                        <div class="me-2">
                            <select name="full_part" id="" class="form-select">
                                <option value="full-time">Full-time</option>
                                <option value="part-time">Part-time</option>
                            </select>
                        </div>

                        <div>
                            <select name="live_in_out" id="" class="form-select">
                                <option value="live-In">Live-In</option>
                                <option value="live-Out">Live-Out</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="mt-3 text-center">
                    <button class="btn btn-danger text-white rounded">Submit</button>
                    <button class="btn btn-primary">
                        <a href="{{ route('maingeneralworker#page') }}" class="clear">
                            Clear
                        </a>
                    </button>
                </div>
            </form>
        </div>
    </div>
    {{-- generalworker workers --}}


    <div class="text-center mt-5 text-danger">
        <h2>GENERAL WORKERS</h2>
    </div>

    <div class="list container text-center mb-3">
        <div class="text-start ms-4 mt-4 result">
            <h6>Search result for : <span class="badge bg-secondary text-white">{{ request('full_part') }} /
                    {{ request('live_in_out') }}</span></h6>
        </div>
        <div class="row m-auto" id="generalworkerList">
            @foreach ($generalworkers as $generalworker)
                @if ($generalworker->stockstatus == 'Available' || $generalworker->stockstatus == 'null' || $generalworker->stockstatus == '')
                    <div class="col-12 col-xl-3 col-lg-3 col-md-6 col-sm-6 ist-item  mt-2 text-center">
                        <div class="generalworker card listitem p-2 border border-0">

                            <img class="card-img-top" src="{{ asset('storage/' . $generalworker->photo) }}" alt="">
                            <div class="card-body text-start">
                                <div>
                                    <p>{{ $generalworker->code }}</p>
                                    <p>{{ $generalworker->full_part }} / {{ $generalworker->live_in_out }}</p>
                                    <p>{{ $generalworker->salary }} <b>Baht</b></p>


                                    <p>{{ Str::words($generalworker->experience, 8, '...') }}</p>
                                </div>

                            </div>
                            <div class="text-center mb-4">
                                <a href="{{ route('generalworker#info', $generalworker->id) }}" class="btn btn-danger rounded-pill w-75">
                                    More Details
                                </a>
                            </div>

                            {{-- <a href="javascript:void(0)" id="show-worker" data-url="{{ route('generalworker#info', $generalworker->id) }}" class="btn btn-danger">More Details</a> --}}

                        </div>
                    </div>
                @elseif ($generalworker->stockstatus == 'Not Available')
                @endif
            @endforeach
        </div>
        <div class="mt-5">
            {{ $generalworkers->links() }}
        </div>
    </div>
    {{-- end generalworker workers --}}


    {{-- hire for generalworker --}}

    <div class="text-center mt-3 text-danger">
        <h2>HIRE FOR GENERAL WORKERS</h2>
    </div>


@endsection
