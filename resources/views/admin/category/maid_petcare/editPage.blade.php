@extends('admin.layouts.master')

@section('title', 'Maid, Pet Care List')

@section('content')

    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="col-md-12">

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-3 offset-8">
                                <a href="{{ route('maidpetcare#updatePage', $maidpetcare->id) }}"><button class="btn bg-dark text-white my-3">
                                        Back</button></a>
                            </div>
                        </div>
                        <div class="col-lg-6 offset-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <h3 class="text-center title-2 p-2">Edit Maid, Pet Care Info</h3>
                                    </div>
                                    <hr>
                                    <form action="{{ route('maidpetcare#update', $maidpetcare->id) }}" method="post"
                                        enctype="multipart/form-data" novalidate="novalidate">
                                        @csrf
                                        <div class="form-group p-3">
                                            <div class="mb-2">
                                                <label for="cc-payment" class="control-label mb-1">Code#</label>
                                                <input type="hidden" name="maidpetcareId" value="{{ $maidpetcare->id }}">
                                                <input id="cc-payment" name="maidpetcareCode" type="text"
                                                    value="{{ old('maidpetcareCode', $maidpetcare->code) }}"
                                                    class="form-control @error('maidpetcareCode') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="code#">
                                                @error('maidpetcareCode')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Photo</label>
                                                <input type="hidden" name="maidpetcareId" value="{{ $maidpetcare->id }}">
                                                @if($maidpetcare->photo != null)
                                                <img src="{{ asset('storage/'. $maidpetcare->photo) }}" class="img-thumbnail" alt="...">
                                                @endif
                                                <input id="cc-payment" name="maidpetcarePhoto" type="file"
                                                    value="{{ old('maidpetcarePhoto',$maidpetcare->maidpetcarePhoto) }}"
                                                    class="form-control @error('maidpetcarePhoto') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="upload photo...">
                                                @error('maidpetcarePhoto')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Name</label>
                                                <input type="hidden" name="maidpetcareId" value="{{ $maidpetcare->id }}">
                                                <input id="cc-payment" name="maidpetcareName" type="text"
                                                    value="{{ old('maidpetcareName', $maidpetcare->name) }}"
                                                    class="form-control @error('maidpetcareName') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="Enter name...">
                                                @error('maidpetcareName')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Date of Birth</label>
                                                <input type="hidden" name="maidpetcareId" value="{{ $maidpetcare->id }}">
                                                <input id="cc-payment" name="maidpetcareDoB" type="text"
                                                    value="{{ old('maidpetcareDoB', $maidpetcare->date_of_birth) }}"
                                                    class="form-control @error('maidpetcareDoB') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false"
                                                    placeholder="Date of Birth...">
                                                @error('maidpetcareDoB')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Position</label>
                                                <input type="hidden" name="maidpetcareId" value="{{ $maidpetcare->id }}">
                                                <input id="cc-payment" name="maidpetcarePosition" type="text"
                                                    value="{{ old('maidpetcarePosition', $maidpetcare->position) }}"
                                                    class="form-control @error('maidpetcarePosition') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="position...">
                                                @error('maidpetcarePosition')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Nationality</label>
                                                <input type="hidden" name="maidpetcareId" value="{{ $maidpetcare->id }}">
                                                <input id="cc-payment" name="maidpetcareNationality" type="text"
                                                    value="{{ old('maidpetcareNationality', $maidpetcare->nationality) }}"
                                                    class="form-control @error('maidpetcareNationality') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="nationality...">
                                                @error('maidpetcareNationality')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Religion</label>
                                                <input type="hidden" name="maidpetcareId" value="{{ $maidpetcare->id }}">
                                                <input id="cc-payment" name="maidpetcareReligion" type="text"
                                                    value="{{ old('maidpetcareReligion', $maidpetcare->religion) }}"
                                                    class="form-control @error('maidpetcareReligion') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="religion...">
                                                @error('maidpetcareReligion')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Weight</label>
                                                <input type="hidden" name="maidpetcareId" value="{{ $maidpetcare->id }}">
                                                <input id="cc-payment" name="maidpetcareWeight" type="text"
                                                    value="{{ old('maidpetcareWeight', $maidpetcare->weight) }}"
                                                    class="form-control @error('maidpetcareWeight') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="weight...">
                                                @error('maidpetcareWeight')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Height</label>
                                                <input type="hidden" name="maidpetcareId" value="{{ $maidpetcare->id }}">
                                                <input id="cc-payment" name="maidpetcareHeight" type="text"
                                                    value="{{ old('maidpetcareHeight', $maidpetcare->height) }}"
                                                    class="form-control @error('maidpetcareHeight') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="height...">
                                                @error('maidpetcareHeight')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Status</label>
                                                <input type="hidden" name="maidpetcareId" value="{{ $maidpetcare->id }}">
                                                <input id="cc-payment" name="maidpetcareStatus" type="text"
                                                    value="{{ old('maidpetcareStatus', $maidpetcare->status) }}"
                                                    class="form-control @error('maidpetcareStatus') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="status...">
                                                @error('maidpetcareStatus')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Salary</label>
                                                <input type="hidden" name="maidpetcareId" value="{{ $maidpetcare->id }}">
                                                <input id="cc-payment" name="maidpetcareSalary" type="text"
                                                    value="{{ old('maidpetcareSalary', $maidpetcare->salary) }}"
                                                    class="form-control @error('maidpetcareSalary') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="salary...">
                                                @error('maidpetcareSalary')
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
                                                                value="full-time" @if(old('full_part', $maidpetcare->full_part) == 'full-time') checked @endif  name="full_part" id="fulltime">
                                                            <label class="form-check-label" for="fulltime">
                                                                Full-time
                                                            </label>
                                                            <input type="hidden" name="maidpetcareId" value="{{ $maidpetcare->id }}">
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                value="part-time" @if (old('full_part', $maidpetcare->full_part) == 'part-time') checked @endif name="full_part" id="parttime">
                                                            <label class="form-check-label" for="parttime">
                                                                Part-time
                                                            </label>
                                                            <input type="hidden" name="maidpetcareId" value="{{ $maidpetcare->id }}">
                                                        </div>
                                                    </div>

                                                    <div class="ms-5">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                value="live-In" @if(old('live_in_out', $maidpetcare->live_in_out) == 'live-In') checked @endif name="live_in_out" id="livein">
                                                            <label class="form-check-label" for="livein">
                                                                Live-In
                                                            </label>
                                                            <input type="hidden" name="maidpetcareId" value="{{ $maidpetcare->id }}">
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                value="live-Out" @if(old('live_in_out', $maidpetcare->live_in_out) == 'live-Out') checked @endif name="live_in_out" id="liveout">
                                                            <label class="form-check-label" for="liveout">
                                                                Live-Out
                                                            </label>
                                                            <input type="hidden" name="maidpetcareId" value="{{ $maidpetcare->id }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                @error('workingTime', 'liveIn')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>
                                                Experience:  <br>
                                                <div class="form-floating">
                                                    <textarea class="form-control"  name="maidpetcareExperience" placeholder="Experience" id="experience">{{ old('maidpetcareExperience', $maidpetcare->experience) }}</textarea>
                                                    <label for="experience"></label>
                                                    <input type="hidden" name="maidpetcareId" value="{{ $maidpetcare->id }}">
                                                </div>
                                                @error('maidpetcareExperience')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Skill</label>
                                                <input type="hidden" name="maidpetcareId" value="{{ $maidpetcare->id }}">
                                                <input id="cc-payment" name="maidpetcareSkill" type="text"
                                                    value="{{ old('maidpetcareSkill', $maidpetcare->skill) }}"
                                                    class="form-control @error('maidpetcareSkill') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="skill...">
                                                @error('maidpetcareSkill')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>


                                                <label for="cc-payment" class="control-label mb-1">Language</label>
                                                <input type="hidden" name="maidpetcareId" value="{{ $maidpetcare->id }}">
                                                <input id="cc-payment" name="maidpetcareLanguage" type="text"
                                                    value="{{ old('maidpetcareLanguage', $maidpetcare->language) }}"
                                                    class="form-control @error('maidpetcareLanguage') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="language...">
                                                @error('maidpetcareLanguage')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror


                                                <br>
                                                Pets :
                                                <div class="ms-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="Yes" @if(old('pets', $maidpetcare->pet) == 'Yes') checked @endif name="pets" id="">
                                                        <label class="form-check-label" for="fulltime">
                                                          Yes
                                                        </label>
                                                        <input type="hidden" name="maidpetcareId" value="{{ $maidpetcare->id }}">
                                                      </div>
                                                      <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="No" @if(old('pets', $maidpetcare->pet) == 'No') checked @endif name="pets" id="" >
                                                        <label class="form-check-label" for="parttime">
                                                          No
                                                        </label>
                                                        <input type="hidden" name="maidpetcareId" value="{{ $maidpetcare->id }}">
                                                      </div>
                                                    <textarea name="petNote" class="form-control" id="" cols="10" rows="5">{{ old('petNote', $maidpetcare->pet_note) }}</textarea>
                                                </div>

                                                <br>

                                                Available/Not Available :
                                                <div class="ms-3">
                                                    <div>
                                                        <select class="form-select" name="maidpetcareStock" aria-label="Default select example">
                                                            {{-- <option value="" selected>Available or Not Available</option> --}}
                                                            <option value="Available"
                                                            @if(old('maidpetcareStock', $maidpetcare->stockstatus) == 'Available') selected @endif>Available</option>
                                                            <option value="Not Available"
                                                            @if(old('maidpetcareStock', $maidpetcare->stockstatus) == 'Not Available') selected @endif>Not Available</option>
                                                          </select>
                                                    </div>
                                                </div>

                                                <br>
                                                <div class="input-group">
                                                    <span class="input-group-text">Vaccine</span>
                                                    <input type="hidden" name="maidpetcareId" value="{{ $maidpetcare->id }}">
                                                    <textarea class="form-control" name="maidpetcareVaccine" aria-label="With textarea">{{ old('maidpetcareVaccine', $maidpetcare->vaccine) }}</textarea>
                                                </div>

                                                <br>
                                                <div class="d-flex">
                                                    <h4 class="text-danger mb-2">Remark : </h4>
                                                    <p class="ms-2">(optional)</p>
                                                </div>
                                                <div class="form-floating">
                                                    <textarea class="form-control" value="" name="maidpetcareRemark" placeholder="" id="remark">{{ old('maidpetcareRemark', $maidpetcare->remark) }}</textarea>
                                                    <label for="remark">Remark*</label>
                                                </div>

                                                <br>
                                                Note : (optional)
                                                <div>
                                                    <textarea class="form-control" name="note" id="" cols="" rows="">{{ old('note', $maidpetcare->note) }}</textarea>
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
