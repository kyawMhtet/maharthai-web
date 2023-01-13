@extends('admin.layouts.master')

@section('title', 'Sale Man List')

@section('content')

    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="col-md-12">

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-3 offset-8">
                                <a href="{{ route('saleman#updatePage', $saleman->id) }}"><button
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
                                    <form action="{{ route('saleman#update', $saleman->id) }}" method="post"
                                        enctype="multipart/form-data" novalidate="novalidate">
                                        @csrf
                                        <div class="form-group p-3">
                                            <div class="mb-2">
                                                <label for="cc-payment" class="control-label mb-1">Code#</label>
                                                <input type="hidden" name="salemanId" value="{{ $saleman->id }}">
                                                <input id="cc-payment" name="salemanCode" type="text"
                                                    value="{{ old('salemanCode', $saleman->code) }}"
                                                    class="form-control @error('salemanCode') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="code#">
                                                @error('salemanCode')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Photo</label>
                                                <input type="hidden" name="salemanId" value="{{ $saleman->id }}">
                                                @if ($saleman->photo != null)
                                                    <img src="{{ asset('storage/' . $saleman->photo) }}"
                                                        class="img-thumbnail" alt="...">
                                                @endif
                                                <input id="cc-payment" name="salemanPhoto" type="file"
                                                    value="{{ old('salemanPhoto', $saleman->salemanPhoto) }}"
                                                    class="form-control @error('salemanPhoto') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="upload photo...">
                                                @error('salemanPhoto')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Name</label>
                                                <input type="hidden" name="salemanId" value="{{ $saleman->id }}">
                                                <input id="cc-payment" name="salemanName" type="text"
                                                    value="{{ old('salemanName', $saleman->name) }}"
                                                    class="form-control @error('salemanName') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="Enter name...">
                                                @error('salemanName')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Date of Birth</label>
                                                <input type="hidden" name="salemanId" value="{{ $saleman->id }}">
                                                <input id="cc-payment" name="salemanDoB" type="text"
                                                    value="{{ old('salemanDoB', $saleman->date_of_birth) }}"
                                                    class="form-control @error('salemanDoB') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false"
                                                    placeholder="Date of Birth...">
                                                @error('salemanDoB')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Position</label>
                                                <input type="hidden" name="salemanId" value="{{ $saleman->id }}">
                                                <input id="cc-payment" name="salemanPosition" type="text"
                                                    value="{{ old('salemanPosition', $saleman->position) }}"
                                                    class="form-control @error('salemanPosition') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="position...">
                                                @error('salemanPosition')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Nationality</label>
                                                <input type="hidden" name="salemanId" value="{{ $saleman->id }}">
                                                <input id="cc-payment" name="salemanNationality" type="text"
                                                    value="{{ old('salemanNationality', $saleman->nationality) }}"
                                                    class="form-control @error('salemanNationality') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false"
                                                    placeholder="nationality...">
                                                @error('salemanNationality')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Religion</label>
                                                <input type="hidden" name="salemanId" value="{{ $saleman->id }}">
                                                <input id="cc-payment" name="salemanReligion" type="text"
                                                    value="{{ old('salemanReligion', $saleman->religion) }}"
                                                    class="form-control @error('salemanReligion') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="religion...">
                                                @error('salemanReligion')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Weight</label>
                                                <input type="hidden" name="salemanId" value="{{ $saleman->id }}">
                                                <input id="cc-payment" name="salemanWeight" type="text"
                                                    value="{{ old('salemanWeight', $saleman->weight) }}"
                                                    class="form-control @error('salemanWeight') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="weight...">
                                                @error('salemanWeight')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Height</label>
                                                <input type="hidden" name="salemanId" value="{{ $saleman->id }}">
                                                <input id="cc-payment" name="salemanHeight" type="text"
                                                    value="{{ old('salemanHeight', $saleman->height) }}"
                                                    class="form-control @error('salemanHeight') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="height...">
                                                @error('salemanHeight')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Status</label>
                                                <input type="hidden" name="salemanId" value="{{ $saleman->id }}">
                                                <input id="cc-payment" name="salemanStatus" type="text"
                                                    value="{{ old('salemanStatus', $saleman->status) }}"
                                                    class="form-control @error('salemanStatus') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="status...">
                                                @error('salemanStatus')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Salary</label>
                                                <input type="hidden" name="salemanId" value="{{ $saleman->id }}">
                                                <input id="cc-payment" name="salemanSalary" type="text"
                                                    value="{{ old('salemanSalary', $saleman->salary) }}"
                                                    class="form-control @error('salemanSalary') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="salary...">
                                                @error('salemanSalary')
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
                                                                @if (old('full_part', $saleman->full_part) == 'full-time') checked @endif
                                                                name="full_part" id="fulltime">
                                                            <label class="form-check-label" for="fulltime">
                                                                Full-time
                                                            </label>
                                                            <input type="hidden" name="salemanId"
                                                                value="{{ $saleman->id }}">
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                value="part-time"
                                                                @if (old('full_part', $saleman->full_part) == 'part-time') checked @endif
                                                                name="full_part" id="parttime">
                                                            <label class="form-check-label" for="parttime">
                                                                Part-time
                                                            </label>
                                                            <input type="hidden" name="salemanId"
                                                                value="{{ $saleman->id }}">
                                                        </div>
                                                    </div>

                                                    <div class="ms-5">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                value="live-In"
                                                                @if (old('live_in_out', $saleman->live_in_out) == 'live-In') checked @endif
                                                                name="live_in_out" id="livein">
                                                            <label class="form-check-label" for="livein">
                                                                Live-In
                                                            </label>
                                                            <input type="hidden" name="salemanId"
                                                                value="{{ $saleman->id }}">
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                value="live-Out"
                                                                @if (old('live_in_out', $saleman->live_in_out) == 'live-Out') checked @endif
                                                                name="live_in_out" id="liveout">
                                                            <label class="form-check-label" for="liveout">
                                                                Live-Out
                                                            </label>
                                                            <input type="hidden" name="salemanId"
                                                                value="{{ $saleman->id }}">
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
                                                    <textarea class="form-control" name="salemanExperience" placeholder="Experience" id="experience">{{ old('salemanExperience', $saleman->experience) }}</textarea>
                                                    <label for="experience"></label>
                                                    <input type="hidden" name="salemanId" value="{{ $saleman->id }}">
                                                </div>
                                                @error('salemanExperience')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Skill</label>
                                                <input type="hidden" name="salemanId" value="{{ $saleman->id }}">
                                                <input id="cc-payment" name="salemanSkill" type="text"
                                                    value="{{ old('salemanSkill', $saleman->skill) }}"
                                                    class="form-control @error('salemanSkill') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="skill...">
                                                @error('salemanSkill')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>


                                                <label for="cc-payment" class="control-label mb-1">Language</label>
                                                <input type="hidden" name="salemanId" value="{{ $saleman->id }}">
                                                <input id="cc-payment" name="salemanLanguage" type="text"
                                                    value="{{ old('salemanLanguage', $saleman->language) }}"
                                                    class="form-control @error('salemanLanguage') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="language...">
                                                @error('salemanLanguage')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror


                                                <br>
                                                Pets :
                                                <div class="ms-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="Yes"
                                                            @if (old('pets', $saleman->pet) == 'Yes') checked @endif
                                                            name="pets" id="">
                                                        <label class="form-check-label" for="fulltime">
                                                            Yes
                                                        </label>
                                                        <input type="hidden" name="salemanId"
                                                            value="{{ $saleman->id }}">
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="No"
                                                            @if (old('pets', $saleman->pet) == 'No') checked @endif
                                                            name="pets" id="">
                                                        <label class="form-check-label" for="parttime">
                                                            No
                                                        </label>
                                                        <input type="hidden" name="salemanId"
                                                            value="{{ $saleman->id }}">
                                                    </div>
                                                    <textarea name="petNote" class="form-control" id="" cols="10" rows="5">{{ old('petNote', $saleman->pet_note) }}</textarea>
                                                </div>

                                                <br>

                                                Available/Not Available :
                                                <div class="ms-3">
                                                    <div>
                                                        <select class="form-select" name="salemanStock"
                                                            aria-label="Default select example">
                                                            {{-- <option value="" selected>Available or Not Available</option> --}}
                                                            <option value="Available"
                                                                @if (old('salemanStock', $saleman->stockstatus) == 'Available') selected @endif>Available
                                                            </option>
                                                            <option value="Not Available"
                                                                @if (old('salemanStock', $saleman->stockstatus) == 'Not Available') selected @endif>Not
                                                                Available</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <br>
                                                <div class="input-group">
                                                    <span class="input-group-text">Vaccine</span>
                                                    <input type="hidden" name="salemanId" value="{{ $saleman->id }}">
                                                    <textarea class="form-control" name="salemanVaccine" aria-label="With textarea">{{ old('salemanVaccine', $saleman->vaccine) }}</textarea>
                                                </div>

                                                <br>
                                                <div class="d-flex">
                                                    <h4 class="text-danger mb-2">Remark : </h4>
                                                    <p class="ms-2">(optional)</p>
                                                </div>
                                                <div class="form-floating">
                                                    <textarea class="form-control" value="" name="salemanRemark" placeholder="" id="remark">{{ old('salemanRemark', $saleman->remark) }}</textarea>
                                                    <label for="remark">Remark*</label>
                                                </div>

                                                <br>
                                                Note : (optional)
                                                <div>
                                                    <textarea class="form-control" name="note" id="" cols="" rows="">{{ old('note', $saleman->note) }}</textarea>
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
