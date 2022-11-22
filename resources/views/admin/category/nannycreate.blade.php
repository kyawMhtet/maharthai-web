@extends('admin.layouts.master')

@section('title', 'Nanny List')

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
                                        <h3 class="text-center title-2 p-2">Category Form</h3>
                                    </div>
                                    <hr>
                                    <form action="{{ route('nanny#aftercreate') }}" method="post"
                                        enctype="multipart/form-data" novalidate="novalidate">
                                        @csrf
                                        <div class="form-group p-3">
                                            <div class="mb-2">
                                                <label for="cc-payment" class="control-label mb-1">Code#</label>
                                                <input id="cc-payment" name="nannyCode" type="text"
                                                    value="{{ old('nannyCode') }}"
                                                    class="form-control @error('nannyCode') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="code#">
                                                @error('nannyCode')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Photo</label>
                                                <input id="cc-payment" name="nannyPhoto" type="file"
                                                    value="{{ old('nannyPhoto') }}"
                                                    class="form-control @error('nannyPhoto') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="upload photo...">
                                                @error('nannyPhoto')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Name</label>
                                                <input id="cc-payment" name="nannyName" type="text"
                                                    value="{{ old('nannyName') }}"
                                                    class="form-control @error('nannyName') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="Enter name...">
                                                @error('nannyName')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Date of Birth</label>
                                                <input id="cc-payment" name="nannyDoB" type="text"
                                                    value="{{ old('nannyDoB') }}"
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
                                                <input id="cc-payment" name="nannyPosition" type="text"
                                                    value="{{ old('nannyPosition') }}"
                                                    class="form-control @error('nannyPosition') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="position...">
                                                @error('nannyPosition')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Nationality</label>
                                                <input id="cc-payment" name="nannyNationality" type="text"
                                                    value="{{ old('nannyNationality') }}"
                                                    class="form-control @error('nannyNationality') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="nationality...">
                                                @error('nannyNationality')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Religion</label>
                                                <input id="cc-payment" name="nannyReligion" type="text"
                                                    value="{{ old('nannyReligion') }}"
                                                    class="form-control @error('nannyReligion') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="religion...">
                                                @error('nannyReligion')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Weight</label>
                                                <input id="cc-payment" name="nannyWeight" type="text"
                                                    value="{{ old('nannyWeight') }}"
                                                    class="form-control @error('nannyWeight') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="weight...">
                                                @error('nannyWeight')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Height</label>
                                                <input id="cc-payment" name="nannyHeight" type="text"
                                                    value="{{ old('nannyHeight') }}"
                                                    class="form-control @error('nannyHeight') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="height...">
                                                @error('nannyHeight')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Status</label>
                                                <input id="cc-payment" name="nannyStatus" type="text"
                                                    value="{{ old('nannyStatus') }}"
                                                    class="form-control @error('nannyStatus') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="status...">
                                                @error('nannyStatus')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Salary</label>
                                                <input id="cc-payment" name="nannySalary" type="text"
                                                    value="{{ old('nannySalary') }}"
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
                                                            <input class="form-check-input" type="radio"
                                                                value="full_time" name="full_part" id="fulltime">
                                                            <label class="form-check-label" for="fulltime">
                                                                Full-time
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                value="part_time" name="full_part" id="parttime">
                                                            <label class="form-check-label" for="parttime">
                                                                Part-time
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="ms-5">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                value="live_In" name="live_in_out" id="livein">
                                                            <label class="form-check-label" for="livein">
                                                                Live-In
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                value="live_Out" name="live_in_out" id="liveout">
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
                                                    <textarea class="form-control" name="nannyExperience" placeholder="Experience" id="experience"></textarea>
                                                    <label for="experience">experience...</label>
                                                </div>
                                                @error('nannyExperience')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Language</label>
                                                <input id="cc-payment" name="nannyLanguage" type="text"
                                                    value="{{ old('nannyLanguage') }}"
                                                    class="form-control @error('nannyLanguage') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="language...">
                                                @error('nannyLanguage')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror


                                                <br>
                                                <p class="text-danger"><b>Remark</b></p>

                                                Pets :
                                                <div class="ms-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="Yes" name="pets" id="">
                                                        <label class="form-check-label" for="">
                                                          Yes
                                                        </label>
                                                      </div>
                                                      <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="No" name="pets" id="" >
                                                        <label class="form-check-label" for="">
                                                          No
                                                        </label>
                                                      </div>
                                                </div>

                                                <br>

                                                Dog :
                                                <div class="ms-3 d-flex">
                                                    <div>
                                                        Small :
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" value="Yes" name="smallDog" id="">
                                                            <label class="form-check-label" for="">
                                                              Yes
                                                            </label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" value="No" name="smallDog" id="" >
                                                            <label class="form-check-label" for="">
                                                              No
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="ms-5">
                                                        Big :
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" value="Yes" name="bigDog" id="">
                                                            <label class="form-check-label" for="">
                                                              Yes
                                                            </label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" value="No" name="bigDog" id="" >
                                                            <label class="form-check-label" for="">
                                                              No
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mt-3 input-group">
                                                    <span class="input-group-text">Vaccine</span>
                                                    <textarea class="form-control" name="nannyVaccine" aria-label="With textarea"></textarea>
                                                </div>
                                                <br>
                                                Note : (optional)
                                                <div>
                                                    <textarea class="form-control" name="note" id="" cols="" rows=""></textarea>
                                                </div>


                                            </div>
                                        </div>

                                        <div class="mt-2 ms-3">
                                            <button id="payment-button" type="submit"
                                                class="btn btn-danger btn-info btn-block">
                                                <span id="payment-button-amount">Create</span>
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
    </div>
    <!-- END MAIN CONTENT-->

@endsection
