@extends('user.main.layouts.master')

@section('title', 'Maid, Nanny')

<<<<<<< HEAD
@section('content')
=======
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
>>>>>>> c8fa2e517d73995b196903b23a3bde9f26db6725

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

<<<<<<< HEAD
=======
    <nav class="navbar bg-light sticky-top shadow-sm-bottom">
        <div class="container-fluid d-flex px-5">
            {{-- <img src="" alt=""> --}}
            <div>
                <a href="https://maharthailinaung.com/" class="navbar-brand ms-5">
                    {{-- <img src="{{  }}" alt=""> --}}
                    <img src="{{ asset('storage/LOGO.png') }}" alt="" style="width: 110px; height: 90px;">


                </a>
            </div>
            <div class="nav-menu me-5 d-flex">
                <a href="https://maharthailinaung.com/" class="navbar-brand me-5">Home</a>
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

>>>>>>> c8fa2e517d73995b196903b23a3bde9f26db6725

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

    <div class="text-center mt-4 text-danger">
        <h2>NANNY, MAID WORKERS</h2>
    </div>

    <div class="container w-75 text-center mb-3">
        <div class="row m-auto">
            @foreach ($nannies as $nanny)
<<<<<<< HEAD
                <div class="col mt-5" >
                    <div class="nanny card p-2 border border-0" style="width: 20rem; ">
                        {{-- <input type="hidden" name="nannyId" value="{{ $nanny->id }}"> --}}
                        <img class="card-img-top" src="{{ asset('storage/' . $nanny->photo) }}" style="height: 300px; width: 300px;"
=======
                <div class="col mt-5">

                    <div class="nanny card p-2 border border-0" style="width: 21rem;">
                        {{-- <input type="hidden" name="nannyId" value="{{ $nanny->id }}"> --}}
                        <img class="card-img-top" src="{{ asset('storage/' . $nanny->photo) }}" style="height: 320px"
>>>>>>> c8fa2e517d73995b196903b23a3bde9f26db6725
                            alt="">
                        <div class="card-body text-start">
                            <p><b>{{ $nanny->code }}</b></p>
                            <p><b>{{ $nanny->full_part }}</b></p>
                            <p><b>{{ $nanny->salary }}</b></p>
                            {{-- <p><b>{{ $nanny->experience }}</b></p> --}}
                            <p><b>{{ Str::words($nanny->experience,15, '...') }}</b></p>
                        </div>
<<<<<<< HEAD
                        <a href="{{ route('nanny#info', $nanny->id) }}"
                            class="btn btn-danger mb-2 m-auto rounded-pill w-75">
=======
                        {{-- <button type="submit" class="btn btn-danger mb-3 rounded-pill w-75 m-auto">More Detail</button> --}}
                        {{-- <a href="" class="btn btn-danger mb-3 rounded-pill w-75 m-auto">More Detail</a> --}}

                        {{-- <a href="{{ route('nanny#detail', $nanny->id) }}" type="button" class="btn btn-danger rounded-pill w-75 m-auto mb-3" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            More Details --}}



                        {{-- nannyInfo/{{ $nanny->id }} --}}
                        {{-- {{ route('nanny#info', $nanny->id) }} --}}

                        {{-- <a href="" type="button" class="btn btn-danger mb-3 m-auto rounded-pill w-75" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop"  data-bs-target="#workerShowModal">
                                More Details
                        </a> --}}
                        {{--
                        <a href="javascript:void(0)" id="show-worker" data-url="{{ route('nanny#info', $nanny->id) }}"
                            class="btn btn-danger">More Detais</a> --}}



                        <a href="{{ route('nanny#info', $nanny->id) }}" class="btn btn-danger mb-2 m-auto rounded-pill w-75">
>>>>>>> c8fa2e517d73995b196903b23a3bde9f26db6725
                            More Details
                        </a>

                        {{-- <a href="javascript:void(0)" id="show-worker" data-url="{{ route('nanny#info', $nanny->id) }}" class="btn btn-danger">More Details</a> --}}

<<<<<<< HEAD
=======


>>>>>>> c8fa2e517d73995b196903b23a3bde9f26db6725
                    </div>
                </div>
            @endforeach
        </div>
<<<<<<< HEAD
=======

        {{-- <div class="modal fade" id="workerShowModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p id="nanny-code"></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Understood</button>
                    </div>
                </div>
            </div>
        </div> --}}
>>>>>>> c8fa2e517d73995b196903b23a3bde9f26db6725
        <div class="mt-5">
            {{ $nannies->links() }}
        </div>
    </div>
    {{-- end nanny workers --}}


    {{-- hire for nanny --}}

    <div class="text-center mt-5 text-danger">
        <h2>HIRE FOR NANNY</h2>

        <div class="form w-50 m-auto mt-4">
            <form action="">
                <input type="text" class="form-control border border-0" placeholder="Name*">
                <input type="email" class="form-control border border-0" placeholder="example@gmail.com">
                <input type="text" class="form-control border border-0" placeholder="Phone*">
                <input type="text" class="form-control border border-0" placeholder="Full Time or Part Time*">
                <input type="text" class="form-control border border-0" placeholder="Live In or Live Out*">
                <textarea name="" class="form-control" id="" cols="10" rows="5">Note*</textarea>

                <a href="" class="btn btn-danger w-25 py-2 mt-4" type="button">
                    <h5 class="m-auto">REQUEST</h5>
                </a>
            </form>
        </div>
    </div>

    <p class="mt-5 text-center">
        This site is protected by reCAPTCHA and the Google <span class="text-danger">Privacy Policy</span> and <span
            class="text-danger">Terms of Service</span> apply.
    </p>

