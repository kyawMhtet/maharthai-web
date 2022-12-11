@extends('admin.layouts.master')

@section('title', 'Premium Nanny List')

@section('content')

    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="col-md-12">

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-3 offset-8">
                                <a href="{{ route('premiumnanny#updatePage', $premiumnanny->id) }}"><button class="btn bg-dark text-white my-3">
                                        Back</button></a>
                            </div>
                        </div>
                        <div class="col-lg-6 offset-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <h3 class="text-center title-2 p-2">Edit Premium Nanny Info</h3>
                                    </div>
                                    <hr>
                                    <form action="{{ route('premiumnanny#update', $premiumnanny->id) }}" method="post"
                                        enctype="multipart/form-data" novalidate="novalidate">
                                        @csrf
                                        <div class="form-group p-3">
                                            <div class="mb-2">
                                                <label for="cc-payment" class="control-label mb-1">Code#</label>
                                                <input type="hidden" name="premiumnannyId" value="{{ $premiumnanny->id }}">
                                                <input id="cc-payment" name="premiumnannyCode" type="text"
                                                    value="{{ old('premiumnannyCode', $premiumnanny->code) }}"
                                                    class="form-control @error('premiumnannyCode') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="code#">
                                                @error('premiumnannyCode')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Photo</label>
                                                <input type="hidden" name="premiumnannyId" value="{{ $premiumnanny->id }}">
                                                @if($premiumnanny->photo != null)
                                                <img src="{{ asset('storage/'. $premiumnanny->photo) }}" class="img-thumbnail" alt="...">
                                                @endif
                                                <input id="cc-payment" name="premiumnannyPhoto" type="file"
                                                    value="{{ old('premiumnannyPhoto',$premiumnanny->premiumnannyPhoto) }}"
                                                    class="form-control @error('premiumnannyPhoto') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="upload photo...">
                                                @error('premiumnannyPhoto')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Name</label>
                                                <input type="hidden" name="premiumnannyId" value="{{ $premiumnanny->id }}">
                                                <input id="cc-payment" name="premiumnannyName" type="text"
                                                    value="{{ old('premiumnannyName', $premiumnanny->name) }}"
                                                    class="form-control @error('premiumnannyName') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="Enter name...">
                                                @error('premiumnannyName')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Date of Birth</label>
                                                <input type="hidden" name="premiumnannyId" value="{{ $premiumnanny->id }}">
                                                <input id="cc-payment" name="premiumnannyDoB" type="text"
                                                    value="{{ old('premiumnannyDoB', $premiumnanny->date_of_birth) }}"
                                                    class="form-control @error('premiumnannyDoB') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false"
                                                    placeholder="Date of Birth...">
                                                @error('premiumnannyDoB')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Position</label>
                                                <input type="hidden" name="premiumnannyId" value="{{ $premiumnanny->id }}">
                                                <input id="cc-payment" name="premiumnannyPosition" type="text"
                                                    value="{{ old('premiumnannyPosition', $premiumnanny->position) }}"
                                                    class="form-control @error('premiumnannyPosition') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="position...">
                                                @error('premiumnannyPosition')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Nationality</label>
                                                <input type="hidden" name="premiumnannyId" value="{{ $premiumnanny->id }}">
                                                <input id="cc-payment" name="premiumnannyNationality" type="text"
                                                    value="{{ old('premiumnannyNationality', $premiumnanny->nationality) }}"
                                                    class="form-control @error('premiumnannyNationality') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="nationality...">
                                                @error('premiumnannyNationality')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Religion</label>
                                                <input type="hidden" name="premiumnannyId" value="{{ $premiumnanny->id }}">
                                                <input id="cc-payment" name="premiumnannyReligion" type="text"
                                                    value="{{ old('premiumnannyReligion', $premiumnanny->religion) }}"
                                                    class="form-control @error('premiumnannyReligion') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="religion...">
                                                @error('premiumnannyReligion')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Weight</label>
                                                <input type="hidden" name="premiumnannyId" value="{{ $premiumnanny->id }}">
                                                <input id="cc-payment" name="premiumnannyWeight" type="text"
                                                    value="{{ old('premiumnannyWeight', $premiumnanny->weight) }}"
                                                    class="form-control @error('premiumnannyWeight') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="weight...">
                                                @error('premiumnannyWeight')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Height</label>
                                                <input type="hidden" name="premiumnannyId" value="{{ $premiumnanny->id }}">
                                                <input id="cc-payment" name="premiumnannyHeight" type="text"
                                                    value="{{ old('premiumnannyHeight', $premiumnanny->height) }}"
                                                    class="form-control @error('premiumnannyHeight') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="height...">
                                                @error('premiumnannyHeight')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Status</label>
                                                <input type="hidden" name="premiumnannyId" value="{{ $premiumnanny->id }}">
                                                <input id="cc-payment" name="premiumnannyStatus" type="text"
                                                    value="{{ old('premiumnannyStatus', $premiumnanny->status) }}"
                                                    class="form-control @error('premiumnannyStatus') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="status...">
                                                @error('premiumnannyStatus')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Salary</label>
                                                <input type="hidden" name="premiumnannyId" value="{{ $premiumnanny->id }}">
                                                <input id="cc-payment" name="premiumnannySalary" type="text"
                                                    value="{{ old('premiumnannySalary', $premiumnanny->salary) }}"
                                                    class="form-control @error('premiumnannySalary') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="salary...">
                                                @error('premiumnannySalary')
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
                                                                value="full-time" @if(old('full_part', $premiumnanny->full_part) == 'full-time') checked @endif  name="full_part" id="fulltime">
                                                            <label class="form-check-label" for="fulltime">
                                                                Full-time
                                                            </label>
                                                            <input type="hidden" name="premiumnannyId" value="{{ $premiumnanny->id }}">
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                value="part-time" @if (old('full_part', $premiumnanny->full_part) == 'part-time') checked @endif name="full_part" id="parttime">
                                                            <label class="form-check-label" for="parttime">
                                                                Part-time
                                                            </label>
                                                            <input type="hidden" name="premiumnannyId" value="{{ $premiumnanny->id }}">
                                                        </div>
                                                    </div>

                                                    <div class="ms-5">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                value="live-In" @if(old('live_in_out', $premiumnanny->live_in_out) == 'live-In') checked @endif name="live_in_out" id="livein">
                                                            <label class="form-check-label" for="livein">
                                                                Live-In
                                                            </label>
                                                            <input type="hidden" name="premiumnannyId" value="{{ $premiumnanny->id }}">
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                value="live-Out" @if(old('live_in_out', $premiumnanny->live_in_out) == 'live-Out') checked @endif name="live_in_out" id="liveout">
                                                            <label class="form-check-label" for="liveout">
                                                                Live-Out
                                                            </label>
                                                            <input type="hidden" name="premiumnannyId" value="{{ $premiumnanny->id }}">
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
                                                    <textarea class="form-control"  name="premiumnannyExperience" placeholder="Experience" id="experience">{{ old('premiumnannyExperience', $premiumnanny->experience) }}</textarea>
                                                    <label for="experience"></label>
                                                    <input type="hidden" name="premiumnannyId" value="{{ $premiumnanny->id }}">
                                                </div>
                                                @error('premiumnannyExperience')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Skill</label>
                                                <input type="hidden" name="premiumnannyId" value="{{ $premiumnanny->id }}">
                                                <input id="cc-payment" name="premiumnannySkill" type="text"
                                                    value="{{ old('premiumnannySkill', $premiumnanny->skill) }}"
                                                    class="form-control @error('premiumnannySkill') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="skill...">
                                                @error('premiumnannySkill')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>


                                                <label for="cc-payment" class="control-label mb-1">Language</label>
                                                <input type="hidden" name="premiumnannyId" value="{{ $premiumnanny->id }}">
                                                <input id="cc-payment" name="premiumnannyLanguage" type="text"
                                                    value="{{ old('premiumnannyLanguage', $premiumnanny->language) }}"
                                                    class="form-control @error('premiumnannyLanguage') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="language...">
                                                @error('premiumnannyLanguage')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror


                                                <br>
                                                Pets :
                                                <div class="ms-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="Yes" @if(old('pets', $premiumnanny->pet) == 'Yes') checked @endif name="pets" id="">
                                                        <label class="form-check-label" for="fulltime">
                                                          Yes
                                                        </label>
                                                        <input type="hidden" name="premiumnannyId" value="{{ $premiumnanny->id }}">
                                                      </div>
                                                      <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="No" @if(old('pets', $premiumnanny->pet) == 'No') checked @endif name="pets" id="" >
                                                        <label class="form-check-label" for="parttime">
                                                          No
                                                        </label>
                                                        <input type="hidden" name="premiumnannyId" value="{{ $premiumnanny->id }}">
                                                      </div>
                                                    <textarea name="petNote" class="form-control" id="" cols="10" rows="5">{{ old('petNote', $premiumnanny->pet_note) }}</textarea>
                                                </div>

                                                <br>
                                                <div class="input-group">
                                                    <span class="input-group-text">Vaccine</span>
                                                    <input type="hidden" name="premiumnannyId" value="{{ $premiumnanny->id }}">
                                                    <textarea class="form-control" name="premiumnannyVaccine" aria-label="With textarea">{{ old('premiumnannyVaccine', $premiumnanny->vaccine) }}</textarea>
                                                </div>

                                                <br>
                                                <div class="d-flex">
                                                    <h4 class="text-danger mb-2">Remark : </h4>
                                                    <p class="ms-2">(optional)</p>
                                                </div>
                                                <div class="form-floating">
                                                    <textarea class="form-control" value="" name="premiumnannyRemark" placeholder="" id="remark">{{ old('premiumnannyRemark', $premiumnanny->remark) }}</textarea>
                                                    <label for="remark">Remark*</label>
                                                </div>

                                                <br>
                                                Note : (optional)
                                                <div>
                                                    <textarea class="form-control" name="note" id="" cols="" rows="">{{ old('note', $premiumnanny->note) }}</textarea>
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
