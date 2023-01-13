@extends('admin.layouts.master')

@section('title', 'Gardener List')

@section('content')

    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="col-md-12">

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-3 offset-8">
                                <a href="{{ route('gardener#updatePage', $gardener->id) }}"><button
                                        class="btn bg-dark text-white my-3">
                                        Back</button></a>
                            </div>
                        </div>
                        <div class="col-lg-6 offset-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <h3 class="text-center title-2 p-2">Edit Gardener Info</h3>
                                    </div>
                                    <hr>
                                    <form action="{{ route('gardener#update', $gardener->id) }}" method="post"
                                        enctype="multipart/form-data" novalidate="novalidate">
                                        @csrf
                                        <div class="form-group p-3">
                                            <div class="mb-2">
                                                <label for="cc-payment" class="control-label mb-1">Code#</label>
                                                <input type="hidden" name="gardenerId" value="{{ $gardener->id }}">
                                                <input id="cc-payment" name="gardenerCode" type="text"
                                                    value="{{ old('gardenerCode', $gardener->code) }}"
                                                    class="form-control @error('gardenerCode') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="code#">
                                                @error('gardenerCode')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Photo</label>
                                                <input type="hidden" name="gardenerId" value="{{ $gardener->id }}">
                                                @if ($gardener->photo != null)
                                                    <img src="{{ asset('storage/' . $gardener->photo) }}"
                                                        class="img-thumbnail" alt="...">
                                                @endif
                                                <input id="cc-payment" name="gardenerPhoto" type="file"
                                                    value="{{ old('gardenerPhoto', $gardener->gardenerPhoto) }}"
                                                    class="form-control @error('gardenerPhoto') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="upload photo...">
                                                @error('gardenerPhoto')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Name</label>
                                                <input type="hidden" name="gardenerId" value="{{ $gardener->id }}">
                                                <input id="cc-payment" name="gardenerName" type="text"
                                                    value="{{ old('gardenerName', $gardener->name) }}"
                                                    class="form-control @error('gardenerName') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="Enter name...">
                                                @error('gardenerName')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Date of Birth</label>
                                                <input type="hidden" name="gardenerId" value="{{ $gardener->id }}">
                                                <input id="cc-payment" name="gardenerDoB" type="text"
                                                    value="{{ old('gardenerDoB', $gardener->date_of_birth) }}"
                                                    class="form-control @error('gardenerDoB') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false"
                                                    placeholder="Date of Birth...">
                                                @error('gardenerDoB')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Position</label>
                                                <input type="hidden" name="gardenerId" value="{{ $gardener->id }}">
                                                <input id="cc-payment" name="gardenerPosition" type="text"
                                                    value="{{ old('gardenerPosition', $gardener->position) }}"
                                                    class="form-control @error('gardenerPosition') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="position...">
                                                @error('gardenerPosition')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Nationality</label>
                                                <input type="hidden" name="gardenerId" value="{{ $gardener->id }}">
                                                <input id="cc-payment" name="gardenerNationality" type="text"
                                                    value="{{ old('gardenerNationality', $gardener->nationality) }}"
                                                    class="form-control @error('gardenerNationality') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false"
                                                    placeholder="nationality...">
                                                @error('gardenerNationality')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Religion</label>
                                                <input type="hidden" name="gardenerId" value="{{ $gardener->id }}">
                                                <input id="cc-payment" name="gardenerReligion" type="text"
                                                    value="{{ old('gardenerReligion', $gardener->religion) }}"
                                                    class="form-control @error('gardenerReligion') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="religion...">
                                                @error('gardenerReligion')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Weight</label>
                                                <input type="hidden" name="gardenerId" value="{{ $gardener->id }}">
                                                <input id="cc-payment" name="gardenerWeight" type="text"
                                                    value="{{ old('gardenerWeight', $gardener->weight) }}"
                                                    class="form-control @error('gardenerWeight') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="weight...">
                                                @error('gardenerWeight')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Height</label>
                                                <input type="hidden" name="gardenerId" value="{{ $gardener->id }}">
                                                <input id="cc-payment" name="gardenerHeight" type="text"
                                                    value="{{ old('gardenerHeight', $gardener->height) }}"
                                                    class="form-control @error('gardenerHeight') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="height...">
                                                @error('gardenerHeight')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Status</label>
                                                <input type="hidden" name="gardenerId" value="{{ $gardener->id }}">
                                                <input id="cc-payment" name="gardenerStatus" type="text"
                                                    value="{{ old('gardenerStatus', $gardener->status) }}"
                                                    class="form-control @error('gardenerStatus') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="status...">
                                                @error('gardenerStatus')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Salary</label>
                                                <input type="hidden" name="gardenerId" value="{{ $gardener->id }}">
                                                <input id="cc-payment" name="gardenerSalary" type="text"
                                                    value="{{ old('gardenerSalary', $gardener->salary) }}"
                                                    class="form-control @error('gardenerSalary') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="salary...">
                                                @error('gardenerSalary')
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
                                                                @if (old('full_part', $gardener->full_part) == 'full-time') checked @endif
                                                                name="full_part" id="fulltime">
                                                            <label class="form-check-label" for="fulltime">
                                                                Full-time
                                                            </label>
                                                            <input type="hidden" name="gardenerId"
                                                                value="{{ $gardener->id }}">
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                value="part-time"
                                                                @if (old('full_part', $gardener->full_part) == 'part-time') checked @endif
                                                                name="full_part" id="parttime">
                                                            <label class="form-check-label" for="parttime">
                                                                Part-time
                                                            </label>
                                                            <input type="hidden" name="gardenerId"
                                                                value="{{ $gardener->id }}">
                                                        </div>
                                                    </div>

                                                    <div class="ms-5">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                value="live-In"
                                                                @if (old('live_in_out', $gardener->live_in_out) == 'live-In') checked @endif
                                                                name="live_in_out" id="livein">
                                                            <label class="form-check-label" for="livein">
                                                                Live-In
                                                            </label>
                                                            <input type="hidden" name="gardenerId"
                                                                value="{{ $gardener->id }}">
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                value="live-Out"
                                                                @if (old('live_in_out', $gardener->live_in_out) == 'live-Out') checked @endif
                                                                name="live_in_out" id="liveout">
                                                            <label class="form-check-label" for="liveout">
                                                                Live-Out
                                                            </label>
                                                            <input type="hidden" name="gardenerId"
                                                                value="{{ $gardener->id }}">
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
                                                    <textarea class="form-control" name="gardenerExperience" placeholder="Experience" id="experience">{{ old('gardenerExperience', $gardener->experience) }}</textarea>
                                                    <label for="experience"></label>
                                                    <input type="hidden" name="gardenerId" value="{{ $gardener->id }}">
                                                </div>
                                                @error('gardenerExperience')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Skill</label>
                                                <input type="hidden" name="gardenerId" value="{{ $gardener->id }}">
                                                <input id="cc-payment" name="gardenerSkill" type="text"
                                                    value="{{ old('gardenerSkill', $gardener->skill) }}"
                                                    class="form-control @error('gardenerSkill') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="skill...">
                                                @error('gardenerSkill')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>


                                                <label for="cc-payment" class="control-label mb-1">Language</label>
                                                <input type="hidden" name="gardenerId" value="{{ $gardener->id }}">
                                                <input id="cc-payment" name="gardenerLanguage" type="text"
                                                    value="{{ old('gardenerLanguage', $gardener->language) }}"
                                                    class="form-control @error('gardenerLanguage') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="language...">
                                                @error('gardenerLanguage')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror


                                                <br>
                                                Pets :
                                                <div class="ms-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="Yes"
                                                            @if (old('pets', $gardener->pet) == 'Yes') checked @endif
                                                            name="pets" id="">
                                                        <label class="form-check-label" for="fulltime">
                                                            Yes
                                                        </label>
                                                        <input type="hidden" name="gardenerId"
                                                            value="{{ $gardener->id }}">
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="No"
                                                            @if (old('pets', $gardener->pet) == 'No') checked @endif
                                                            name="pets" id="">
                                                        <label class="form-check-label" for="parttime">
                                                            No
                                                        </label>
                                                        <input type="hidden" name="gardenerId"
                                                            value="{{ $gardener->id }}">
                                                    </div>
                                                    <textarea name="petNote" class="form-control" id="" cols="10" rows="5">{{ old('petNote', $gardener->pet_note) }}</textarea>
                                                </div>

                                                <br>

                                                Available/Not Available :
                                                <div class="ms-3">
                                                    <div>
                                                        <select class="form-select" name="gardenerStock"
                                                            aria-label="Default select example">
                                                            {{-- <option value="" selected>Available or Not Available</option> --}}
                                                            <option value="Available"
                                                                @if (old('gardenerStock', $gardener->stockstatus) == 'Available') selected @endif>Available
                                                            </option>
                                                            <option value="Not Available"
                                                                @if (old('gardenerStock', $gardener->stockstatus) == 'Not Available') selected @endif>Not
                                                                Available</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <br>
                                                <div class="input-group">
                                                    <span class="input-group-text">Vaccine</span>
                                                    <input type="hidden" name="gardenerId" value="{{ $gardener->id }}">
                                                    <textarea class="form-control" name="gardenerVaccine" aria-label="With textarea">{{ old('gardenerVaccine', $gardener->vaccine) }}</textarea>
                                                </div>

                                                <br>
                                                <div class="d-flex">
                                                    <h4 class="text-danger mb-2">Remark : </h4>
                                                    <p class="ms-2">(optional)</p>
                                                </div>
                                                <div class="form-floating">
                                                    <textarea class="form-control" value="" name="gardenerRemark" placeholder="" id="remark">{{ old('gardenerRemark', $gardener->remark) }}</textarea>
                                                    <label for="remark">Remark*</label>
                                                </div>

                                                <br>
                                                Note : (optional)
                                                <div>
                                                    <textarea class="form-control" name="note" id="" cols="" rows="">{{ old('note', $gardener->note) }}</textarea>
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
