@extends('user.main.layouts.master')

@section('title', 'nanny, Nanny')

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

        @media(max-width: 375px) {
            .filter1 {

                width: 15rem;
            }
            .filter {
                margin-right: 225px;
            }
        }


        @media(max-width: 470px)
        {
            .filter1 {
                width: 15rem;
            }
            .filter {
                margin-right: 230px;
            }
        }

        /* @media(max-width: 900px)
        {
            .filter1 {
                width: 16rem;
                padding: 10px;
            }
            .filter {
                margin-right: 300px;
            }
        } */

        /* @media(max-width: 900px)
        {
            .filter1 {
                width: 16rem;
                padding: 10px;
            }
            .filter {
                margin-right: 360px;
            }
        } */
    </style>

    {{-- navbar --}}




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

    {{-- <div class="filter container w-25 mt-5">
        <div class="filter1 shadow-sm py-2 rounded text-danger">
            <form action="{{ route('nanny#search') }}" method="post">
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
                    <button class="btn btn-danger text-white rounded btn-sm">Submit</button>
                    <button class="btn btn-primary btn-sm">
                        <a href="{{ route('user#home') }}" class="clear">
                            Clear
                        </a>
                    </button>
                </div>
            </form>
        </div>
    </div> --}}

    {{-- <div class="filter">

        <form action="{{ route('nanny#search', $nannies->id) }}" method="post">
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
                <button class="btn btn-danger text-white rounded btn-sm">Submit</button>
                <button class="btn btn-primary btn-sm">
                    <a href="{{ route('user#home') }}" class="clear">
                        Clear
                    </a>
                </button>
            </div>
        </form>

    </div> --}}


    {{-- nanny workers --}}

    <div class="text-center mt-5 text-danger">
        <h2>NANNY, MAID WORKERS</h2>
    </div>

    <div class="list container w-75 text-center mb-3">
        <div class="container w-25 mt-3 shadow-sm p-2">
            {{-- <div class="text-center"> --}}
                <div class="d-flex">
                    <div class="m-auto">
                        <input type="radio" class="form-check-input workingtime" name="full_part" value="full-time" id="fullpart1">
                        <label for="form-check-label" for="fullpart1">Full-time</label>
                    </div>

                    <div class="me-4">
                        <input type="radio" class="form-check-input workingtime" name="full_part" value="part-time" id="fullpart2">
                        <label for="form-check-label" for="fullpart2">Part-time</label>
                    </div>
                </div>

                <div class="me-4 d-flex">
                    <div class="m-auto">
                        <input type="radio" class="form-check-input workingtime1" name="live_in_out" value="live-In" id="liveinout1">
                        <label for="form-check-label" for="liveinout1">Live-In</label>
                    </div>

                    <div class="me-2">
                        <input type="radio" class="form-check-input workingtime1" name="live_in_out" value="live-Out" id="liveinout2">
                        <label for="form-check-label" for="liveinout2">Live-Out</label>
                    </div>
                </div>
            {{-- </div> --}}
        </div>

        <div class="mt-2">
            <a href="{{ route('user#home') }}">
                <button class="btn btn-primary btn-sm">Clear</button>
            </a>
        </div>
        <div class="row m-auto" id="nannyList">
            @foreach ($nannies as $nanny)
                @if ($nanny->stockstatus == 'Available' || $nanny->stockstatus == 'null' || $nanny->stockstatus == '')
                    <div class="col col-lg-4 col-md-7 col-sm-8 list-item  mt-5 text-center">
                        <div class="nanny card listitem p-2 border border-0" style="width: 20rem; height: 600px; ">

                            <img class="card-img-top" src="{{ asset('storage/' . $nanny->photo) }}"
                                style="height: 305px; width: 305px;" alt="">
                            <div class="card-body text-start">
                                <div>
                                    <p>{{ $nanny->code }}</p>
                                    <p>{{ $nanny->full_part }} / {{ $nanny->live_in_out }}</p>
                                    <p>{{ $nanny->salary }} <b>Baht</b></p>


                                    <p>{{ Str::words($nanny->experience, 8, '...') }}</p>
                                </div>

                            </div>
                            <div class="text-center mb-4">
                                <a href="{{ route('nanny#info', $nanny->id) }}" class="btn btn-danger rounded-pill w-75">
                                    More Details
                                </a>
                            </div>

                            {{-- <a href="javascript:void(0)" id="show-worker" data-url="{{ route('nanny#info', $nanny->id) }}" class="btn btn-danger">More Details</a> --}}

                        </div>
                    </div>
                @elseif ($nanny->stockstatus == 'Not Available')
                @endif
            @endforeach
        </div>
        <div class="mt-5">
            {{ $nannies->links() }}
        </div>
    </div>
    {{-- end nanny workers --}}


    {{-- hire for nanny --}}
    <div class="text-center mt-3 text-danger">
        <h2>HIRE FOR NANNY, nanny</h2>
    </div>



    <script>
                $(document).ready(function() {
            // $.ajax({
            //     type : 'get' ,
            //     url : 'http://localhost/maharthai/public/ajax/nanny/list' ,
            //     dataType : 'json' ,
            //     success : function(response){
            //         console.log('response');
            //     }
            // });


            // input[type=radio][name=full_part]

            $('.workingtime1').change(function() {
                $eventOption1 = $('.workingtime1:checked').val();
                // console.log($eventOption1);
                if ($eventOption1 == 'live-In') {
                    $.ajax({
                        type: 'get',
                        url: '{{ route('filter#nannylist') }}',
                        data: {
                            'status': 'live-In'
                        },
                        dataType: 'json',
                        success: function(response) {
                            // console.log(response[0].full_part);
                            $list = '';
                            for ($i = 0; $i < response.length; $i++) {
                                $list += `
                            <div class="col-4 mt-5">
                <div class="nanny card p-2 border border-0" style="width: 20rem; height: 600px; ">

                    <img class="card-img-top" src="{{ asset('storage/${response[$i].photo}') }}"
                        style="height: 305px; width: 305px;" alt="">
                    <div class="card-body text-start">
                        <div>
                            <p>${response[$i].code}</p>
                            <p>${response[$i].full_part} / ${response[$i].live_in_out}</p>
                            <p>${response[$i].salary} <b>Baht</b></p>

                            <p>{{ Str::words($nanny->experience, 8, '...') }}</p>
                        </div>

                    </div>
                    <div class="text-center mb-4">
                        <a href="{{ route('nanny#info', $nanny->id) }}" class="btn btn-danger rounded-pill w-75">
                            More Details
                        </a>
                    </div>

                    {{-- <a href="javascript:void(0)" id="show-worker" data-url="{{ route('nanny#info', $nanny->id) }}" class="btn btn-danger">More Details</a> --}}

                </div>
            </div>
                        `;
                            }
                            $('#nannyList').html($list);
                        }
                    });
                } else if ($eventOption1 == 'live-Out') {
                    $.ajax({
                        type: 'get',
                        url: '{{ route('filter#nannylist') }}',
                        data: {
                            'status': 'live-Out'
                        },
                        dataType: 'json',
                        success: function(response) {
                            // console.log(response[0].full_part);
                            $list = '';
                            for ($i = 0; $i < response.length; $i++) {
                                $list += `
                            <div class="col-4 mt-5">
                <div class="nanny card p-2 border border-0" style="width: 20rem; height: 600px; ">

                    <img class="card-img-top" src="{{ asset('storage/${response[$i].photo}') }}"
                        style="height: 305px; width: 305px;" alt="">
                    <div class="card-body text-start">
                        <div>
                            <p>${response[$i].code}</p>
                            <p>${response[$i].full_part} / ${response[$i].live_in_out}</p>
                            <p>${response[$i].salary} <b>Baht</b></p>

                            <p>{{ Str::words($nanny->experience, 8, '...') }}</p>
                        </div>

                    </div>
                    <div class="text-center mb-4">
                        <a href="{{ route('nanny#info', $nanny->id) }}" class="btn btn-danger rounded-pill w-75">
                            More Details
                        </a>
                    </div>

                    {{-- <a href="javascript:void(0)" id="show-worker" data-url="{{ route('nanny#info', $nanny->id) }}" class="btn btn-danger">More Details</a> --}}

                </div>
            </div>
                        `;
                            }
                            $('#nannyList').html($list);
                        }
                    });
                }
            });




            $('.workingtime').change(function() {
                $eventOption = $('.workingtime:checked').val();
                // $eventOption1 = $('.workingtime1:checked').val();

                // console.log($eventOption);
                if ($eventOption == 'full-time') {
                    $.ajax({
                        type: 'get',
                        url: '{{ route('filter#nannylist') }}',
                        data: {
                            'status': 'full-time'
                        },
                        dataType: 'json',
                        success: function(response) {
                            // console.log(response[0].full_part);
                            $list = '';
                            for ($i = 0; $i < response.length; $i++) {
                                $list += `
                            <div class="col-4 mt-5">
                <div class="nanny card p-2 border border-0" style="width: 20rem; height: 600px; ">

                    <img class="card-img-top" src="{{ asset('storage/${response[$i].photo}') }}"
                        style="height: 305px; width: 305px;" alt="">
                    <div class="card-body text-start">
                        <div>
                            <p>${response[$i].code}</p>
                            <p>${response[$i].full_part} / ${response[$i].live_in_out}</p>
                            <p>${response[$i].salary} <b>Baht</b></p>

                            <p>{{ Str::words($nanny->experience, 8, '...') }}</p>
                        </div>

                    </div>
                    <div class="text-center mb-4">
                        <a href="{{ route('nanny#info', $nanny->id) }}" class="btn btn-danger rounded-pill w-75">
                            More Details
                        </a>
                    </div>

                    {{-- <a href="javascript:void(0)" id="show-worker" data-url="{{ route('nanny#info', $nanny->id) }}" class="btn btn-danger">More Details</a> --}}

                </div>
            </div>
                        `;
                            }
                            $('#nannyList').html($list);
                        }
                    });
                } else if ($eventOption == 'part-time') {
                    $.ajax({
                        type: 'get',
                        url: '{{ route('filter#nannylist') }}',
                        data: {
                            'status': 'part-time'
                        },
                        dataType: 'json',
                        success: function(response) {
                            // console.log(response[0].full_part);
                            $list = '';
                            for ($i = 0; $i < response.length; $i++) {
                                $list += `
                            <div class="col-4 mt-5">
                <div class="nanny card p-2 border border-0" style="width: 20rem; height: 600px; ">

                    <img class="card-img-top" src="{{ asset('storage/${response[$i].photo}') }}"
                        style="height: 305px; width: 305px;" alt="">
                    <div class="card-body text-start">
                        <div>
                            <p>${response[$i].code}</p>
                            <p>${response[$i].full_part} / ${response[$i].live_in_out}</p>
                            <p>${response[$i].salary} <b>Baht</b></p>

                            <p>{{ Str::words($nanny->experience, 8, '...') }}</p>
                        </div>

                    </div>
                    <div class="text-center mb-4">
                        <a href="{{ route('nanny#info', $nanny->id) }}" class="btn btn-danger rounded-pill w-75">
                            More Details
                        </a>
                    </div>

                    {{-- <a href="javascript:void(0)" id="show-worker" data-url="{{ route('nanny#info', $nanny->id) }}" class="btn btn-danger">More Details</a> --}}

                </div>
            </div>
                        `;
                            }
                            $('#nannyList').html($list);
                        }
                    });
                }
            });
        });
    </script>


@endsection
