@extends('admin.layouts.master')

@section('title', 'Nanny List')

@section('content')

    <!-- MAIN CONTENT-->
    {{-- <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="col-md-12">
                    <!-- DATA TABLE -->
                    <div class="table-data__tool">
                        <div class="table-data__tool-left">
                            <div class="overview-wrap">
                                <h2 class="title-1">Nanny List</h2>

                            </div>
                        </div>
                        <div class="table-data__tool-right">
                            <a href="{{ route('nanny#create') }}">
                                <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                    <i class="zmdi zmdi-plus"></i>Add Nanny
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-3 offset-8">
                                <a href="{{ route('nanny#page') }}"><button class="btn bg-dark text-white my-3">
                                        Back</button></a>
                            </div>
                        </div>
                        <div class="col-lg-6 offset-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <h3 class="text-center title-2 p-2">Edit Nanny</h3>
                                    </div>
                                    <hr>
                                    <form action="{{ route('nanny#update', $nanny->id) }}" method="post"
                                        enctype="multipart/form-data" novalidate="novalidate">
                                        @csrf
                                        <div class="form-group p-3">
                                            <div class="mb-2">
                                                <label for="cc-payment" class="control-label mb-1">Code#</label>
                                                <input type="hidden" name="nannyId" value="{{ $nanny->id }}">
                                                <input id="cc-payment" name="nannyCode" type="text"
                                                    value="{{ old('nannyCode', $nanny->code) }}"
                                                    class="form-control @error('nannyCode') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="code#">
                                                @error('nannyCode')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Photo</label>
                                                <input type="hidden" name="nannyId" value="{{ $nanny->id }}">
                                                    @if($nanny->photo != null)
                                                        <img src="{{ asset('storage/'. $nanny->photo) }}" alt="">
                                                        <input type="file" value="{{ old('nannyPhoto', $nanny->photo) }}" name="nannyPhoto" class="form-control">
                                                    @endif




                                                @error('nannyPhoto')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Name</label>
                                                <input type="hidden" name="nannyId" value="{{ $nanny->id }}">

                                                <input id="cc-payment" name="nannyName" type="text"
                                                    value="{{ old('nannyName', $nanny->name) }}"
                                                    class="form-control @error('nannyName') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="Enter name...">
                                                @error('nannyName')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Date of Birth</label>
                                                <input type="hidden" name="nannyId" value="{{ $nanny->id }}">

                                                <input id="cc-payment" name="nannyDoB" type="text"
                                                    value="{{ old('nannyDoB', $nanny->date_of_birth) }}"
                                                    class="form-control @error('nannyDoB') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false"
                                                    placeholder="Date of Birth...">
                                                @error('nannyDoB')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Position</label>
                                                <input type="hidden" name="nannyId" value="{{ $nanny->id }}">

                                                <input id="cc-payment" name="nannyPosition" type="text"
                                                    value="{{ old('nannyPosition', $nanny->position) }}"
                                                    class="form-control @error('nannyPosition') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="position...">
                                                @error('nannyPosition')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Nationality</label>
                                                <input type="hidden" name="nannyId" value="{{ $nanny->id }}">

                                                <input id="cc-payment" name="nannyNationality" type="text"
                                                    value="{{ old('nannyNationality', $nanny->nationality) }}"
                                                    class="form-control @error('nannyNationality') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="nationality...">
                                                @error('nannyNationality')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Religion</label>
                                                <input type="hidden" name="nannyId" value="{{ $nanny->id }}">

                                                <input id="cc-payment" name="nannyReligion" type="text"
                                                    value="{{ old('nannyReligion', $nanny->religion) }}"
                                                    class="form-control @error('nannyReligion') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="religion...">
                                                @error('nannyReligion')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Weight</label>
                                                <input type="hidden" name="nannyId" value="{{ $nanny->id }}">

                                                <input id="cc-payment" name="nannyWeight" type="text"
                                                    value="{{ old('nannyWeight', $nanny->weight) }}"
                                                    class="form-control @error('nannyWeight') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="weight...">
                                                @error('nannyWeight')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Height</label>
                                                <input type="hidden" name="nannyId" value="{{ $nanny->id }}">

                                                <input id="cc-payment" name="nannyHeight" type="text"
                                                    value="{{ old('nannyHeight', $nanny->height) }}"
                                                    class="form-control @error('nannyHeight') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="height...">
                                                @error('nannyHeight')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Status</label>
                                                <input type="hidden" name="nannyId" value="{{ $nanny->id }}">

                                                <input id="cc-payment" name="nannyStatus" type="text"
                                                    value="{{ old('nannyStatus', $nanny->status) }}"
                                                    class="form-control @error('nannyStatus') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="status...">
                                                @error('nannyStatus')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Salary</label>
                                                <input type="hidden" name="nannyId" value="{{ $nanny->id }}">

                                                <input id="cc-payment" name="nannySalary" type="text"
                                                    value="{{ old('nannySalary', $nanny->salary) }}"
                                                    class="form-control @error('nannySalary') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="salary...">
                                                @error('nannySalary')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                Working Time:
                                                <div class="d-flex">
                                                    <div>
                                                        <div class="form-check">
                                                <input type="hidden" name="nannyId" value="{{ $nanny->id }}">

                                                            <input class="form-check-input" type="radio"
                                                                value="{{ old('full_part', $nanny->full_part) }}"
                                                                name="full_part" id="fulltime">
                                                            <label class="form-check-label" for="fulltime">
                                                                Full-time
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                <input type="hidden" name="nannyId" value="{{ $nanny->id }}">

                                                            <input class="form-check-input" type="radio"
                                                                value="{{ old('full_part', $nanny->full_part) }}"
                                                                name="full_part" id="parttime">
                                                            <label class="form-check-label" for="parttime">
                                                                Part-time
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="ms-5">
                                                        <div class="form-check">
                                                <input type="hidden" name="nannyId" value="{{ $nanny->id }}">

                                                            <input class="form-check-input" type="radio"
                                                                value="{{ old('live_in_out', $nanny->live_in_out) }}"
                                                                name="live_in_out" id="livein">
                                                            <label class="form-check-label" for="livein">
                                                                Live-In
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                <input type="hidden" name="nannyId" value="{{ $nanny->id }}">

                                                            <input class="form-check-input" type="radio"
                                                                value="{{ old('live_in_out', $nanny->live_in_out) }}"
                                                                name="live_in_out" id="liveout">
                                                            <label class="form-check-label" for="liveout">
                                                                Live-Out
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                @error('workingTime', 'liveIn')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>
                                                Experience : <br>
                                                <div class="form-floating">
                                                <input type="hidden" name="nannyId" value="{{ $nanny->id }}">

                                                    <textarea class="form-control" name="nannyExperience"
                                                        placeholder="Experience" id="experience">{{ old('nannyExperience', $nanny->experience) }}</textarea>
                                                    <label for="experience">experience...</label>
                                                </div>
                                                @error('nannyExperience')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Language</label>
                                                <input type="hidden" name="nannyId" value="{{ $nanny->id }}">

                                                <input id="cc-payment" name="nannyLanguage" type="text"
                                                    value="{{ old('nannyLanguage', $nanny->language) }}"
                                                    class="form-control @error('nannyLanguage') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="language...">
                                                @error('nannyLanguage')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror



                                            </div>

                                        </div>

                                        <div class="mt-2 ms-3">
                                            <button id="payment-button" type="submit"
                                                class="btn btn-danger btn-info btn-block">
                                                <span id="payment-button-amount">Update</span>
                                                <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                <i class="fa-solid fa-circle-right"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div> --}}
    <!-- END MAIN CONTENT-->
