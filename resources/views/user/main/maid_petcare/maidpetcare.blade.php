@extends('user.main.layouts.master')

@section('title', 'Maid, Pet Care')

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

        .maidpetcare {
            transition: all 0.5s;
        }

        .maidpetcare:hover {
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

    {{-- <div class="filter container w-25 mt-5">
        <div class=".fitler1 shadow-sm py-2 rounded text-danger">
            <form action="{{ route('maidpetcare#search') }}" method="post">
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
                        <a href="{{ route('mainmaidpetcare#page') }}" class="clear">
                            Clear
                        </a>
                    </button>

                </div>
            </form>
        </div>
    </div> --}}
    {{-- maidpetcare workers --}}

    <div class="text-center mt-5 text-danger">
        <h2>MAID, PET CARE WORKERS</h2>
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
            <a href="{{ route('mainmaidpetcare#page') }}">
                <button class="btn btn-primary btn-sm">Clear</button>
            </a>
        </div>
        <div class="row m-auto" id="maidpetcareList">
            @foreach ($maidpetcares as $maidpetcare)
                @if ($maidpetcare->stockstatus == 'Available' ||
                    $maidpetcare->stockstatus == 'null' ||
                    $maidpetcare->stockstatus == '')
                    <div class="col col-lg-4 col-md-6 col-sm-8 mt-5 text-center">

                        <div class="maidpetcare card p-2 border border-0" style="width: 20rem; height: 600px;">

                            <img class="card-img-top" src="{{ asset('storage/' . $maidpetcare->photo) }}"
                                style="height: 305px; width: 305px;" alt="">
                            <div class="card-body text-start">
                                <p>{{ $maidpetcare->code }}</p>
                                <p>{{ $maidpetcare->full_part }} / {{ $maidpetcare->live_in_out }}</p>
                                <p>{{ $maidpetcare->salary }} <b>Baht</b></p>
                                <p>{{ Str::words($maidpetcare->experience, 8, '...') }}</p>

                            </div>
                            <div class="text-center mb-4">
                                <a href="{{ route('maidpetcare#info', $maidpetcare->id) }}"
                                    class="btn btn-danger mb-2 rounded-pill w-75">
                                    More Details
                                </a>
                            </div>

                        </div>
                    </div>
                @elseif ($maidpetcare->stockstatus == 'Not Available')
                @endif
            @endforeach
        </div>
        <div class="mt-5">
            {{ $maidpetcares->links() }}
        </div>
    </div>
    {{-- end maidpetcare workers --}}


    {{-- hire for maidpetcare --}}

    <div class="text-center mt-3 text-danger">
        <h2>HIRE FOR MAID, PET CARE</h2>
    </div>



    <script>
        $(document).ready(function() {
    // $.ajax({
    //     type : 'get' ,
    //     url : 'http://localhost/maharthai/public/ajax/maidpetcare/list' ,
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
                url: '{{ route('filter#maidpetcarelist') }}',
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
        <div class="maidpetcare card p-2 border border-0" style="width: 20rem; height: 600px; ">

            <img class="card-img-top" src="{{ asset('storage/${response[$i].photo}') }}"
                style="height: 305px; width: 305px;" alt="">
            <div class="card-body text-start">
                <div>
                    <p>${response[$i].code}</p>
                    <p>${response[$i].full_part} / ${response[$i].live_in_out}</p>
                    <p>${response[$i].salary} <b>Baht</b></p>

                    <p>{{ Str::words($maidpetcare->experience, 8, '...') }}</p>
                </div>

            </div>
            <div class="text-center mb-4">
                <a href="{{ route('maidpetcare#info', $maidpetcare->id) }}" class="btn btn-danger rounded-pill w-75">
                    More Details
                </a>
            </div>

            {{-- <a href="javascript:void(0)" id="show-worker" data-url="{{ route('maidpetcare#info', $maidpetcare->id) }}" class="btn btn-danger">More Details</a> --}}

        </div>
    </div>
                `;
                    }
                    $('#maidpetcareList').html($list);
                }
            });
        } else if ($eventOption1 == 'live-Out') {
            $.ajax({
                type: 'get',
                url: '{{ route('filter#maidpetcarelist') }}',
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
        <div class="maidpetcare card p-2 border border-0" style="width: 20rem; height: 600px; ">

            <img class="card-img-top" src="{{ asset('storage/${response[$i].photo}') }}"
                style="height: 305px; width: 305px;" alt="">
            <div class="card-body text-start">
                <div>
                    <p>${response[$i].code}</p>
                    <p>${response[$i].full_part} / ${response[$i].live_in_out}</p>
                    <p>${response[$i].salary} <b>Baht</b></p>

                    <p>{{ Str::words($maidpetcare->experience, 8, '...') }}</p>
                </div>

            </div>
            <div class="text-center mb-4">
                <a href="{{ route('maidpetcare#info', $maidpetcare->id) }}" class="btn btn-danger rounded-pill w-75">
                    More Details
                </a>
            </div>

            {{-- <a href="javascript:void(0)" id="show-worker" data-url="{{ route('maidpetcare#info', $maidpetcare->id) }}" class="btn btn-danger">More Details</a> --}}

        </div>
    </div>
                `;
                    }
                    $('#maidpetcareList').html($list);
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
                url: '{{ route('filter#maidpetcarelist') }}',
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
        <div class="maidpetcare card p-2 border border-0" style="width: 20rem; height: 600px; ">

            <img class="card-img-top" src="{{ asset('storage/${response[$i].photo}') }}"
                style="height: 305px; width: 305px;" alt="">
            <div class="card-body text-start">
                <div>
                    <p>${response[$i].code}</p>
                    <p>${response[$i].full_part} / ${response[$i].live_in_out}</p>
                    <p>${response[$i].salary} <b>Baht</b></p>

                    <p>{{ Str::words($maidpetcare->experience, 8, '...') }}</p>
                </div>

            </div>
            <div class="text-center mb-4">
                <a href="{{ route('maidpetcare#info', $maidpetcare->id) }}" class="btn btn-danger rounded-pill w-75">
                    More Details
                </a>
            </div>

            {{-- <a href="javascript:void(0)" id="show-worker" data-url="{{ route('maidpetcare#info', $maidpetcare->id) }}" class="btn btn-danger">More Details</a> --}}

        </div>
    </div>
                `;
                    }
                    $('#maidpetcareList').html($list);
                }
            });
        } else if ($eventOption == 'part-time') {
            $.ajax({
                type: 'get',
                url: '{{ route('filter#maidpetcarelist') }}',
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
        <div class="maidpetcare card p-2 border border-0" style="width: 20rem; height: 600px; ">

            <img class="card-img-top" src="{{ asset('storage/${response[$i].photo}') }}"
                style="height: 305px; width: 305px;" alt="">
            <div class="card-body text-start">
                <div>
                    <p>${response[$i].code}</p>
                    <p>${response[$i].full_part} / ${response[$i].live_in_out}</p>
                    <p>${response[$i].salary} <b>Baht</b></p>

                    <p>{{ Str::words($maidpetcare->experience, 8, '...') }}</p>
                </div>

            </div>
            <div class="text-center mb-4">
                <a href="{{ route('maidpetcare#info', $maidpetcare->id) }}" class="btn btn-danger rounded-pill w-75">
                    More Details
                </a>
            </div>

            {{-- <a href="javascript:void(0)" id="show-worker" data-url="{{ route('maidpetcare#info', $maidpetcare->id) }}" class="btn btn-danger">More Details</a> --}}

        </div>
    </div>
                `;
                    }
                    $('#maidpetcareList').html($list);
                }
            });
        }
    });
});
</script>

@endsection
