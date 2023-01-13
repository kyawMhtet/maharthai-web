@extends('admin.layouts.master')

@section('title', 'ChiefAssistant List')

@section('content')

    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="col-md-12">

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-3 offset-8">
                                <a href="{{ route('chiefassistant#updatePage', $chiefassistant->id) }}"><button
                                        class="btn bg-dark text-white my-3">
                                        Back</button></a>
                            </div>
                        </div>
                        <div class="col-lg-6 offset-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <h3 class="text-center title-2 p-2">Edit ChiefAssistant Info</h3>
                                    </div>
                                    <hr>
                                    <form action="{{ route('chiefassistant#update', $chiefassistant->id) }}" method="post"
                                        enctype="multipart/form-data" novalidate="novalidate">
                                        @csrf
                                        <div class="form-group p-3">
                                            <div class="mb-2">
                                                <label for="cc-payment" class="control-label mb-1">Code#</label>
                                                <input type="hidden" name="chiefassistantId" value="{{ $chiefassistant->id }}">
                                                <input id="cc-payment" name="chiefassistantCode" type="text"
                                                    value="{{ old('chiefassistantCode', $chiefassistant->code) }}"
                                                    class="form-control @error('chiefassistantCode') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="code#">
                                                @error('chiefassistantCode')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Photo</label>
                                                <input type="hidden" name="chiefassistantId" value="{{ $chiefassistant->id }}">
                                                @if ($chiefassistant->photo != null)
                                                    <img src="{{ asset('storage/' . $chiefassistant->photo) }}"
                                                        class="img-thumbnail" alt="...">
                                                @endif
                                                <input id="cc-payment" name="chiefassistantPhoto" type="file"
                                                    value="{{ old('chiefassistantPhoto', $chiefassistant->chiefassistantPhoto) }}"
                                                    class="form-control @error('chiefassistantPhoto') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="upload photo...">
                                                @error('chiefassistantPhoto')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Name</label>
                                                <input type="hidden" name="chiefassistantId" value="{{ $chiefassistant->id }}">
                                                <input id="cc-payment" name="chiefassistantName" type="text"
                                                    value="{{ old('chiefassistantName', $chiefassistant->name) }}"
                                                    class="form-control @error('chiefassistantName') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="Enter name...">
                                                @error('chiefassistantName')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Date of Birth</label>
                                                <input type="hidden" name="chiefassistantId" value="{{ $chiefassistant->id }}">
                                                <input id="cc-payment" name="chiefassistantDoB" type="text"
                                                    value="{{ old('chiefassistantDoB', $chiefassistant->date_of_birth) }}"
                                                    class="form-control @error('chiefassistantDoB') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false"
                                                    placeholder="Date of Birth...">
                                                @error('chiefassistantDoB')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Position</label>
                                                <input type="hidden" name="chiefassistantId" value="{{ $chiefassistant->id }}">
                                                <input id="cc-payment" name="chiefassistantPosition" type="text"
                                                    value="{{ old('chiefassistantPosition', $chiefassistant->position) }}"
                                                    class="form-control @error('chiefassistantPosition') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="position...">
                                                @error('chiefassistantPosition')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Nationality</label>
                                                <input type="hidden" name="chiefassistantId" value="{{ $chiefassistant->id }}">
                                                <input id="cc-payment" name="chiefassistantNationality" type="text"
                                                    value="{{ old('chiefassistantNationality', $chiefassistant->nationality) }}"
                                                    class="form-control @error('chiefassistantNationality') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false"
                                                    placeholder="nationality...">
                                                @error('chiefassistantNationality')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Religion</label>
                                                <input type="hidden" name="chiefassistantId" value="{{ $chiefassistant->id }}">
                                                <input id="cc-payment" name="chiefassistantReligion" type="text"
                                                    value="{{ old('chiefassistantReligion', $chiefassistant->religion) }}"
                                                    class="form-control @error('chiefassistantReligion') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="religion...">
                                                @error('chiefassistantReligion')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Weight</label>
                                                <input type="hidden" name="chiefassistantId" value="{{ $chiefassistant->id }}">
                                                <input id="cc-payment" name="chiefassistantWeight" type="text"
                                                    value="{{ old('chiefassistantWeight', $chiefassistant->weight) }}"
                                                    class="form-control @error('chiefassistantWeight') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="weight...">
                                                @error('chiefassistantWeight')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Height</label>
                                                <input type="hidden" name="chiefassistantId" value="{{ $chiefassistant->id }}">
                                                <input id="cc-payment" name="chiefassistantHeight" type="text"
                                                    value="{{ old('chiefassistantHeight', $chiefassistant->height) }}"
                                                    class="form-control @error('chiefassistantHeight') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="height...">
                                                @error('chiefassistantHeight')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Status</label>
                                                <input type="hidden" name="chiefassistantId" value="{{ $chiefassistant->id }}">
                                                <input id="cc-payment" name="chiefassistantStatus" type="text"
                                                    value="{{ old('chiefassistantStatus', $chiefassistant->status) }}"
                                                    class="form-control @error('chiefassistantStatus') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="status...">
                                                @error('chiefassistantStatus')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Salary</label>
                                                <input type="hidden" name="chiefassistantId" value="{{ $chiefassistant->id }}">
                                                <input id="cc-payment" name="chiefassistantSalary" type="text"
                                                    value="{{ old('chiefassistantSalary', $chiefassistant->salary) }}"
                                                    class="form-control @error('chiefassistantSalary') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="salary...">
                                                @error('chiefassistantSalary')
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
                                                                @if (old('full_part', $chiefassistant->full_part) == 'full-time') checked @endif
                                                                name="full_part" id="fulltime">
                                                            <label class="form-check-label" for="fulltime">
                                                                Full-time
                                                            </label>
                                                            <input type="hidden" name="chiefassistantId"
                                                                value="{{ $chiefassistant->id }}">
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                value="part-time"
                                                                @if (old('full_part', $chiefassistant->full_part) == 'part-time') checked @endif
                                                                name="full_part" id="parttime">
                                                            <label class="form-check-label" for="parttime">
                                                                Part-time
                                                            </label>
                                                            <input type="hidden" name="chiefassistantId"
                                                                value="{{ $chiefassistant->id }}">
                                                        </div>
                                                    </div>

                                                    <div class="ms-5">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                value="live-In"
                                                                @if (old('live_in_out', $chiefassistant->live_in_out) == 'live-In') checked @endif
                                                                name="live_in_out" id="livein">
                                                            <label class="form-check-label" for="livein">
                                                                Live-In
                                                            </label>
                                                            <input type="hidden" name="chiefassistantId"
                                                                value="{{ $chiefassistant->id }}">
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                value="live-Out"
                                                                @if (old('live_in_out', $chiefassistant->live_in_out) == 'live-Out') checked @endif
                                                                name="live_in_out" id="liveout">
                                                            <label class="form-check-label" for="liveout">
                                                                Live-Out
                                                            </label>
                                                            <input type="hidden" name="chiefassistantId"
                                                                value="{{ $chiefassistant->id }}">
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
                                                    <textarea class="form-control" name="chiefassistantExperience" placeholder="Experience" id="experience">{{ old('chiefassistantExperience', $chiefassistant->experience) }}</textarea>
                                                    <label for="experience"></label>
                                                    <input type="hidden" name="chiefassistantId" value="{{ $chiefassistant->id }}">
                                                </div>
                                                @error('chiefassistantExperience')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Skill</label>
                                                <input type="hidden" name="chiefassistantId" value="{{ $chiefassistant->id }}">
                                                <input id="cc-payment" name="chiefassistantSkill" type="text"
                                                    value="{{ old('chiefassistantSkill', $chiefassistant->skill) }}"
                                                    class="form-control @error('chiefassistantSkill') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="skill...">
                                                @error('chiefassistantSkill')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>


                                                <label for="cc-payment" class="control-label mb-1">Language</label>
                                                <input type="hidden" name="chiefassistantId" value="{{ $chiefassistant->id }}">
                                                <input id="cc-payment" name="chiefassistantLanguage" type="text"
                                                    value="{{ old('chiefassistantLanguage', $chiefassistant->language) }}"
                                                    class="form-control @error('chiefassistantLanguage') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="language...">
                                                @error('chiefassistantLanguage')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror


                                                <br>
                                                Pets :
                                                <div class="ms-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="Yes"
                                                            @if (old('pets', $chiefassistant->pet) == 'Yes') checked @endif
                                                            name="pets" id="">
                                                        <label class="form-check-label" for="fulltime">
                                                            Yes
                                                        </label>
                                                        <input type="hidden" name="chiefassistantId"
                                                            value="{{ $chiefassistant->id }}">
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="No"
                                                            @if (old('pets', $chiefassistant->pet) == 'No') checked @endif
                                                            name="pets" id="">
                                                        <label class="form-check-label" for="parttime">
                                                            No
                                                        </label>
                                                        <input type="hidden" name="chiefassistantId"
                                                            value="{{ $chiefassistant->id }}">
                                                    </div>
                                                    <textarea name="petNote" class="form-control" id="" cols="10" rows="5">{{ old('petNote', $chiefassistant->pet_note) }}</textarea>
                                                </div>

                                                <br>

                                                Available/Not Available :
                                                <div class="ms-3">
                                                    <div>
                                                        <select class="form-select" name="chiefassistantStock"
                                                            aria-label="Default select example">
                                                            {{-- <option value="" selected>Available or Not Available</option> --}}
                                                            <option value="Available"
                                                                @if (old('chiefassistantStock', $chiefassistant->stockstatus) == 'Available') selected @endif>Available
                                                            </option>
                                                            <option value="Not Available"
                                                                @if (old('chiefassistantStock', $chiefassistant->stockstatus) == 'Not Available') selected @endif>Not
                                                                Available</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <br>
                                                <div class="input-group">
                                                    <span class="input-group-text">Vaccine</span>
                                                    <input type="hidden" name="chiefassistantId" value="{{ $chiefassistant->id }}">
                                                    <textarea class="form-control" name="chiefassistantVaccine" aria-label="With textarea">{{ old('chiefassistantVaccine', $chiefassistant->vaccine) }}</textarea>
                                                </div>

                                                <br>
                                                <div class="d-flex">
                                                    <h4 class="text-danger mb-2">Remark : </h4>
                                                    <p class="ms-2">(optional)</p>
                                                </div>
                                                <div class="form-floating">
                                                    <textarea class="form-control" value="" name="chiefassistantRemark" placeholder="" id="remark">{{ old('chiefassistantRemark', $chiefassistant->remark) }}</textarea>
                                                    <label for="remark">Remark*</label>
                                                </div>

                                                <br>
                                                Note : (optional)
                                                <div>
                                                    <textarea class="form-control" name="note" id="" cols="" rows="">{{ old('note', $chiefassistant->note) }}</textarea>
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
