@extends('admin.layouts.master')

@section('title', 'Maid, Eldercare List')

@section('content')

    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="col-md-12">

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-3 offset-8">
                                <a href="{{ route('maideldercare#updatePage', $maideldercare->id) }}"><button class="btn bg-dark text-white my-3">
                                        Back</button></a>
                            </div>
                        </div>
                        <div class="col-lg-6 offset-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <h3 class="text-center title-2 p-2">Edit Maid, Eldercare Info</h3>
                                    </div>
                                    <hr>
                                    <form action="{{ route('maideldercare#update', $maideldercare->id) }}" method="post"
                                        enctype="multipart/form-data" novalidate="novalidate">
                                        @csrf
                                        <div class="form-group p-3">
                                            <div class="mb-2">
                                                <label for="cc-payment" class="control-label mb-1">Code#</label>
                                                <input type="hidden" name="maideldercareId" value="{{ $maideldercare->id }}">
                                                <input id="cc-payment" name="maideldercareCode" type="text"
                                                    value="{{ old('maideldercareCode', $maideldercare->code) }}"
                                                    class="form-control @error('maideldercareCode') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="code#">
                                                @error('maideldercareCode')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Photo</label>
                                                <input type="hidden" name="maideldercareId" value="{{ $maideldercare->id }}">
                                                @if($maideldercare->photo != null)
                                                <img src="{{ asset('storage/'. $maideldercare->photo) }}" class="img-thumbnail" alt="...">
                                                @endif
                                                <input id="cc-payment" name="maideldercarePhoto" type="file"
                                                    value="{{ old('maideldercarePhoto',$maideldercare->maideldercarePhoto) }}"
                                                    class="form-control @error('maideldercarePhoto') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="upload photo...">
                                                @error('maideldercarePhoto')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Name</label>
                                                <input type="hidden" name="maideldercareId" value="{{ $maideldercare->id }}">
                                                <input id="cc-payment" name="maideldercareName" type="text"
                                                    value="{{ old('maideldercareName', $maideldercare->name) }}"
                                                    class="form-control @error('maideldercareName') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="Enter name...">
                                                @error('maideldercareName')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Date of Birth</label>
                                                <input type="hidden" name="maideldercareId" value="{{ $maideldercare->id }}">
                                                <input id="cc-payment" name="maideldercareDoB" type="text"
                                                    value="{{ old('maideldercareDoB', $maideldercare->date_of_birth) }}"
                                                    class="form-control @error('maideldercareDoB') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false"
                                                    placeholder="Date of Birth...">
                                                @error('maideldercareDoB')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Position</label>
                                                <input type="hidden" name="maideldercareId" value="{{ $maideldercare->id }}">
                                                <input id="cc-payment" name="maideldercarePosition" type="text"
                                                    value="{{ old('maideldercarePosition', $maideldercare->position) }}"
                                                    class="form-control @error('maideldercarePosition') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="position...">
                                                @error('maideldercarePosition')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Nationality</label>
                                                <input type="hidden" name="maideldercareId" value="{{ $maideldercare->id }}">
                                                <input id="cc-payment" name="maideldercareNationality" type="text"
                                                    value="{{ old('maideldercareNationality', $maideldercare->nationality) }}"
                                                    class="form-control @error('maideldercareNationality') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="nationality...">
                                                @error('maideldercareNationality')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Religion</label>
                                                <input type="hidden" name="maideldercareId" value="{{ $maideldercare->id }}">
                                                <input id="cc-payment" name="maideldercareReligion" type="text"
                                                    value="{{ old('maideldercareReligion', $maideldercare->religion) }}"
                                                    class="form-control @error('maideldercareReligion') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="religion...">
                                                @error('maideldercareReligion')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Weight</label>
                                                <input type="hidden" name="maideldercareId" value="{{ $maideldercare->id }}">
                                                <input id="cc-payment" name="maideldercareWeight" type="text"
                                                    value="{{ old('maideldercareWeight', $maideldercare->weight) }}"
                                                    class="form-control @error('maideldercareWeight') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="weight...">
                                                @error('maideldercareWeight')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Height</label>
                                                <input type="hidden" name="maideldercareId" value="{{ $maideldercare->id }}">
                                                <input id="cc-payment" name="maideldercareHeight" type="text"
                                                    value="{{ old('maideldercareHeight', $maideldercare->height) }}"
                                                    class="form-control @error('maideldercareHeight') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="height...">
                                                @error('maideldercareHeight')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Status</label>
                                                <input type="hidden" name="maideldercareId" value="{{ $maideldercare->id }}">
                                                <input id="cc-payment" name="maideldercareStatus" type="text"
                                                    value="{{ old('maideldercareStatus', $maideldercare->status) }}"
                                                    class="form-control @error('maideldercareStatus') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="status...">
                                                @error('maideldercareStatus')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Salary</label>
                                                <input type="hidden" name="maideldercareId" value="{{ $maideldercare->id }}">
                                                <input id="cc-payment" name="maideldercareSalary" type="text"
                                                    value="{{ old('maideldercareSalary', $maideldercare->salary) }}"
                                                    class="form-control @error('maideldercareSalary') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="salary...">
                                                @error('maideldercareSalary')
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
                                                                value="full-time" @if(old('full_part', $maideldercare->full_part) == 'full-time') checked @endif  name="full_part" id="fulltime">
                                                            <label class="form-check-label" for="fulltime">
                                                                Full-time
                                                            </label>
                                                            <input type="hidden" name="maideldercareId" value="{{ $maideldercare->id }}">
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                value="part-time" @if (old('full_part', $maideldercare->full_part) == 'part-time') checked @endif name="full_part" id="parttime">
                                                            <label class="form-check-label" for="parttime">
                                                                Part-time
                                                            </label>
                                                            <input type="hidden" name="maideldercareId" value="{{ $maideldercare->id }}">
                                                        </div>
                                                    </div>

                                                    <div class="ms-5">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                value="live-In" @if(old('live_in_out', $maideldercare->live_in_out) == 'live-In') checked @endif name="live_in_out" id="livein">
                                                            <label class="form-check-label" for="livein">
                                                                Live-In
                                                            </label>
                                                            <input type="hidden" name="maideldercareId" value="{{ $maideldercare->id }}">
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                value="live-Out" @if(old('live_in_out', $maideldercare->live_in_out) == 'live-Out') checked @endif name="live_in_out" id="liveout">
                                                            <label class="form-check-label" for="liveout">
                                                                Live-Out
                                                            </label>
                                                            <input type="hidden" name="maideldercareId" value="{{ $maideldercare->id }}">
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
                                                    <textarea class="form-control"  name="maideldercareExperience" placeholder="Experience" id="experience">{{ old('maideldercareExperience', $maideldercare->experience) }}</textarea>
                                                    <label for="experience"></label>
                                                    <input type="hidden" name="maideldercareId" value="{{ $maideldercare->id }}">
                                                </div>
                                                @error('maideldercareExperience')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Skill</label>
                                                <input type="hidden" name="maideldercareId" value="{{ $maideldercare->id }}">
                                                <input id="cc-payment" name="maideldercareSkill" type="text"
                                                    value="{{ old('maideldercareSkill', $maideldercare->skill) }}"
                                                    class="form-control @error('maideldercareSkill') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="skill...">
                                                @error('maideldercareSkill')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>


                                                <label for="cc-payment" class="control-label mb-1">Language</label>
                                                <input type="hidden" name="maideldercareId" value="{{ $maideldercare->id }}">
                                                <input id="cc-payment" name="maideldercareLanguage" type="text"
                                                    value="{{ old('maideldercareLanguage', $maideldercare->language) }}"
                                                    class="form-control @error('maideldercareLanguage') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="language...">
                                                @error('maideldercareLanguage')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror


                                                <br>
                                                Pets :
                                                <div class="ms-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="Yes" @if(old('pets', $maideldercare->pet) == 'Yes') checked @endif name="pets" id="">
                                                        <label class="form-check-label" for="fulltime">
                                                          Yes
                                                        </label>
                                                        <input type="hidden" name="maideldercareId" value="{{ $maideldercare->id }}">
                                                      </div>
                                                      <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="No" @if(old('pets', $maideldercare->pet) == 'No') checked @endif name="pets" id="" >
                                                        <label class="form-check-label" for="parttime">
                                                          No
                                                        </label>
                                                        <input type="hidden" name="maideldercareId" value="{{ $maideldercare->id }}">
                                                      </div>
                                                    <textarea name="petNote" class="form-control" id="" cols="10" rows="5">{{ old('petNote', $maideldercare->pet_note) }}</textarea>
                                                </div>

                                                <br>

                                                Available/Not Available :
                                                <div class="ms-3">
                                                    <div>
                                                        <select class="form-select" name="maideldercareStock" aria-label="Default select example">
                                                            {{-- <option value="" selected>Available or Not Available</option> --}}
                                                            <option value="Available"
                                                            @if(old('maideldercareStock', $maideldercare->stockstatus) == 'Available') selected @endif>Available</option>
                                                            <option value="Not Available"
                                                            @if(old('maideldercareStock', $maideldercare->stockstatus) == 'Not Available') selected @endif>Not Available</option>
                                                          </select>
                                                    </div>
                                                </div>

                                                <br>
                                                <div class="input-group">
                                                    <span class="input-group-text">Vaccine</span>
                                                    <input type="hidden" name="maideldercareId" value="{{ $maideldercare->id }}">
                                                    <textarea class="form-control" name="maideldercareVaccine" aria-label="With textarea">{{ old('maideldercareVaccine', $maideldercare->vaccine) }}</textarea>
                                                </div>

                                                <br>
                                                <div class="d-flex">
                                                    <h4 class="text-danger mb-2">Remark : </h4>
                                                    <p class="ms-2">(optional)</p>
                                                </div>
                                                <div class="form-floating">
                                                    <textarea class="form-control" value="" name="maideldercareRemark" placeholder="" id="remark">{{ old('maideldercareRemark', $maideldercare->remark) }}</textarea>
                                                    <label for="remark">Remark*</label>
                                                </div>

                                                <br>
                                                Note : (optional)
                                                <div>
                                                    <textarea class="form-control" name="note" id="" cols="" rows="">{{ old('note', $maideldercare->note) }}</textarea>
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
