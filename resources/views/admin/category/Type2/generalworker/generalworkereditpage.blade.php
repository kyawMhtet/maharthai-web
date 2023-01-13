@extends('admin.layouts.master')

@section('title', 'General Worker List')

@section('content')

    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="col-md-12">

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-3 offset-8">
                                <a href="{{ route('generalworker#updatePage', $generalworker->id) }}"><button
                                        class="btn bg-dark text-white my-3">
                                        Back</button></a>
                            </div>
                        </div>
                        <div class="col-lg-6 offset-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <h3 class="text-center title-2 p-2">Edit General Worker Info</h3>
                                    </div>
                                    <hr>
                                    <form action="{{ route('generalworker#update', $generalworker->id) }}" method="post"
                                        enctype="multipart/form-data" novalidate="novalidate">
                                        @csrf
                                        <div class="form-group p-3">
                                            <div class="mb-2">
                                                <label for="cc-payment" class="control-label mb-1">Code#</label>
                                                <input type="hidden" name="generalworkerId" value="{{ $generalworker->id }}">
                                                <input id="cc-payment" name="generalworkerCode" type="text"
                                                    value="{{ old('generalworkerCode', $generalworker->code) }}"
                                                    class="form-control @error('generalworkerCode') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="code#">
                                                @error('generalworkerCode')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Photo</label>
                                                <input type="hidden" name="generalworkerId" value="{{ $generalworker->id }}">
                                                @if ($generalworker->photo != null)
                                                    <img src="{{ asset('storage/' . $generalworker->photo) }}"
                                                        class="img-thumbnail" alt="...">
                                                @endif
                                                <input id="cc-payment" name="generalworkerPhoto" type="file"
                                                    value="{{ old('generalworkerPhoto', $generalworker->generalworkerPhoto) }}"
                                                    class="form-control @error('generalworkerPhoto') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="upload photo...">
                                                @error('generalworkerPhoto')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Name</label>
                                                <input type="hidden" name="generalworkerId" value="{{ $generalworker->id }}">
                                                <input id="cc-payment" name="generalworkerName" type="text"
                                                    value="{{ old('generalworkerName', $generalworker->name) }}"
                                                    class="form-control @error('generalworkerName') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="Enter name...">
                                                @error('generalworkerName')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Date of Birth</label>
                                                <input type="hidden" name="generalworkerId" value="{{ $generalworker->id }}">
                                                <input id="cc-payment" name="generalworkerDoB" type="text"
                                                    value="{{ old('generalworkerDoB', $generalworker->date_of_birth) }}"
                                                    class="form-control @error('generalworkerDoB') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false"
                                                    placeholder="Date of Birth...">
                                                @error('generalworkerDoB')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Position</label>
                                                <input type="hidden" name="generalworkerId" value="{{ $generalworker->id }}">
                                                <input id="cc-payment" name="generalworkerPosition" type="text"
                                                    value="{{ old('generalworkerPosition', $generalworker->position) }}"
                                                    class="form-control @error('generalworkerPosition') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="position...">
                                                @error('generalworkerPosition')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Nationality</label>
                                                <input type="hidden" name="generalworkerId" value="{{ $generalworker->id }}">
                                                <input id="cc-payment" name="generalworkerNationality" type="text"
                                                    value="{{ old('generalworkerNationality', $generalworker->nationality) }}"
                                                    class="form-control @error('generalworkerNationality') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false"
                                                    placeholder="nationality...">
                                                @error('generalworkerNationality')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Religion</label>
                                                <input type="hidden" name="generalworkerId" value="{{ $generalworker->id }}">
                                                <input id="cc-payment" name="generalworkerReligion" type="text"
                                                    value="{{ old('generalworkerReligion', $generalworker->religion) }}"
                                                    class="form-control @error('generalworkerReligion') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="religion...">
                                                @error('generalworkerReligion')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Weight</label>
                                                <input type="hidden" name="generalworkerId" value="{{ $generalworker->id }}">
                                                <input id="cc-payment" name="generalworkerWeight" type="text"
                                                    value="{{ old('generalworkerWeight', $generalworker->weight) }}"
                                                    class="form-control @error('generalworkerWeight') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="weight...">
                                                @error('generalworkerWeight')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Height</label>
                                                <input type="hidden" name="generalworkerId" value="{{ $generalworker->id }}">
                                                <input id="cc-payment" name="generalworkerHeight" type="text"
                                                    value="{{ old('generalworkerHeight', $generalworker->height) }}"
                                                    class="form-control @error('generalworkerHeight') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="height...">
                                                @error('generalworkerHeight')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Status</label>
                                                <input type="hidden" name="generalworkerId" value="{{ $generalworker->id }}">
                                                <input id="cc-payment" name="generalworkerStatus" type="text"
                                                    value="{{ old('generalworkerStatus', $generalworker->status) }}"
                                                    class="form-control @error('generalworkerStatus') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="status...">
                                                @error('generalworkerStatus')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Salary</label>
                                                <input type="hidden" name="generalworkerId" value="{{ $generalworker->id }}">
                                                <input id="cc-payment" name="generalworkerSalary" type="text"
                                                    value="{{ old('generalworkerSalary', $generalworker->salary) }}"
                                                    class="form-control @error('generalworkerSalary') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="salary...">
                                                @error('generalworkerSalary')
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
                                                                value="full-time"
                                                                @if (old('full_part', $generalworker->full_part) == 'full-time') checked @endif
                                                                name="full_part" id="fulltime">
                                                            <label class="form-check-label" for="fulltime">
                                                                Full-time
                                                            </label>
                                                            <input type="hidden" name="generalworkerId"
                                                                value="{{ $generalworker->id }}">
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                value="part-time"
                                                                @if (old('full_part', $generalworker->full_part) == 'part-time') checked @endif
                                                                name="full_part" id="parttime">
                                                            <label class="form-check-label" for="parttime">
                                                                Part-time
                                                            </label>
                                                            <input type="hidden" name="generalworkerId"
                                                                value="{{ $generalworker->id }}">
                                                        </div>
                                                    </div>

                                                    <div class="ms-5">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                value="live-In"
                                                                @if (old('live_in_out', $generalworker->live_in_out) == 'live-In') checked @endif
                                                                name="live_in_out" id="livein">
                                                            <label class="form-check-label" for="livein">
                                                                Live-In
                                                            </label>
                                                            <input type="hidden" name="generalworkerId"
                                                                value="{{ $generalworker->id }}">
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                value="live-Out"
                                                                @if (old('live_in_out', $generalworker->live_in_out) == 'live-Out') checked @endif
                                                                name="live_in_out" id="liveout">
                                                            <label class="form-check-label" for="liveout">
                                                                Live-Out
                                                            </label>
                                                            <input type="hidden" name="generalworkerId"
                                                                value="{{ $generalworker->id }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                @error('workingTime', 'liveIn')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>
                                                Experience: <br>
                                                <div class="form-floating">
                                                    <textarea class="form-control" name="generalworkerExperience" placeholder="Experience" id="experience">{{ old('generalworkerExperience', $generalworker->experience) }}</textarea>
                                                    <label for="experience"></label>
                                                    <input type="hidden" name="generalworkerId" value="{{ $generalworker->id }}">
                                                </div>
                                                @error('generalworkerExperience')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Skill</label>
                                                <input type="hidden" name="generalworkerId" value="{{ $generalworker->id }}">
                                                <input id="cc-payment" name="generalworkerSkill" type="text"
                                                    value="{{ old('generalworkerSkill', $generalworker->skill) }}"
                                                    class="form-control @error('generalworkerSkill') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="skill...">
                                                @error('generalworkerSkill')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>


                                                <label for="cc-payment" class="control-label mb-1">Language</label>
                                                <input type="hidden" name="generalworkerId" value="{{ $generalworker->id }}">
                                                <input id="cc-payment" name="generalworkerLanguage" type="text"
                                                    value="{{ old('generalworkerLanguage', $generalworker->language) }}"
                                                    class="form-control @error('generalworkerLanguage') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="language...">
                                                @error('generalworkerLanguage')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror


                                                <br>
                                                Pets :
                                                <div class="ms-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="Yes"
                                                            @if (old('pets', $generalworker->pet) == 'Yes') checked @endif
                                                            name="pets" id="">
                                                        <label class="form-check-label" for="fulltime">
                                                            Yes
                                                        </label>
                                                        <input type="hidden" name="generalworkerId"
                                                            value="{{ $generalworker->id }}">
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="No"
                                                            @if (old('pets', $generalworker->pet) == 'No') checked @endif
                                                            name="pets" id="">
                                                        <label class="form-check-label" for="parttime">
                                                            No
                                                        </label>
                                                        <input type="hidden" name="generalworkerId"
                                                            value="{{ $generalworker->id }}">
                                                    </div>
                                                    <textarea name="petNote" class="form-control" id="" cols="10" rows="5">{{ old('petNote', $generalworker->pet_note) }}</textarea>
                                                </div>

                                                <br>

                                                Available/Not Available :
                                                <div class="ms-3">
                                                    <div>
                                                        <select class="form-select" name="generalworkerStock"
                                                            aria-label="Default select example">
                                                            {{-- <option value="" selected>Available or Not Available</option> --}}
                                                            <option value="Available"
                                                                @if (old('generalworkerStock', $generalworker->stockstatus) == 'Available') selected @endif>Available
                                                            </option>
                                                            <option value="Not Available"
                                                                @if (old('generalworkerStock', $generalworker->stockstatus) == 'Not Available') selected @endif>Not
                                                                Available</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <br>
                                                <div class="input-group">
                                                    <span class="input-group-text">Vaccine</span>
                                                    <input type="hidden" name="generalworkerId" value="{{ $generalworker->id }}">
                                                    <textarea class="form-control" name="generalworkerVaccine" aria-label="With textarea">{{ old('generalworkerVaccine', $generalworker->vaccine) }}</textarea>
                                                </div>

                                                <br>
                                                <div class="d-flex">
                                                    <h4 class="text-danger mb-2">Remark : </h4>
                                                    <p class="ms-2">(optional)</p>
                                                </div>
                                                <div class="form-floating">
                                                    <textarea class="form-control" value="" name="generalworkerRemark" placeholder="" id="remark">{{ old('generalworkerRemark', $generalworker->remark) }}</textarea>
                                                    <label for="remark">Remark*</label>
                                                </div>

                                                <br>
                                                Note : (optional)
                                                <div>
                                                    <textarea class="form-control" name="note" id="" cols="" rows="">{{ old('note', $generalworker->note) }}</textarea>
                                                </div>

                                                <br>

                                            </div>
                                        </div>

                                        <div class="mt-2 ms-3">
                                            <button id="payment-button" type="submit"
                                                class="btn btn-danger btn-info btn-block">
                                                <input type="submit" class="btn text-white" value="Update">
                                                {{-- <span id="payment-button-sending" style="display:none;">Sending…</span> --}}
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
