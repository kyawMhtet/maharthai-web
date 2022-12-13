@extends('user.main.layouts.master')

@section('title', 'Maid, Nanny')

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
    </style>

    {{-- navbar --}}




    </form>
    </div>

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

    <div class="container w-25 mt-5">
        <div class="shadow-sm py-2 rounded text-danger">
            <form action="" method="get">
                @csrf
                <div class="d-flex ms-5">
                    <div>
                        <div class="form-check">
                            <input class="workingtime" type="radio" value="full-time" name="full_part" id="fulltime">
                            <label class="form-check-label" for="fulltime">
                                Full-time
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="workingtime" type="radio" value="part-time" name="full_part" id="parttime">
                            <label class="form-check-label" for="parttime">
                                Part-time
                            </label>
                        </div>
                    </div>

                    <div class="ms-4">
                        <div class="form-check">
                            <input class="workingtime" type="radio" value="live-In" name="live_in_out" id="livein">
                            <label class="form-check-label" for="livein">
                                Live-In
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="workingtime" type="radio" value="live-Out" name="live_in_out" id="liveout">
                            <label class="form-check-label" for="liveout">
                                Live-Out
                            </label>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    {{-- nanny workers --}}

    <div class="text-center mt-5 text-danger">
        <h2>NANNY, MAID WORKERS</h2>
    </div>

    <div class="container w-75 text-center mb-3">
        <div class="row m-auto" id="nannyList">
            @foreach ($nannies as $nanny)
                <div class="col-4 mt-5">
                    <div class="nanny card p-2 border border-0" style="width: 20rem; height: 600px; ">

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
            @endforeach
        </div>
        <div class="mt-5">
            {{ $nannies->links() }}
        </div>
    </div>
    {{-- end nanny workers --}}


    {{-- hire for nanny --}}

    <div class="text-center mt-5 text-danger">
        <h2>HIRE FOR NANNY, MAID</h2>


    </div>
    <div class="form w-50 m-auto mt-4 text-center">
        <form action="https://formspree.io/f/mvoynkqy" method="POST">
            <input type="text" class="form-control border border-0" placeholder="Name*">
            <input type="email" class="form-control border border-0" placeholder="example@gmail.com">
            <input type="text" class="form-control border border-0" placeholder="Phone*">
            <input type="text" class="form-control border border-0" placeholder="Full Time or Part Time*">
            <input type="text" class="form-control border border-0" placeholder="Live In or Live Out*">
            <textarea name="" class="form-control" id="" placeholder="Note*" cols="10" rows="5"></textarea>

            <a href="" class="btn btn-danger w-25 py-2 mt-4" type="button">
                <h5 class="m-auto">REQUEST</h5>
            </a>
        </form>
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

            $('.workingtime').change(function() {
                $eventOption = $('.workingtime:checked').val();
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
                } else if($eventOption == 'live-In') {
                    $.ajax({
                        type: 'get',
                        url: '{{ route('filter#nannylist') }}',
                        data: {
                            'status' : 'live-In'
                        },
                        dataType: 'json',
                        success: function(response) {
                            $list = '';
                            for($i = 0; $i < response.length; $i++) {
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
                } else if($eventOption == 'live-Out') {
                    $.ajax({
                        type : 'get',
                        url : '{{ route('filter#nannylist') }}',
                        data : {
                            'status' : 'live-Out'
                        },
                        dataType : 'json',
                        success : function(response) {
                            $list = '';
                            for($i = 0; $i < response.length; $i++) {
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
