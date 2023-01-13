@extends('admin.layouts.master')

@section('title', 'Cashier List')

@section('content')

    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="col-md-12">

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-3 offset-8">
                                <a href="{{ route('cashier#updatePage', $cashier->id) }}"><button
                                        class="btn bg-dark text-white my-3">
                                        Back</button></a>
                            </div>
                        </div>
                        <div class="col-lg-6 offset-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <h3 class="text-center title-2 p-2">Edit Cashier Info</h3>
                                    </div>
                                    <hr>
                                    <form action="{{ route('cashier#update', $cashier->id) }}" method="post"
                                        enctype="multipart/form-data" novalidate="novalidate">
                                        @csrf
                                        <div class="form-group p-3">
                                            <div class="mb-2">
                                                <label for="cc-payment" class="control-label mb-1">Code#</label>
                                                <input type="hidden" name="cashierId" value="{{ $cashier->id }}">
                                                <input id="cc-payment" name="cashierCode" type="text"
                                                    value="{{ old('cashierCode', $cashier->code) }}"
                                                    class="form-control @error('cashierCode') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="code#">
                                                @error('cashierCode')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Photo</label>
                                                <input type="hidden" name="cashierId" value="{{ $cashier->id }}">
                                                @if ($cashier->photo != null)
                                                    <img src="{{ asset('storage/' . $cashier->photo) }}"
                                                        class="img-thumbnail" alt="...">
                                                @endif
                                                <input id="cc-payment" name="cashierPhoto" type="file"
                                                    value="{{ old('cashierPhoto', $cashier->cashierPhoto) }}"
                                                    class="form-control @error('cashierPhoto') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="upload photo...">
                                                @error('cashierPhoto')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Name</label>
                                                <input type="hidden" name="cashierId" value="{{ $cashier->id }}">
                                                <input id="cc-payment" name="cashierName" type="text"
                                                    value="{{ old('cashierName', $cashier->name) }}"
                                                    class="form-control @error('cashierName') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="Enter name...">
                                                @error('cashierName')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Date of Birth</label>
                                                <input type="hidden" name="cashierId" value="{{ $cashier->id }}">
                                                <input id="cc-payment" name="cashierDoB" type="text"
                                                    value="{{ old('cashierDoB', $cashier->date_of_birth) }}"
                                                    class="form-control @error('cashierDoB') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false"
                                                    placeholder="Date of Birth...">
                                                @error('cashierDoB')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Position</label>
                                                <input type="hidden" name="cashierId" value="{{ $cashier->id }}">
                                                <input id="cc-payment" name="cashierPosition" type="text"
                                                    value="{{ old('cashierPosition', $cashier->position) }}"
                                                    class="form-control @error('cashierPosition') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="position...">
                                                @error('cashierPosition')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Nationality</label>
                                                <input type="hidden" name="cashierId" value="{{ $cashier->id }}">
                                                <input id="cc-payment" name="cashierNationality" type="text"
                                                    value="{{ old('cashierNationality', $cashier->nationality) }}"
                                                    class="form-control @error('cashierNationality') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false"
                                                    placeholder="nationality...">
                                                @error('cashierNationality')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Religion</label>
                                                <input type="hidden" name="cashierId" value="{{ $cashier->id }}">
                                                <input id="cc-payment" name="cashierReligion" type="text"
                                                    value="{{ old('cashierReligion', $cashier->religion) }}"
                                                    class="form-control @error('cashierReligion') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="religion...">
                                                @error('cashierReligion')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Weight</label>
                                                <input type="hidden" name="cashierId" value="{{ $cashier->id }}">
                                                <input id="cc-payment" name="cashierWeight" type="text"
                                                    value="{{ old('cashierWeight', $cashier->weight) }}"
                                                    class="form-control @error('cashierWeight') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="weight...">
                                                @error('cashierWeight')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Height</label>
                                                <input type="hidden" name="cashierId" value="{{ $cashier->id }}">
                                                <input id="cc-payment" name="cashierHeight" type="text"
                                                    value="{{ old('cashierHeight', $cashier->height) }}"
                                                    class="form-control @error('cashierHeight') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="height...">
                                                @error('cashierHeight')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Status</label>
                                                <input type="hidden" name="cashierId" value="{{ $cashier->id }}">
                                                <input id="cc-payment" name="cashierStatus" type="text"
                                                    value="{{ old('cashierStatus', $cashier->status) }}"
                                                    class="form-control @error('cashierStatus') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="status...">
                                                @error('cashierStatus')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Salary</label>
                                                <input type="hidden" name="cashierId" value="{{ $cashier->id }}">
                                                <input id="cc-payment" name="cashierSalary" type="text"
                                                    value="{{ old('cashierSalary', $cashier->salary) }}"
                                                    class="form-control @error('cashierSalary') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="salary...">
                                                @error('cashierSalary')
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
                                                                @if (old('full_part', $cashier->full_part) == 'full-time') checked @endif
                                                                name="full_part" id="fulltime">
                                                            <label class="form-check-label" for="fulltime">
                                                                Full-time
                                                            </label>
                                                            <input type="hidden" name="cashierId"
                                                                value="{{ $cashier->id }}">
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                value="part-time"
                                                                @if (old('full_part', $cashier->full_part) == 'part-time') checked @endif
                                                                name="full_part" id="parttime">
                                                            <label class="form-check-label" for="parttime">
                                                                Part-time
                                                            </label>
                                                            <input type="hidden" name="cashierId"
                                                                value="{{ $cashier->id }}">
                                                        </div>
                                                    </div>

                                                    <div class="ms-5">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                value="live-In"
                                                                @if (old('live_in_out', $cashier->live_in_out) == 'live-In') checked @endif
                                                                name="live_in_out" id="livein">
                                                            <label class="form-check-label" for="livein">
                                                                Live-In
                                                            </label>
                                                            <input type="hidden" name="cashierId"
                                                                value="{{ $cashier->id }}">
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                value="live-Out"
                                                                @if (old('live_in_out', $cashier->live_in_out) == 'live-Out') checked @endif
                                                                name="live_in_out" id="liveout">
                                                            <label class="form-check-label" for="liveout">
                                                                Live-Out
                                                            </label>
                                                            <input type="hidden" name="cashierId"
                                                                value="{{ $cashier->id }}">
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
                                                    <textarea class="form-control" name="cashierExperience" placeholder="Experience" id="experience">{{ old('cashierExperience', $cashier->experience) }}</textarea>
                                                    <label for="experience"></label>
                                                    <input type="hidden" name="cashierId" value="{{ $cashier->id }}">
                                                </div>
                                                @error('cashierExperience')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Skill</label>
                                                <input type="hidden" name="cashierId" value="{{ $cashier->id }}">
                                                <input id="cc-payment" name="cashierSkill" type="text"
                                                    value="{{ old('cashierSkill', $cashier->skill) }}"
                                                    class="form-control @error('cashierSkill') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="skill...">
                                                @error('cashierSkill')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>


                                                <label for="cc-payment" class="control-label mb-1">Language</label>
                                                <input type="hidden" name="cashierId" value="{{ $cashier->id }}">
                                                <input id="cc-payment" name="cashierLanguage" type="text"
                                                    value="{{ old('cashierLanguage', $cashier->language) }}"
                                                    class="form-control @error('cashierLanguage') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="language...">
                                                @error('cashierLanguage')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror


                                                <br>
                                                Pets :
                                                <div class="ms-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="Yes"
                                                            @if (old('pets', $cashier->pet) == 'Yes') checked @endif
                                                            name="pets" id="">
                                                        <label class="form-check-label" for="fulltime">
                                                            Yes
                                                        </label>
                                                        <input type="hidden" name="cashierId"
                                                            value="{{ $cashier->id }}">
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="No"
                                                            @if (old('pets', $cashier->pet) == 'No') checked @endif
                                                            name="pets" id="">
                                                        <label class="form-check-label" for="parttime">
                                                            No
                                                        </label>
                                                        <input type="hidden" name="cashierId"
                                                            value="{{ $cashier->id }}">
                                                    </div>
                                                    <textarea name="petNote" class="form-control" id="" cols="10" rows="5">{{ old('petNote', $cashier->pet_note) }}</textarea>
                                                </div>

                                                <br>

                                                Available/Not Available :
                                                <div class="ms-3">
                                                    <div>
                                                        <select class="form-select" name="cashierStock"
                                                            aria-label="Default select example">
                                                            {{-- <option value="" selected>Available or Not Available</option> --}}
                                                            <option value="Available"
                                                                @if (old('cashierStock', $cashier->stockstatus) == 'Available') selected @endif>Available
                                                            </option>
                                                            <option value="Not Available"
                                                                @if (old('cashierStock', $cashier->stockstatus) == 'Not Available') selected @endif>Not
                                                                Available</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <br>
                                                <div class="input-group">
                                                    <span class="input-group-text">Vaccine</span>
                                                    <input type="hidden" name="cashierId" value="{{ $cashier->id }}">
                                                    <textarea class="form-control" name="cashierVaccine" aria-label="With textarea">{{ old('cashierVaccine', $cashier->vaccine) }}</textarea>
                                                </div>

                                                <br>
                                                <div class="d-flex">
                                                    <h4 class="text-danger mb-2">Remark : </h4>
                                                    <p class="ms-2">(optional)</p>
                                                </div>
                                                <div class="form-floating">
                                                    <textarea class="form-control" value="" name="cashierRemark" placeholder="" id="remark">{{ old('cashierRemark', $cashier->remark) }}</textarea>
                                                    <label for="remark">Remark*</label>
                                                </div>

                                                <br>
                                                Note : (optional)
                                                <div>
                                                    <textarea class="form-control" name="note" id="" cols="" rows="">{{ old('note', $cashier->note) }}</textarea>
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
