@extends('admin.layouts.master')

@section('title', 'Maid, Pet Care List')

@section('content')

    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="col-md-12">
                    <!-- DATA TABLE -->
                    <div class="table-data__tool">
                        <div class="table-data__tool-left">
                            <div class="overview-wrap">
                                <h2 class="title-1">Maid, Pet Care List</h2>

                            </div>
                        </div>
                        <div class="table-data__tool-right">
                            <a href="{{ route('maidpetcare#create') }}">
                                <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                    <i class="zmdi zmdi-plus"></i>Add Maid, Pet Care
                                </button>
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-3 mt-2">
                            <h4 class="text-secondary">Search Key : <span class="text-danger">{{ request('key') }}</span></h4>
                        </div>
                        <div class="mb-3 col-3 offset-6">
                            <form action="{{ route('maidpetcare#page') }}" method="get">
                                @csrf
                                <div class="d-flex">
                                    <input type="text" name="key" class="form-control" placeholder="code#" value="{{ request('key') }}">
                                    <button class="btn bg-dark text-white" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <button type="button" class="btn btn-primary mb-3">
                        Total - <span class="badge bg-secondary">{{ $maidpetcares->total() }}</span>
                      </button>

                    @if (session('createSuccess'))
                        <div class="col-4 offset-8">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="fa-solid fa-circle-check"></i> {{ session('createSuccess') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        </div>
                    @endif()

                    @if (session('deleteSuccess'))
                    <div class="col-4 offset-8">
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="fa-solid fa-circle-check"></i> {{ session('deleteSuccess') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    </div>
                @endif()

                    @if (count($maidpetcares) != 0)

                        <div class="container maidpetcare-list" style="--bs-columns: 3;">
                            <div class="row" style="grid-gap: 10px;">
                                @foreach ($maidpetcares as $maidpetcare)
                                    <div class="card p-2 shadow" id="" style="width: 22rem;">
                                        <img class="card-img-top" id="card" src="{{ asset('storage/'. $maidpetcare->photo ) }}" style="height: 350px" alt="">
                                        <div class="card-body d-flex" style="justify-content: space-between">
                                            <div class="maidpetcareinfo">
                                                <div class="d-flex">
                                                    <p><b>Code# :</b></p>
                                                    <p class="ms-">{{ $maidpetcare->code }}</p>
                                                </div>

                                                <div class="d-flex">
                                                    @if ($maidpetcare->stockstatus == 'Available')
                                                        <p class="text-success">{{ $maidpetcare->stockstatus }}</p>
                                                    @elseif ($maidpetcare->stockstatus == 'Not Available')
                                                        <p class="text-danger">{{ $maidpetcare->stockstatus }}</p>
                                                    @endif

                                                </div>

                                                <div class="d-flex">
                                                    <p><b>Note:</b></p>
                                                    {{-- <p class="ms-2">{{ $maidpetcare->note }}</p> --}}
                                                    <p><b>{{ Str::words($maidpetcare->note,15, '...') }}</b></p>

                                                </div>



                                            </div>
                                        </div>
                                        <div class="card-body text-center">


                                            <a href="{{ route('maidpetcare#updatePage', $maidpetcare->id) }}" class="card-link">
                                                <button class="btn btn-secondary">View More</button>
                                            </a>

                                            <a href="{{ route('maidpetcare#delete', $maidpetcare->id) }}" class="card-link">
                                                <button class="btn btn-danger">Delete</button>
                                            </a>
                                        </div>

                                        {{-- <div class="text-center">
                                            <a href="">
                                                <button class="btn" id="show">Show</button>
                                            </a>
                                            <a href="">
                                                <button class="btn" id="hide">Hide</button>
                                            </a>
                                        </div> --}}


                                    </div>
                                @endforeach
                            </div>
                            <div class="mt-4">
                                {{ $maidpetcares->links() }}

                            </div>
                        </div>



                    @else
                      <h3 class="text-secondary text-center mt-5">No Data Found...</h3>

                    @endif
                    <!-- END DATA TABLE -->
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT-->

    <script>
        // $(document).ready(function(){
        //     $("#card").show();

        //     if(sessionStorage.getItem("Show") == "false")
        //     {
        //         $("#card").hide();

        //     }
        // });
    </script>

@endsection
