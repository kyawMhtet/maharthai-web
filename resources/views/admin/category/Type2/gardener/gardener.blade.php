@extends('admin.layouts.master')

@section('title', 'Gardener List')

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
                                <h2 class="title-1">Gardener List</h2>

                            </div>
                        </div>
                        <div class="table-data__tool-right">
                            <a href="{{ route('gardener#create') }}">
                                <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                    <i class="zmdi zmdi-plus"></i>Add Gardener
                                </button>
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-3 mt-2">
                            <h4 class="text-secondary">Search Key : <span class="text-danger">{{ request('key') }}</span>
                            </h4>
                        </div>
                        <div class="mb-3 col-3 offset-6">
                            <form action="{{ route('gardener#page') }}" method="get">
                                @csrf
                                <div class="d-flex">
                                    <input type="text" name="key" class="form-control" placeholder="code#"
                                        value="{{ request('key') }}">
                                    <button class="btn bg-dark text-white" type="submit"><i
                                            class="fa-solid fa-magnifying-glass"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <button type="button" class="btn btn-primary mb-3">
                        Total - <span class="badge bg-secondary">{{ $gardeners->total() }}</span>
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



                    @if (count($gardeners) != 0)

                    <div class="container gardener-list" style="--bs-columns: 3;">
                        <div class="row" style="grid-gap: 10px;">
                            @foreach ($gardeners as $gardener)
                                <div class="card p-2 shadow" id="" style="width: 22rem;">
                                    <img class="card-img-top" id="card"
                                        src="{{ asset('storage/' . $gardener->photo) }}" style="height: auto; width: 340px;"
                                        alt="">
                                    <div class="card-body d-flex" style="justify-content: space-between">
                                        <div class="gardenerinfo">
                                            <div class="d-flex">
                                                <p><b>Code# :</b></p>
                                                <p class="ms-">{{ $gardener->code }}</p>
                                            </div>

                                            <div class="d-flex">
                                                @if ($gardener->stockstatus == 'Available')
                                                    <p class="text-success">{{ $gardener->stockstatus }}</p>
                                                @elseif ($gardener->stockstatus == 'Not Available')
                                                    <p class="text-danger">{{ $gardener->stockstatus }}</p>
                                                @endif

                                            </div>

                                            <div class="d-flex">
                                                <p><b>Note:</b></p>

                                                <p><b>{{ Str::words($gardener->note,15, '...') }}</b></p>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="card-body text-center">


                                        <a href="{{ route('gardener#updatePage', $gardener->id) }}" class="card-link">
                                            <button class="btn btn-secondary">View More</button>
                                        </a>

                                        <a href="{{ route('gardener#delete', $gardener->id) }}" class="card-link">
                                            <button class="btn btn-danger">Delete</button>
                                        </a>
                                    </div>

                                </div>
                            @endforeach
                        </div>
                        <div class="mt-4">
                            {{ $gardeners->links() }}

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
