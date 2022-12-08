@extends('admin.layouts.master')

@section('title', 'Maid List')

@section('content')

    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="col-md-12">

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-3 offset-8">
                                <a href="{{ route('maid#updatePage', $maid->id) }}"><button class="btn bg-dark text-white my-3">
                                        Back</button></a>
                            </div>
                        </div>
                        <div class="col-lg-6 offset-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <h3 class="text-center title-2 p-2">Edit Maid Info</h3>
                                    </div>
                                    <hr>
                                    <form action="{{ route('maid#update', $maid->id) }}" method="post"
                                        enctype="multipart/form-data" novalidate="novalidate">
                                        @csrf
                                        <div class="form-group p-3">
                                            <div class="mb-2">
                                                <label for="cc-payment" class="control-label mb-1">Code#</label>
                                                <input type="hidden" name="maidId" value="{{ $maid->id }}">
                                                <input id="cc-payment" name="maidCode" type="text"
                                                    value="{{ old('maidCode', $maid->code) }}"
                                                    class="form-control @error('maidCode') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="code#">
                                                @error('maidCode')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Photo</label>
                                                <input type="hidden" name="maidId" value="{{ $maid->id }}">
                                                @if($maid->photo != null)
                                                <img src="{{ asset('storage/'. $maid->photo) }}" class="img-thumbnail" alt="...">
                                                @endif
                                                <input id="cc-payment" name="maidPhoto" type="file"
                                                    value="{{ old('maidPhoto',$maid->maidPhoto) }}"
                                                    class="form-control @error('maidPhoto') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="upload photo...">
                                                @error('maidPhoto')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Name</label>
                                                <input type="hidden" name="maidId" value="{{ $maid->id }}">
                                                <input id="cc-payment" name="maidName" type="text"
                                                    value="{{ old('maidName', $maid->name) }}"
                                                    class="form-control @error('maidName') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="Enter name...">
                                                @error('maidName')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Date of Birth</label>
                                                <input type="hidden" name="maidId" value="{{ $maid->id }}">
                                                <input id="cc-payment" name="maidDoB" type="text"
                                                    value="{{ old('maidDoB', $maid->date_of_birth) }}"
                                                    class="form-control @error('maidDoB') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false"
                                                    placeholder="Date of Birth...">
                                                @error('maidDoB')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Position</label>
                                                <input type="hidden" name="maidId" value="{{ $maid->id }}">
                                                <input id="cc-payment" name="maidPosition" type="text"
                                                    value="{{ old('maidPosition', $maid->position) }}"
                                                    class="form-control @error('maidPosition') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="position...">
                                                @error('maidPosition')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Nationality</label>
                                                <input type="hidden" name="maidId" value="{{ $maid->id }}">
                                                <input id="cc-payment" name="maidNationality" type="text"
                                                    value="{{ old('maidNationality', $maid->nationality) }}"
                                                    class="form-control @error('maidNationality') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="nationality...">
                                                @error('maidNationality')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Religion</label>
                                                <input type="hidden" name="maidId" value="{{ $maid->id }}">
                                                <input id="cc-payment" name="maidReligion" type="text"
                                                    value="{{ old('maidReligion', $maid->religion) }}"
                                                    class="form-control @error('maidReligion') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="religion...">
                                                @error('maidReligion')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Weight</label>
                                                <input type="hidden" name="maidId" value="{{ $maid->id }}">
                                                <input id="cc-payment" name="maidWeight" type="text"
                                                    value="{{ old('maidWeight', $maid->weight) }}"
                                                    class="form-control @error('maidWeight') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="weight...">
                                                @error('maidWeight')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Height</label>
                                                <input type="hidden" name="maidId" value="{{ $maid->id }}">
                                                <input id="cc-payment" name="maidHeight" type="text"
                                                    value="{{ old('maidHeight', $maid->height) }}"
                                                    class="form-control @error('maidHeight') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="height...">
                                                @error('maidHeight')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Status</label>
                                                <input type="hidden" name="maidId" value="{{ $maid->id }}">
                                                <input id="cc-payment" name="maidStatus" type="text"
                                                    value="{{ old('maidStatus', $maid->status) }}"
                                                    class="form-control @error('maidStatus') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="status...">
                                                @error('maidStatus')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Salary</label>
                                                <input type="hidden" name="maidId" value="{{ $maid->id }}">
                                                <input id="cc-payment" name="maidSalary" type="text"
                                                    value="{{ old('maidSalary', $maid->salary) }}"
                                                    class="form-control @error('maidSalary') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="salary...">
                                                @error('maidSalary')
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
                                                                value="full-time" @if(old('full_part', $maid->full_part) == 'full-time') checked @endif  name="full_part" id="fulltime">
                                                            <label class="form-check-label" for="fulltime">
                                                                Full-time
                                                            </label>
                                                            <input type="hidden" name="maidId" value="{{ $maid->id }}">
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                value="part-time" @if (old('full_part', $maid->full_part) == 'part-time') checked @endif name="full_part" id="parttime">
                                                            <label class="form-check-label" for="parttime">
                                                                Part-time
                                                            </label>
                                                            <input type="hidden" name="maidId" value="{{ $maid->id }}">
                                                        </div>
                                                    </div>

                                                    <div class="ms-5">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                value="live-In" @if(old('live_in_out', $maid->live_in_out) == 'live-In') checked @endif name="live_in_out" id="livein">
                                                            <label class="form-check-label" for="livein">
                                                                Live-In
                                                            </label>
                                                            <input type="hidden" name="maidId" value="{{ $maid->id }}">
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                value="live-Out" @if(old('live_in_out', $maid->live_in_out) == 'live-Out') checked @endif name="live_in_out" id="liveout">
                                                            <label class="form-check-label" for="liveout">
                                                                Live-Out
                                                            </label>
                                                            <input type="hidden" name="maidId" value="{{ $maid->id }}">
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
                                                    <textarea class="form-control"  name="maidExperience" placeholder="Experience" id="experience">{{ old('maidExperience', $maid->experience) }}</textarea>
                                                    <label for="experience"></label>
                                                    <input type="hidden" name="maidId" value="{{ $maid->id }}">
                                                </div>
                                                @error('maidExperience')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Skill</label>
                                                <input type="hidden" name="maidId" value="{{ $maid->id }}">
                                                <input id="cc-payment" name="maidSkill" type="text"
                                                    value="{{ old('maidSkill', $maid->skill) }}"
                                                    class="form-control @error('maidSkill') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="skill...">
                                                @error('maidSkill')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>


                                                <label for="cc-payment" class="control-label mb-1">Language</label>
                                                <input type="hidden" name="maidId" value="{{ $maid->id }}">
                                                <input id="cc-payment" name="maidLanguage" type="text"
                                                    value="{{ old('maidLanguage', $maid->language) }}"
                                                    class="form-control @error('maidLanguage') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="language...">
                                                @error('maidLanguage')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror


                                                <br>
                                                Pets :
                                                <div class="ms-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="Yes" @if(old('pets', $maid->pet) == 'Yes') checked @endif name="pets" id="">
                                                        <label class="form-check-label" for="fulltime">
                                                          Yes
                                                        </label>
                                                        <input type="hidden" name="maidId" value="{{ $maid->id }}">
                                                      </div>
                                                      <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="No" @if(old('pets', $maid->pet) == 'No') checked @endif name="pets" id="" >
                                                        <label class="form-check-label" for="parttime">
                                                          No
                                                        </label>
                                                        <input type="hidden" name="maidId" value="{{ $maid->id }}">
                                                      </div>
                                                    <textarea name="petNote" class="form-control" id="" cols="10" rows="5">{{ old('petNote', $maid->pet_note) }}</textarea>
                                                </div>

                                                <br>

                                                <p class="text-danger"><b>Remark :</b></p>

                                                <br>
                                                Note : (optional)
                                                <div>
                                                    <textarea class="form-control" name="note" id="" cols="" rows="">{{ old('note', $maid->note) }}</textarea>
                                                </div>

                                                <br>

                                                <div class="input-group">
                                                    <span class="input-group-text">Vaccine</span>
                                                    <input type="hidden" name="maidId" value="{{ $maid->id }}">
                                                    <textarea class="form-control" name="maidVaccine" aria-label="With textarea">{{ old('maidVaccine', $maid->vaccine) }}</textarea>


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
