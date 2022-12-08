@extends('admin.layouts.master')

@section('title', 'HouseKeeping Edit')

@section('content')

    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="col-md-12">

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-3 offset-8">
                                <a href="{{ route('housekeeping#updatePage', $housekeeping->id) }}"><button class="btn bg-dark text-white my-3">
                                        Back</button></a>
                            </div>
                        </div>
                        <div class="col-lg-6 offset-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <h3 class="text-center title-2 p-2">Edit HouseKeeping Info</h3>
                                    </div>
                                    <hr>
                                    <form action="{{ route('housekeeping#update', $housekeeping->id) }}" method="post"
                                        enctype="multipart/form-data" novalidate="novalidate">
                                        @csrf
                                        <div class="form-group p-3">
                                            <div class="mb-2">
                                                <label for="cc-payment" class="control-label mb-1">Code#</label>
                                                <input type="hidden" name="housekeepingId" value="{{ $housekeeping->id }}">
                                                <input id="cc-payment" name="housekeepingCode" type="text"
                                                    value="{{ old('housekeepingCode', $housekeeping->code) }}"
                                                    class="form-control @error('housekeepingCode') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="code#">
                                                @error('housekeepingCode')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Photo</label>
                                                <input type="hidden" name="housekeepingId" value="{{ $housekeeping->id }}">
                                                @if($housekeeping->photo != null)
                                                <img src="{{ asset('storage/'. $housekeeping->photo) }}" class="img-thumbnail" alt="...">
                                                @endif
                                                <input id="cc-payment" name="housekeepingPhoto" type="file"
                                                    value="{{ old('housekeepingPhoto',$housekeeping->housekeepingPhoto) }}"
                                                    class="form-control @error('housekeepingPhoto') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="upload photo...">
                                                @error('housekeepingPhoto')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Name</label>
                                                <input type="hidden" name="housekeepingId" value="{{ $housekeeping->id }}">
                                                <input id="cc-payment" name="housekeepingName" type="text"
                                                    value="{{ old('housekeepingName', $housekeeping->name) }}"
                                                    class="form-control @error('housekeepingName') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="Enter name...">
                                                @error('housekeepingName')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Date of Birth</label>
                                                <input type="hidden" name="housekeepingId" value="{{ $housekeeping->id }}">
                                                <input id="cc-payment" name="housekeepingDoB" type="text"
                                                    value="{{ old('housekeepingDoB', $housekeeping->date_of_birth) }}"
                                                    class="form-control @error('housekeepingDoB') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false"
                                                    placeholder="Date of Birth...">
                                                @error('housekeepingDoB')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Position</label>
                                                <input type="hidden" name="housekeepingId" value="{{ $housekeeping->id }}">
                                                <input id="cc-payment" name="housekeepingPosition" type="text"
                                                    value="{{ old('housekeepingPosition', $housekeeping->position) }}"
                                                    class="form-control @error('housekeepingPosition') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="position...">
                                                @error('housekeepingPosition')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Nationality</label>
                                                <input type="hidden" name="housekeepingId" value="{{ $housekeeping->id }}">
                                                <input id="cc-payment" name="housekeepingNationality" type="text"
                                                    value="{{ old('housekeepingNationality', $housekeeping->nationality) }}"
                                                    class="form-control @error('housekeepingNationality') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="nationality...">
                                                @error('housekeepingNationality')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Religion</label>
                                                <input type="hidden" name="housekeepingId" value="{{ $housekeeping->id }}">
                                                <input id="cc-payment" name="housekeepingReligion" type="text"
                                                    value="{{ old('housekeepingReligion', $housekeeping->religion) }}"
                                                    class="form-control @error('housekeepingReligion') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="religion...">
                                                @error('housekeepingReligion')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Weight</label>
                                                <input type="hidden" name="housekeepingId" value="{{ $housekeeping->id }}">
                                                <input id="cc-payment" name="housekeepingWeight" type="text"
                                                    value="{{ old('housekeepingWeight', $housekeeping->weight) }}"
                                                    class="form-control @error('housekeepingWeight') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="weight...">
                                                @error('housekeepingWeight')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Height</label>
                                                <input type="hidden" name="housekeepingId" value="{{ $housekeeping->id }}">
                                                <input id="cc-payment" name="housekeepingHeight" type="text"
                                                    value="{{ old('housekeepingHeight', $housekeeping->height) }}"
                                                    class="form-control @error('housekeepingHeight') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="height...">
                                                @error('housekeepingHeight')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Status</label>
                                                <input type="hidden" name="housekeepingId" value="{{ $housekeeping->id }}">
                                                <input id="cc-payment" name="housekeepingStatus" type="text"
                                                    value="{{ old('housekeepingStatus', $housekeeping->status) }}"
                                                    class="form-control @error('housekeepingStatus') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="status...">
                                                @error('housekeepingStatus')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Salary</label>
                                                <input type="hidden" name="housekeepingId" value="{{ $housekeeping->id }}">
                                                <input id="cc-payment" name="housekeepingSalary" type="text"
                                                    value="{{ old('housekeepingSalary', $housekeeping->salary) }}"
                                                    class="form-control @error('housekeepingSalary') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="salary...">
                                                @error('housekeepingSalary')
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
                                                                value="full-time" @if(old('full_part', $housekeeping->full_part) == 'full-time') checked @endif  name="full_part" id="fulltime">
                                                            <label class="form-check-label" for="fulltime">
                                                                Full-time
                                                            </label>
                                                            <input type="hidden" name="housekeepingId" value="{{ $housekeeping->id }}">
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                value="Part-time" @if (old('full_part', $housekeeping->full_part) == 'Part-time') checked @endif name="full_part" id="parttime">
                                                            <label class="form-check-label" for="parttime">
                                                                Part-time
                                                            </label>
                                                            <input type="hidden" name="housekeepingId" value="{{ $housekeeping->id }}">
                                                        </div>
                                                    </div>

                                                    <div class="ms-5">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                value="live-In" @if(old('live_in_out', $housekeeping->live_in_out) == 'live-In') checked @endif name="live_in_out" id="livein">
                                                            <label class="form-check-label" for="livein">
                                                                Live-In
                                                            </label>
                                                            <input type="hidden" name="housekeepingId" value="{{ $housekeeping->id }}">
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                value="live-Out" @if(old('live_in_out', $housekeeping->live_in_out) == 'live-Out') checked @endif name="live_in_out" id="liveout">
                                                            <label class="form-check-label" for="liveout">
                                                                Live-Out
                                                            </label>
                                                            <input type="hidden" name="housekeepingId" value="{{ $housekeeping->id }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                @error('workingTime', 'liveIn')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>
                                                Experience  <br>
                                                <div class="form-floating">
                                                    <textarea class="form-control"  name="housekeepingExperience" placeholder="Experience" id="experience">{{ old('housekeepingExperience', $housekeeping->experience) }}</textarea>
                                                    <label for="experience"></label>
                                                    <input type="hidden" name="housekeepingId" value="{{ $housekeeping->id }}">
                                                </div>
                                                @error('housekeepingExperience')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Skill</label>
                                                <input type="hidden" name="housekeepingId" value="{{ $housekeeping->id }}">
                                                <input id="cc-payment" name="housekeepingSkill" type="text"
                                                    value="{{ old('housekeepingSkill', $housekeeping->skill) }}"
                                                    class="form-control @error('housekeepingSkill') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="skill...">
                                                @error('housekeepingSkill')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>


                                                <label for="cc-payment" class="control-label mb-1">Language</label>
                                                <input type="hidden" name="housekeepingId" value="{{ $housekeeping->id }}">
                                                <input id="cc-payment" name="housekeepingLanguage" type="text"
                                                    value="{{ old('housekeepingLanguage', $housekeeping->experience) }}"
                                                    class="form-control @error('housekeepingLanguage') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="language...">
                                                @error('housekeepingLanguage')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror


                                                <br>
                                                Pets :
                                                <div class="ms-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="Yes" @if(old('pets', $housekeeping->pet) == 'Yes') checked @endif name="pets" id="">
                                                        <label class="form-check-label" for="fulltime">
                                                          Yes
                                                        </label>
                                                        <input type="hidden" name="housekeepingId" value="{{ $housekeeping->id }}">
                                                      </div>
                                                      <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="No" @if(old('pets', $housekeeping->pet) == 'No') checked @endif name="pets" id="" >
                                                        <label class="form-check-label" for="parttime">
                                                          No
                                                        </label>
                                                        <input type="hidden" name="housekeepingId" value="{{ $housekeeping->id }}">
                                                      </div>
                                                    <textarea name="petNote" class="form-control" id="" cols="10" rows="5">{{ old('petNote', $housekeeping->pet_note) }}</textarea>
                                                </div>

                                                <br>

                                                <p class="text-danger"><b>Remark :</b></p>

                                                <br>
                                                Note : (optional)
                                                <div>
                                                    <textarea class="form-control" name="note" id="" cols="" rows="">{{ old('note', $housekeeping->note) }}</textarea>
                                                </div>

                                                <br>

                                                <div class="input-group">
                                                    <span class="input-group-text">Vaccine</span>
                                                    <input type="hidden" name="housekeepingId" value="{{ $housekeeping->id }}">
                                                    <textarea class="form-control" name="housekeepingVaccine" aria-label="With textarea">{{ old('housekeepingVaccine', $housekeeping->vaccine) }}</textarea>


                                                  </div>
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