<style>
    .info p {
        margin-bottom: 10px;
    }
</style>
<div class="main-content">
    <div class="container">
        <div class="text-center">
            <a href="{{ route('nanny#page') }}" class="text-decoration-none text-dark">
                <i class="fa-solid fa-left-long"></i> back
            </a>
        </div>
        <div class="w-50 m-auto shadow p-5 bg-light">
            <div id="info">
                <div class="img col-4 me-3">
                    <input type="hidden" name="nannyId" value="{{ $nanny->id }}">
                    @if($nanny->photo != null)
                    <img src="{{ asset('storage/'. $nanny->photo) }}" class="img-thumbnail" alt="...">
                    @endif
                </div>

                <div class="col info d-flex mt-3">
                    <div>
                        <p><b>Code :</b></p>
                        <p><b>Name :</b></p>
                        <p><b>Position :</b></p>
                        <p><b>DOB :</b></p>
                        <p><b>Nationality :</b></p>
                        <p><b>Religion :</b></p>
                        <p><b>Weight :</b></p>
                        <p><b>Height :</b></p>
                        <p><b>Salary :</b></p>
                        <p><b>Language :</b></p>
                        <p><b>Status :</b></p>
                        <p><b>Full Time/Part Time :</b></p>
                        <p><b>Live In/Live Out :</b></p>
                        <p><b>Experience :</b></p>
                        <p class="text-danger"><b>Remark:</b></p>
                        <div>
                            <p><b>(1) Pets :</b></p>
                            <p><b>(2) Dog : Small :</b></p>
                            <p><b>(3) Dog : Big :</b></p>
                            <p><b>(4) Vaccine :</b></p>
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
                        <div class="mt-2">
                            <p>{{ old('pets', $nanny->pet) }}</p>
                            <p>{{ old('smallDog', $nanny->dog_small) }}</p>
                            <p>{{ old('bigDog', $nanny->dog_big) }}</p>
                            <p>{{ old('nannyVaccine', $nanny->vaccine) }}</p>
                            <p>{{ old('note', $nanny->note) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-2">
            {{-- <button onclick="window.print()">Print this page</button> --}}
            <button class="btn btn-primary me-2" onclick="printPage()">Print</button>
            <a href="{{ route('nanny#editPage', $nanny->id) }}" class="card-link">
                <button class="btn btn-secondary">Edit</button>
            </a>
        </div>

    </div>
</div>


<script>
    function printPage(){
        var body = document.getElementById('body').innerHTML;
        var info = document.getElementById('info').innerHTML;
        document.getElementById('body').innerHTML = info;
        window.print();
        document.getElementById('body').innerHTML = body;

    }
</script>






{{-- <img src="{{ asset('storage/'. $nanny->photo) }}" alt="">
<input type="file" value="{{ old('nannyPhoto', $nanny->photo) }}" name="nannyPhoto" class="form-control"> --}}

@endsection
