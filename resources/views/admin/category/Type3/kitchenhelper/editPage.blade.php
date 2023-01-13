@extends('admin.layouts.master')

@section('title', 'KitchenHelper List')

@section('content')

    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="col-md-12">

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-3 offset-8">
                                <a href="{{ route('kitchenhelper#updatePage', $kitchenhelper->id) }}"><button
                                        class="btn bg-dark text-white my-3">
                                        Back</button></a>
                            </div>
                        </div>
                        <div class="col-lg-6 offset-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <h3 class="text-center title-2 p-2">Edit KitchenHelper Info</h3>
                                    </div>
                                    <hr>
                                    <form action="{{ route('kitchenhelper#update', $kitchenhelper->id) }}" method="post"
                                        enctype="multipart/form-data" novalidate="novalidate">
                                        @csrf
                                        <div class="form-group p-3">
                                            <div class="mb-2">
                                                <label for="cc-payment" class="control-label mb-1">Code#</label>
                                                <input type="hidden" name="kitchenhelperId" value="{{ $kitchenhelper->id }}">
                                                <input id="cc-payment" name="kitchenhelperCode" type="text"
                                                    value="{{ old('kitchenhelperCode', $kitchenhelper->code) }}"
                                                    class="form-control @error('kitchenhelperCode') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="code#">
                                                @error('kitchenhelperCode')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Photo</label>
                                                <input type="hidden" name="kitchenhelperId" value="{{ $kitchenhelper->id }}">
                                                @if ($kitchenhelper->photo != null)
                                                    <img src="{{ asset('storage/' . $kitchenhelper->photo) }}"
                                                        class="img-thumbnail" alt="...">
                                                @endif
                                                <input id="cc-payment" name="kitchenhelperPhoto" type="file"
                                                    value="{{ old('kitchenhelperPhoto', $kitchenhelper->kitchenhelperPhoto) }}"
                                                    class="form-control @error('kitchenhelperPhoto') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="upload photo...">
                                                @error('kitchenhelperPhoto')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Name</label>
                                                <input type="hidden" name="kitchenhelperId" value="{{ $kitchenhelper->id }}">
                                                <input id="cc-payment" name="kitchenhelperName" type="text"
                                                    value="{{ old('kitchenhelperName', $kitchenhelper->name) }}"
                                                    class="form-control @error('kitchenhelperName') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="Enter name...">
                                                @error('kitchenhelperName')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Date of Birth</label>
                                                <input type="hidden" name="kitchenhelperId" value="{{ $kitchenhelper->id }}">
                                                <input id="cc-payment" name="kitchenhelperDoB" type="text"
                                                    value="{{ old('kitchenhelperDoB', $kitchenhelper->date_of_birth) }}"
                                                    class="form-control @error('kitchenhelperDoB') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false"
                                                    placeholder="Date of Birth...">
                                                @error('kitchenhelperDoB')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Position</label>
                                                <input type="hidden" name="kitchenhelperId" value="{{ $kitchenhelper->id }}">
                                                <input id="cc-payment" name="kitchenhelperPosition" type="text"
                                                    value="{{ old('kitchenhelperPosition', $kitchenhelper->position) }}"
                                                    class="form-control @error('kitchenhelperPosition') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="position...">
                                                @error('kitchenhelperPosition')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Nationality</label>
                                                <input type="hidden" name="kitchenhelperId" value="{{ $kitchenhelper->id }}">
                                                <input id="cc-payment" name="kitchenhelperNationality" type="text"
                                                    value="{{ old('kitchenhelperNationality', $kitchenhelper->nationality) }}"
                                                    class="form-control @error('kitchenhelperNationality') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false"
                                                    placeholder="nationality...">
                                                @error('kitchenhelperNationality')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Religion</label>
                                                <input type="hidden" name="kitchenhelperId" value="{{ $kitchenhelper->id }}">
                                                <input id="cc-payment" name="kitchenhelperReligion" type="text"
                                                    value="{{ old('kitchenhelperReligion', $kitchenhelper->religion) }}"
                                                    class="form-control @error('kitchenhelperReligion') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="religion...">
                                                @error('kitchenhelperReligion')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Weight</label>
                                                <input type="hidden" name="kitchenhelperId" value="{{ $kitchenhelper->id }}">
                                                <input id="cc-payment" name="kitchenhelperWeight" type="text"
                                                    value="{{ old('kitchenhelperWeight', $kitchenhelper->weight) }}"
                                                    class="form-control @error('kitchenhelperWeight') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="weight...">
                                                @error('kitchenhelperWeight')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Height</label>
                                                <input type="hidden" name="kitchenhelperId" value="{{ $kitchenhelper->id }}">
                                                <input id="cc-payment" name="kitchenhelperHeight" type="text"
                                                    value="{{ old('kitchenhelperHeight', $kitchenhelper->height) }}"
                                                    class="form-control @error('kitchenhelperHeight') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="height...">
                                                @error('kitchenhelperHeight')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Status</label>
                                                <input type="hidden" name="kitchenhelperId" value="{{ $kitchenhelper->id }}">
                                                <input id="cc-payment" name="kitchenhelperStatus" type="text"
                                                    value="{{ old('kitchenhelperStatus', $kitchenhelper->status) }}"
                                                    class="form-control @error('kitchenhelperStatus') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="status...">
                                                @error('kitchenhelperStatus')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Salary</label>
                                                <input type="hidden" name="kitchenhelperId" value="{{ $kitchenhelper->id }}">
                                                <input id="cc-payment" name="kitchenhelperSalary" type="text"
                                                    value="{{ old('kitchenhelperSalary', $kitchenhelper->salary) }}"
                                                    class="form-control @error('kitchenhelperSalary') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="salary...">
                                                @error('kitchenhelperSalary')
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
                                                                @if (old('full_part', $kitchenhelper->full_part) == 'full-time') checked @endif
                                                                name="full_part" id="fulltime">
                                                            <label class="form-check-label" for="fulltime">
                                                                Full-time
                                                            </label>
                                                            <input type="hidden" name="kitchenhelperId"
                                                                value="{{ $kitchenhelper->id }}">
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                value="part-time"
                                                                @if (old('full_part', $kitchenhelper->full_part) == 'part-time') checked @endif
                                                                name="full_part" id="parttime">
                                                            <label class="form-check-label" for="parttime">
                                                                Part-time
                                                            </label>
                                                            <input type="hidden" name="kitchenhelperId"
                                                                value="{{ $kitchenhelper->id }}">
                                                        </div>
                                                    </div>

                                                    <div class="ms-5">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                value="live-In"
                                                                @if (old('live_in_out', $kitchenhelper->live_in_out) == 'live-In') checked @endif
                                                                name="live_in_out" id="livein">
                                                            <label class="form-check-label" for="livein">
                                                                Live-In
                                                            </label>
                                                            <input type="hidden" name="kitchenhelperId"
                                                                value="{{ $kitchenhelper->id }}">
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                value="live-Out"
                                                                @if (old('live_in_out', $kitchenhelper->live_in_out) == 'live-Out') checked @endif
                                                                name="live_in_out" id="liveout">
                                                            <label class="form-check-label" for="liveout">
                                                                Live-Out
                                                            </label>
                                                            <input type="hidden" name="kitchenhelperId"
                                                                value="{{ $kitchenhelper->id }}">
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
                                                    <textarea class="form-control" name="kitchenhelperExperience" placeholder="Experience" id="experience">{{ old('kitchenhelperExperience', $kitchenhelper->experience) }}</textarea>
                                                    <label for="experience"></label>
                                                    <input type="hidden" name="kitchenhelperId" value="{{ $kitchenhelper->id }}">
                                                </div>
                                                @error('kitchenhelperExperience')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Skill</label>
                                                <input type="hidden" name="kitchenhelperId" value="{{ $kitchenhelper->id }}">
                                                <input id="cc-payment" name="kitchenhelperSkill" type="text"
                                                    value="{{ old('kitchenhelperSkill', $kitchenhelper->skill) }}"
                                                    class="form-control @error('kitchenhelperSkill') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="skill...">
                                                @error('kitchenhelperSkill')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>


                                                <label for="cc-payment" class="control-label mb-1">Language</label>
                                                <input type="hidden" name="kitchenhelperId" value="{{ $kitchenhelper->id }}">
                                                <input id="cc-payment" name="kitchenhelperLanguage" type="text"
                                                    value="{{ old('kitchenhelperLanguage', $kitchenhelper->language) }}"
                                                    class="form-control @error('kitchenhelperLanguage') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="language...">
                                                @error('kitchenhelperLanguage')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror


                                                <br>
                                                Pets :
                                                <div class="ms-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="Yes"
                                                            @if (old('pets', $kitchenhelper->pet) == 'Yes') checked @endif
                                                            name="pets" id="">
                                                        <label class="form-check-label" for="fulltime">
                                                            Yes
                                                        </label>
                                                        <input type="hidden" name="kitchenhelperId"
                                                            value="{{ $kitchenhelper->id }}">
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="No"
                                                            @if (old('pets', $kitchenhelper->pet) == 'No') checked @endif
                                                            name="pets" id="">
                                                        <label class="form-check-label" for="parttime">
                                                            No
                                                        </label>
                                                        <input type="hidden" name="kitchenhelperId"
                                                            value="{{ $kitchenhelper->id }}">
                                                    </div>
                                                    <textarea name="petNote" class="form-control" id="" cols="10" rows="5">{{ old('petNote', $kitchenhelper->pet_note) }}</textarea>
                                                </div>

                                                <br>

                                                Available/Not Available :
                                                <div class="ms-3">
                                                    <div>
                                                        <select class="form-select" name="kitchenhelperStock"
                                                            aria-label="Default select example">
                                                            {{-- <option value="" selected>Available or Not Available</option> --}}
                                                            <option value="Available"
                                                                @if (old('kitchenhelperStock', $kitchenhelper->stockstatus) == 'Available') selected @endif>Available
                                                            </option>
                                                            <option value="Not Available"
                                                                @if (old('kitchenhelperStock', $kitchenhelper->stockstatus) == 'Not Available') selected @endif>Not
                                                                Available</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <br>
                                                <div class="input-group">
                                                    <span class="input-group-text">Vaccine</span>
                                                    <input type="hidden" name="kitchenhelperId" value="{{ $kitchenhelper->id }}">
                                                    <textarea class="form-control" name="kitchenhelperVaccine" aria-label="With textarea">{{ old('kitchenhelperVaccine', $kitchenhelper->vaccine) }}</textarea>
                                                </div>

                                                <br>
                                                <div class="d-flex">
                                                    <h4 class="text-danger mb-2">Remark : </h4>
                                                    <p class="ms-2">(optional)</p>
                                                </div>
                                                <div class="form-floating">
                                                    <textarea class="form-control" value="" name="kitchenhelperRemark" placeholder="" id="remark">{{ old('kitchenhelperRemark', $kitchenhelper->remark) }}</textarea>
                                                    <label for="remark">Remark*</label>
                                                </div>

                                                <br>
                                                Note : (optional)
                                                <div>
                                                    <textarea class="form-control" name="note" id="" cols="" rows="">{{ old('note', $kitchenhelper->note) }}</textarea>
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
