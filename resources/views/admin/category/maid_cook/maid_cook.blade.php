@extends('admin.layouts.master')

@section('title', 'Maid, Cook List')

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
                                <h2 class="title-1">Maid, Cook List</h2>

                            </div>
                        </div>
                        <div class="table-data__tool-right">
                            <a href="{{ route('nanny#create') }}">
                                <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                    <i class="zmdi zmdi-plus"></i>Add maid, cook
                                </button>
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-3 mt-2">
                            <h4 class="text-secondary">Search Key : <span class="text-danger">{{ request('key') }}</span></h4>
                        </div>
                        <div class="mb-3 col-3 offset-6">
                            <form action="{{ route('nanny#page') }}" method="get">
                                @csrf
                                <div class="d-flex">
                                    <input type="text" name="key" class="form-control" placeholder="code#" value="{{ request('key') }}">
                                    <button class="btn bg-dark text-white" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>

                    {{-- <button type="button" class="btn btn-primary mb-3">
                        Total - <span class="badge bg-secondary">{{ $nannies->total() }}</span>
                      </button> --}}

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

                    <h2>fawefawefawef</h2>

                    {{-- @if (count($nannies) != 0)

                        <div class="container nanny-list" style="--bs-columns: 3;">
                            <div class="row" style="grid-gap: 10px;">
                                @foreach ($nannies as $nanny)
                                    <div class="card p-2 shadow" id="" style="width: 22rem;">
                                        <img class="card-img-top" id="card" src="{{ asset('storage/'. $nanny->photo ) }}" style="height: 350px" alt="">
                                        <div class="card-body d-flex" style="justify-content: space-between">
                                            <div class="nannyinfo">
                                                <span><b>Code#</b></span> : <span class="text-end">{{ $nanny->code }}</span><br>
                                                <span><b>Note </b></span> : <span class="text-end">{{ $nanny->note }}</span>

                                            </div>
                                        </div>
                                        <div class="card-body text-center">


                                            <a href="{{ route('nanny#updatePage', $nanny->id) }}" class="card-link">
                                                <button class="btn btn-secondary">View More</button>
                                            </a>

                                            <a href="{{ route('nanny#delete', $nanny->id) }}" class="card-link">
                                                <button class="btn btn-danger">Delete</button>
                                            </a>
                                        </div>

                                        <div class="text-center">
                                            <a href="">
                                                <button class="btn" id="show">Show</button>
                                            </a>
                                            <a href="">
                                                <button class="btn" id="hide">Hide</button>
                                            </a>
                                        </div>


                                    </div>
                                @endforeach
                            </div>
                            <div class="mt-4">
                                {{ $nannies->links() }}

                            </div>
                        </div>
                        awefawefwef


                    @else
                      <h3 class="text-secondary text-center mt-5">No Data Found...</h3>

                    @endif --}}
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
