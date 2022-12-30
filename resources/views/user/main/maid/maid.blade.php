@extends('user.main.layouts.master')

@section('title', 'Maid')

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

        .maid {
            transition: all 0.5s;
        }

        .maid:hover {
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
            <form action="{{ route('maid#search') }}" method="get">
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
                        <a href="{{ route('mainmaid#page') }}" class="clear">
                            Clear
                        </a>
                    </button>
                </div>
            </form>
        </div>
    </div>
    {{-- maid workers --}}


    <div class="text-center mt-5 text-danger">
        <h2>MAID WORKERS</h2>
    </div>

    <div class="list container text-center mb-3">
        <div class="text-start ms-4 mt-4 result">
            <h6>Search result for : <span class="badge bg-secondary text-white">{{ request('full_part') }} /
                {{ request('live_in_out') }}</span></h6>
        </div>
        <div class="row m-auto" id="maidList">
            @foreach ($maids as $maid)
                @if ($maid->stockstatus == 'Available' || $maid->stockstatus == 'null' || $maid->stockstatus == '')
                    <div class="col-12 col-xl-3 col-lg-3 col-md-6 col-sm-6 ist-item  mt-2 text-center">
                        <div class="maid card listitem p-2 border border-0">

                            <img class="card-img-top" src="{{ asset('storage/' . $maid->photo) }}" alt="">
                            <div class="card-body text-start">
                                <div>
                                    <p>{{ $maid->code }}</p>
                                    <p>{{ $maid->full_part }} / {{ $maid->live_in_out }}</p>
                                    <p>{{ $maid->salary }} <b>Baht</b></p>


                                    <p>{{ Str::words($maid->experience, 8, '...') }}</p>
                                </div>

                            </div>
                            <div class="text-center mb-4">
                                <a href="{{ route('maid#info', $maid->id) }}" class="btn btn-danger rounded-pill w-75">
                                    More Details
                                </a>
                            </div>

                            {{-- <a href="javascript:void(0)" id="show-worker" data-url="{{ route('maid#info', $maid->id) }}" class="btn btn-danger">More Details</a> --}}

                        </div>
                    </div>
                @elseif ($maid->stockstatus == 'Not Available')
                @endif
            @endforeach
        </div>
        <div class="mt-5">
            {{ $maids->links() }}
        </div>
    </div>
    {{-- end maid workers --}}


    {{-- hire for maid --}}

    <div class="text-center mt-3 text-danger">
        <h2>HIRE FOR MAID</h2>
    </div>

    <script>
        $(document).ready(function() {
    // $.ajax({
    //     type : 'get' ,
    //     url : 'http://localhost/maharthai/public/ajax/maid/list' ,
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
                url: '{{ route('filter#maidlist') }}',
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
        <div class="maid card p-2 border border-0" style="width: 20rem; height: 600px; ">

            <img class="card-img-top" src="{{ asset('storage/${response[$i].photo}') }}"
                style="height: 305px; width: 305px;" alt="">
            <div class="card-body text-start">
                <div>
                    <p>${response[$i].code}</p>
                    <p>${response[$i].full_part} / ${response[$i].live_in_out}</p>
                    <p>${response[$i].salary} <b>Baht</b></p>
                    ${response[$i].id}


                    <p>{{ Str::words($maid->experience, 8, '...') }}</p>
                </div>

            </div>
            <div class="text-center mb-4">
                <a href="{{ route('maid#info', $maid->id) }}" class="btn btn-danger rounded-pill w-75">
                    More Details
                </a>
            </div>

            {{-- <a href="javascript:void(0)" id="show-worker" data-url="{{ route('maid#info', ${response[$i].id}) }}" class="btn btn-danger">More Details</a> --}}

        </div>
    </div>

                `;
                    }
                    $('#maidList').html($list);
                }
            });
        } else if ($eventOption1 == 'live-Out') {
            $.ajax({
                type: 'get',
                url: '{{ route('filter#maidlist') }}',
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
        <div class="maid card p-2 border border-0" style="width: 20rem; height: 600px; ">

            <img class="card-img-top" src="{{ asset('storage/${response[$i].photo}') }}"
                style="height: 305px; width: 305px;" alt="">
            <div class="card-body text-start">
                <div>
                    <p>${response[$i].code}</p>
                    <p>${response[$i].full_part} / ${response[$i].live_in_out}</p>
                    <p>${response[$i].salary} <b>Baht</b></p>
                    ${response[$i].id}


                    <p>{{ Str::words($maid->experience, 8, '...') }}</p>
                </div>

            </div>
            <div class="text-center mb-4">
                <a href="{{ route('maid#info', $maid->id) }}" class="btn btn-danger rounded-pill w-75">
                    More Details
                </a>
            </div>

            {{-- <a href="javascript:void(0)" id="show-worker" data-url="{{ route('maid#info', ${response[$i].id}) }}" class="btn btn-danger">More Details</a> --}}

        </div>
    </div>

                `;
                    }
                    $('#maidList').html($list);
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
                url: '{{ route('filter#maidlist') }}',
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
        <div class="maid card p-2 border border-0" style="width: 20rem; height: 600px; ">

            <img class="card-img-top" src="{{ asset('storage/${response[$i].photo}') }}"
                style="height: 305px; width: 305px;" alt="">
            <div class="card-body text-start">
                <div>
                    <p>${response[$i].code}</p>
                    <p>${response[$i].full_part} / ${response[$i].live_in_out}</p>
                    <p>${response[$i].salary} <b>Baht</b></p>
                    <p>${response[$i].id} <b>Baht</b></p>

                    ${response[$i].id}






                    <p>{{ Str::words($maid->experience, 8, '...') }}</p>
                </div>

            </div>
            <div class="text-center mb-4">
                <a href="{{ route('maid#info', $maid->id) }}" class="btn btn-danger rounded-pill w-75">
                    More Details
                </a>
            </div>

            {{-- <a href="javascript:void(0)" id="show-worker" data-url="{{ route('maid#info', ${response[$i].id}) }}" class="btn btn-danger">More Details</a> --}}

        </div>
    </div>

                `;
                    }
                    $('#maidList').html($list);
                }
            });
        } else if ($eventOption == 'part-time') {
            $.ajax({
                type: 'get',
                url: '{{ route('filter#maidlist') }}',
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
        <div class="maid card p-2 border border-0" style="width: 20rem; height: 600px; ">

            <img class="card-img-top" src="{{ asset('storage/${response[$i].photo}') }}"
                style="height: 305px; width: 305px;" alt="">
            <div class="card-body text-start">
                <div>
                    <p>${response[$i].code}</p>
                    <p>${response[$i].full_part} / ${response[$i].live_in_out}</p>
                    <p>${response[$i].salary} <b>Baht</b></p>
                    ${response[$i].id}


                    <p>{{ Str::words($maid->experience, 8, '...') }}</p>
                </div>

            </div>
            <div class="text-center mb-4">
                <a href="{{ route('maid#info', $maid->id) }}" class="btn btn-danger rounded-pill w-75">
                    More Details
                </a>
            </div>

            {{-- <a href="javascript:void(0)" id="show-worker" data-url="{{ route('maid#info', $maid->id) }}" class="btn btn-danger">More Details</a> --}}

        </div>
    </div>

                `;
                    }
                    $('#maidList').html($list);
                }
            });
        }
    });
});
</script>

@endsection
