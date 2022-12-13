@extends('user.main.layouts.master')

@section('title', 'Premium Nanny')

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

    .premiumnanny {
        transition: all 0.5s;
    }

    .premiumnanny:hover {
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
    <h2>PREMIUM NANNY WORKERS</h2>
</div>

<div class="container w-75 text-center mb-3">
    <div class="row m-auto">
        @foreach ($premiumnannies as $premiumnanny)
            <div class="col mt-5">

                <div class="premiumnanny card p-2 border border-0" style="width: 20rem; height: 600px;">

                    <img class="card-img-top" src="{{ asset('storage/' . $premiumnanny->photo) }}" style="height: 305px; width: 305px;"
                        alt="">
                    <div class="card-body text-start">
                        <p>{{ $premiumnanny->code }}</p>
                        <p>{{ $premiumnanny->full_part }} / {{ $premiumnanny->live_in_out }}</p>
                        <p>{{ $premiumnanny->salary }} <b>Baht</b></p>
                        <p>{{ Str::words($premiumnanny->experience,8, '...') }}</p>

                    </div>
                    <div class="text-center mb-4">
                        <a href="{{ route('premiumnanny#info', $premiumnanny->id) }}"
                            class="btn btn-danger mb-2 rounded-pill w-75">
                            More Details
                        </a>
                    </div>

                </div>
            </div>
        @endforeach
    </div>
    <div class="mt-5">
        {{ $premiumnannies->links() }}
    </div>
</div>
{{-- end nanny workers --}}


{{-- hire for nanny --}}

<div class="text-center mt-3 text-danger">
    <h2>HIRE FOR PREMIUM NANNY</h2>
</div>


<div class="form w-50 m-auto mt-4 text-center">
    <form action="https://formspree.io/f/mvoynkqy" method="POST">
        <input type="text" class="form-control border border-0" placeholder="Name*" required>
        <input type="email" class="form-control border border-0" placeholder="example@gmail.com" required>
        <input type="text" class="form-control border border-0" placeholder="Phone*" required>
        <input type="text" class="form-control border border-0" placeholder="Full Time or Part Time*" required>
        <input type="text" class="form-control border border-0" placeholder="Live In or Live Out*" required>
        <textarea name="" class="form-control" id="" placeholder="Note*" cols="10" rows="5"></textarea>

        <a href="" class="btn btn-danger w-25 py-2 mt-4" type="button">
            <h5 class="m-auto">REQUEST</h5>
        </a>
    </form>
</div>
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