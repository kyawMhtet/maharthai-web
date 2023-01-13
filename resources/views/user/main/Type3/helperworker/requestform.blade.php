@extends('user.main.layouts.master')

@section('title', 'Helper Request Form')


@section('content')

{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
    <div class="container mt-5">

        <div class="col-12 col-xl-6 col-lg-6 col-md-5 col-sm-12 m-auto mt-5 shadow p-5">
            <h3 class="text-center text-danger">Request Form</h3>
            <form action="https://formspree.io/f/mvoynkqy" method="POST">

                <div>
                    <p>Code*</p>
                    <input type="text" name="helperCode" value="{{ old('helperCode', $helpers->code) }}" class="form-control" placeholder="J..." disabled required>
                </div>
                <div class="mt-3">
                    <p>Name*</p>
                    <input type="text" name="name" class="form-control" placeholder="Enter Name*" required>
                </div>

                <div class="mt-3">
                    <p>Email*</p>
                    <input type="email" name="email" class="form-control" placeholder="example@gmail.com" required>
                </div>

                <div class="mt-3">
                    Phone No.*
                    <input type="text" name="phone" class="form-control mt-2" placeholder="Enter your phone number*" required>
                </div>


                <div class="mt-3 text-end">
                    <a href="{{ route('helper#info', $helpers->id) }}" type="button" class="btn btn-primary">Back</a>
                    <button class="btn btn-danger" type="submit">Send</button>
                </div>
            </form>
        </div>
    </div>



@endsection