<<<<<<< HEAD


    <script>
        // $('#workerShowModal').modal('hide');

        // $(document).ready(function(){
        //     $('detail').click(function(){
        //         const id = $(this).attr('data-id');
        //         $.ajax({
        //             url: 'nanny_detail'+id,
        //             type: 'GET',
        //             data: {
        //                 "id" : id
        //             },
        //             success: function(data){
        //                 console.log(data);
        //                 $('#nanny-name').html(data.name);
        //             }
        //         });
        //     });
        // });

        // $(document).ready(function(){
        //     $('body').on('click', '#show-woker', function() {
        //         var userURL = $(this).data('url');
        //         $.get(userURL, function (data){
        //             $('#workerShowModal').modal('show');
        //         });
        //     });
        // });
    </script>



@endsection
=======

    <script>
        // $('#workerShowModal').modal('hide');

        // $(document).ready(function(){
        //     $('detail').click(function(){
        //         const id = $(this).attr('data-id');
        //         $.ajax({
        //             url: 'nanny_detail'+id,
        //             type: 'GET',
        //             data: {
        //                 "id" : id
        //             },
        //             success: function(data){
        //                 console.log(data);
        //                 $('#nanny-name').html(data.name);
        //             }
        //         });
        //     });
        // });

        // $(document).ready(function(){
        //     $('body').on('click', '#show-woker', function() {
        //         var userURL = $(this).data('url');
        //         $.get(userURL, function (data){
        //             $('#workerShowModal').modal('show');
        //         });
        //     });
        // });
    </script>
</body>

</html>





{{-- <div id="info" class="">
    <div class="img col-6">
        @if ($nanny->photo != null)
            <img src="{{ asset('storage/' . $nanny->photo) }}" class="img-thumbnail" alt="...">
        @endif
    </div>

    <div class="col info d-flex mt-3" style="text-align: justify;">
        <div>
            <p><b>Code :</b><span id="nanny-id"></span></p>
            <p><b>Name :</b><span id="nanny-name"></span></p>
            <p><b>Position :</b><span></span></p>
            <p><b>DOB :</b><span></span></p>
            <p><b>Nationality :</b><span></span></p>
            <p><b>Religion :</b><span></span></p>
            <p><b>Weight :</b><span></span></p>
            <p><b>Height :</b><span></span></p>
            <p><b>Salary :</b><span></span></p>
            <p><b>Language :</b><span></span></p>
            <p><b>Status :</b><span></span></p>
            <p><b>Full Time/Part Time :</b><span></span></p>
            <p><b>Live In/Live Out :</b><span></span></p>
            <p><b>Experience :</b><span></span></p>
            <p class="text-danger"><b>Remark:</b><span></span></p>
            <div>
                <p><b>(1) Pets :</b><span></span></p>
                <p><b>(2) Dog : Small :</b><span></span></p>
                <p><b>(3) Dog : Big :</b><span></span></p>
                <p><b>(4) Vaccine :</b><span></span></p>
            </div>
            <p><b>Note : </b></p>
        </div>


        <div class="ms-4">
            <p>{{ old('nannyCode', $nanny->code) }}</p>
            <p>{{ old('nannyName', $nanny->name) }}</p>
            <p>{{ old('nannyPosition', $nanny->position) }}</p>
            <p>{{ old('nannyDoB', $nanny->date_of_birth) }}</p>
            <p>{{ old('nannyNationality', $nanny->nationality) }}</p>
            <p>{{ old('nannyReligion', $nanny->religion) }}</p>
            <p>{{ old('nannyWeight', $nanny->weight) }}</p>
            <p>{{ old('nannyHeight', $nanny->height) }}</p>
            <p>{{ old('nannySalary', $nanny->salary) }}</p>
            <p>{{ old('nannyLanguage', $nanny->language) }}</p>
            <p>{{ old('nannyStatus', $nanny->status) }}</p>
            <p>{{ old('full_part', $nanny->full_part) }}</p>
            <p>{{ old('live_in_out', $nanny->live_in_out) }}</p>
            <p>{{ old('nannyExperience', $nanny->experience) }}</p>
            <br>
            <div class="mt-3">
                <p>{{ old('pets', $nanny->pet) }}</p>
                <p>{{ old('smallDog', $nanny->dog_small) }}</p>
                <p>{{ old('bigDog', $nanny->dog_big) }}</p>
                <p>{{ old('nannyVaccine', $nanny->vaccine) }}</p>
                <p>{{ old('note', $nanny->note) }}</p>
            </div>
        </div>
    </div>
</div> --}}
>>>>>>> c8fa2e517d73995b196903b23a3bde9f26db6725
