@extends('admin.layouts.master')

@section('title', 'Maid, Cook List')

@section('content')

    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="col-md-12">

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-3 offset-8">
                                <a href="{{ route('maidcook#updatePage', $maidcook->id) }}"><button class="btn bg-dark text-white my-3">
                                        Back</button></a>
                            </div>
                        </div>
                        <div class="col-lg-6 offset-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <h3 class="text-center title-2 p-2">Edit Maid, Cook Info</h3>
                                    </div>
                                    <hr>
                                    <form action="{{ route('maidcook#update', $maidcook->id) }}" method="post"
                                        enctype="multipart/form-data" novalidate="novalidate">
                                        @csrf
                                        <div class="form-group p-3">
                                            <div class="mb-2">
                                                <label for="cc-payment" class="control-label mb-1">Code#</label>
                                                <input type="hidden" name="maidcookId" value="{{ $maidcook->id }}">
                                                <input id="cc-payment" name="maidcookCode" type="text"
                                                    value="{{ old('maidcookCode', $maidcook->code) }}"
                                                    class="form-control @error('maidcookCode') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="code#">
                                                @error('maidcookCode')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Photo</label>
                                                <input type="hidden" name="maidcookId" value="{{ $maidcook->id }}">
                                                @if($maidcook->photo != null)
                                                <img src="{{ asset('storage/'. $maidcook->photo) }}" class="img-thumbnail" alt="...">
                                                @endif
                                                <input id="cc-payment" name="maidcookPhoto" type="file"
                                                    value="{{ old('maidcookPhoto',$maidcook->maidcookPhoto) }}"
                                                    class="form-control @error('maidcookPhoto') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="upload photo...">
                                                @error('maidcookPhoto')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Name</label>
                                                <input type="hidden" name="maidcookId" value="{{ $maidcook->id }}">
                                                <input id="cc-payment" name="maidcookName" type="text"
                                                    value="{{ old('maidcookName', $maidcook->name) }}"
                                                    class="form-control @error('maidcookName') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="Enter name...">
                                                @error('maidcookName')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Date of Birth</label>
                                                <input type="hidden" name="maidcookId" value="{{ $maidcook->id }}">
                                                <input id="cc-payment" name="maidcookDoB" type="text"
                                                    value="{{ old('maidcookDoB', $maidcook->date_of_birth) }}"
                                                    class="form-control @error('maidcookDoB') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false"
                                                    placeholder="Date of Birth...">
                                                @error('maidcookDoB')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Position</label>
                                                <input type="hidden" name="maidcookId" value="{{ $maidcook->id }}">
                                                <input id="cc-payment" name="maidcookPosition" type="text"
                                                    value="{{ old('maidcookPosition', $maidcook->position) }}"
                                                    class="form-control @error('maidcookPosition') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="position...">
                                                @error('maidcookPosition')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Nationality</label>
                                                <input type="hidden" name="maidcookId" value="{{ $maidcook->id }}">
                                                <input id="cc-payment" name="maidcookNationality" type="text"
                                                    value="{{ old('maidcookNationality', $maidcook->nationality) }}"
                                                    class="form-control @error('maidcookNationality') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="nationality...">
                                                @error('maidcookNationality')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Religion</label>
                                                <input type="hidden" name="maidcookId" value="{{ $maidcook->id }}">
                                                <input id="cc-payment" name="maidcookReligion" type="text"
                                                    value="{{ old('maidcookReligion', $maidcook->religion) }}"
                                                    class="form-control @error('maidcookReligion') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="religion...">
                                                @error('maidcookReligion')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Weight</label>
                                                <input type="hidden" name="maidcookId" value="{{ $maidcook->id }}">
                                                <input id="cc-payment" name="maidcookWeight" type="text"
                                                    value="{{ old('maidcookWeight', $maidcook->weight) }}"
                                                    class="form-control @error('maidcookWeight') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="weight...">
                                                @error('maidcookWeight')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Height</label>
                                                <input type="hidden" name="maidcookId" value="{{ $maidcook->id }}">
                                                <input id="cc-payment" name="maidcookHeight" type="text"
                                                    value="{{ old('maidcookHeight', $maidcook->height) }}"
                                                    class="form-control @error('maidcookHeight') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="height...">
                                                @error('maidcookHeight')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Status</label>
                                                <input type="hidden" name="maidcookId" value="{{ $maidcook->id }}">
                                                <input id="cc-payment" name="maidcookStatus" type="text"
                                                    value="{{ old('maidcookStatus', $maidcook->status) }}"
                                                    class="form-control @error('maidcookStatus') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="status...">
                                                @error('maidcookStatus')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Salary</label>
                                                <input type="hidden" name="maidcookId" value="{{ $maidcook->id }}">
                                                <input id="cc-payment" name="maidcookSalary" type="text"
                                                    value="{{ old('maidcookSalary', $maidcook->salary) }}"
                                                    class="form-control @error('maidcookSalary') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="salary...">
                                                @error('maidcookSalary')
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
                                                                value="full-time" @if(old('full_part', $maidcook->full_part) == 'full-time') checked @endif  name="full_part" id="fulltime">
                                                            <label class="form-check-label" for="fulltime">
                                                                Full-time
                                                            </label>
                                                            <input type="hidden" name="maidcookId" value="{{ $maidcook->id }}">
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                value="part-time" @if (old('full_part', $maidcook->full_part) == 'part-time') checked @endif name="full_part" id="parttime">
                                                            <label class="form-check-label" for="parttime">
                                                                Part-time
                                                            </label>
                                                            <input type="hidden" name="maidcookId" value="{{ $maidcook->id }}">
                                                        </div>
                                                    </div>

                                                    <div class="ms-5">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                value="live-In" @if(old('live_in_out', $maidcook->live_in_out) == 'live-In') checked @endif name="live_in_out" id="livein">
                                                            <label class="form-check-label" for="livein">
                                                                Live-In
                                                            </label>
                                                            <input type="hidden" name="maidcookId" value="{{ $maidcook->id }}">
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                value="live-Out" @if(old('live_in_out', $maidcook->live_in_out) == 'live-Out') checked @endif name="live_in_out" id="liveout">
                                                            <label class="form-check-label" for="liveout">
                                                                Live-Out
                                                            </label>
                                                            <input type="hidden" name="maidcookId" value="{{ $maidcook->id }}">
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
                                                    <textarea class="form-control"  name="maidcookExperience" placeholder="Experience" id="experience">{{ old('maidcookExperience', $maidcook->experience) }}</textarea>
                                                    <label for="experience"></label>
                                                    <input type="hidden" name="maidcookId" value="{{ $maidcook->id }}">
                                                </div>
                                                @error('maidcookExperience')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Skill</label>
                                                <input type="hidden" name="maidcookId" value="{{ $maidcook->id }}">
                                                <input id="cc-payment" name="maidcookSkill" type="text"
                                                    value="{{ old('maidcookSkill', $maidcook->skill) }}"
                                                    class="form-control @error('maidcookSkill') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="skill...">
                                                @error('maidcookSkill')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>


                                                <label for="cc-payment" class="control-label mb-1">Language</label>
                                                <input type="hidden" name="maidcookId" value="{{ $maidcook->id }}">
                                                <input id="cc-payment" name="maidcookLanguage" type="text"
                                                    value="{{ old('maidcookLanguage', $maidcook->language) }}"
                                                    class="form-control @error('maidcookLanguage') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="language...">
                                                @error('maidcookLanguage')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror


                                                <br>
                                                Pets :
                                                <div class="ms-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="Yes" @if(old('pets', $maidcook->pet) == 'Yes') checked @endif name="pets" id="">
                                                        <label class="form-check-label" for="fulltime">
                                                          Yes
                                                        </label>
                                                        <input type="hidden" name="maidcookId" value="{{ $maidcook->id }}">
                                                      </div>
                                                      <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="No" @if(old('pets', $maidcook->pet) == 'No') checked @endif name="pets" id="" >
                                                        <label class="form-check-label" for="parttime">
                                                          No
                                                        </label>
                                                        <input type="hidden" name="maidcookId" value="{{ $maidcook->id }}">
                                                      </div>
                                                    <textarea name="petNote" class="form-control" id="" cols="10" rows="5">{{ old('petNote', $maidcook->pet_note) }}</textarea>
                                                </div>

                                                <br>

                                                Available/Not Available :
                                                <div class="ms-3">
                                                    <div>
                                                        <select class="form-select" name="maidcookStock" aria-label="Default select example">
                                                            {{-- <option value="" selected>Available or Not Available</option> --}}
                                                            <option value="Available"
                                                            @if(old('maidcookStock', $maidcook->stockstatus) == 'Available') selected @endif>Available</option>
                                                            <option value="Not Available"
                                                            @if(old('maidcookStock', $maidcook->stockstatus) == 'Not Available') selected @endif>Not Available</option>
                                                          </select>
                                                    </div>
                                                </div>

                                                <br>

                                                <div class="input-group">
                                                    <span class="input-group-text">Vaccine</span>
                                                    <input type="hidden" name="maidcookId" value="{{ $maidcook->id }}">
                                                    <textarea class="form-control" name="maidcookVaccine" aria-label="With textarea">{{ old('maidcookVaccine', $maidcook->vaccine) }}</textarea>
                                                </div>

                                                <br>
                                                <div class="d-flex">
                                                    <h4 class="text-danger mb-2">Remark : </h4>
                                                    <p class="ms-2">(optional)</p>
                                                </div>
                                                <div class="form-floating">
                                                    <textarea class="form-control" value="" name="maidcookRemark" placeholder="" id="remark">{{ old('maidcookRemark', $maidcook->remark) }}</textarea>
                                                    <label for="remark">Remark*</label>
                                                </div>

                                                <br>
                                                Note : (optional)
                                                <div>
                                                    <textarea class="form-control" name="note" id="" cols="" rows="">{{ old('note', $maidcook->note) }}</textarea>
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
