@extends('admin.layouts.master')

@section('title', 'Manager List')

@section('content')

    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="col-md-12">

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-3 offset-8">
                                <a href="{{ route('manager#updatePage', $manager->id) }}"><button
                                        class="btn bg-dark text-white my-3">
                                        Back</button></a>
                            </div>
                        </div>
                        <div class="col-lg-6 offset-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <h3 class="text-center title-2 p-2">Edit Manager Info</h3>
                                    </div>
                                    <hr>
                                    <form action="{{ route('manager#update', $manager->id) }}" method="post"
                                        enctype="multipart/form-data" novalidate="novalidate">
                                        @csrf
                                        <div class="form-group p-3">
                                            <div class="mb-2">
                                                <label for="cc-payment" class="control-label mb-1">Code#</label>
                                                <input type="hidden" name="managerId" value="{{ $manager->id }}">
                                                <input id="cc-payment" name="managerCode" type="text"
                                                    value="{{ old('managerCode', $manager->code) }}"
                                                    class="form-control @error('managerCode') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="code#">
                                                @error('managerCode')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Photo</label>
                                                <input type="hidden" name="managerId" value="{{ $manager->id }}">
                                                @if ($manager->photo != null)
                                                    <img src="{{ asset('storage/' . $manager->photo) }}"
                                                        class="img-thumbnail" alt="...">
                                                @endif
                                                <input id="cc-payment" name="managerPhoto" type="file"
                                                    value="{{ old('managerPhoto', $manager->managerPhoto) }}"
                                                    class="form-control @error('managerPhoto') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="upload photo...">
                                                @error('managerPhoto')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Name</label>
                                                <input type="hidden" name="managerId" value="{{ $manager->id }}">
                                                <input id="cc-payment" name="managerName" type="text"
                                                    value="{{ old('managerName', $manager->name) }}"
                                                    class="form-control @error('managerName') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="Enter name...">
                                                @error('managerName')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Date of Birth</label>
                                                <input type="hidden" name="managerId" value="{{ $manager->id }}">
                                                <input id="cc-payment" name="managerDoB" type="text"
                                                    value="{{ old('managerDoB', $manager->date_of_birth) }}"
                                                    class="form-control @error('managerDoB') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false"
                                                    placeholder="Date of Birth...">
                                                @error('managerDoB')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Position</label>
                                                <input type="hidden" name="managerId" value="{{ $manager->id }}">
                                                <input id="cc-payment" name="managerPosition" type="text"
                                                    value="{{ old('managerPosition', $manager->position) }}"
                                                    class="form-control @error('managerPosition') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="position...">
                                                @error('managerPosition')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Nationality</label>
                                                <input type="hidden" name="managerId" value="{{ $manager->id }}">
                                                <input id="cc-payment" name="managerNationality" type="text"
                                                    value="{{ old('managerNationality', $manager->nationality) }}"
                                                    class="form-control @error('managerNationality') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false"
                                                    placeholder="nationality...">
                                                @error('managerNationality')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Religion</label>
                                                <input type="hidden" name="managerId" value="{{ $manager->id }}">
                                                <input id="cc-payment" name="managerReligion" type="text"
                                                    value="{{ old('managerReligion', $manager->religion) }}"
                                                    class="form-control @error('managerReligion') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="religion...">
                                                @error('managerReligion')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Weight</label>
                                                <input type="hidden" name="managerId" value="{{ $manager->id }}">
                                                <input id="cc-payment" name="managerWeight" type="text"
                                                    value="{{ old('managerWeight', $manager->weight) }}"
                                                    class="form-control @error('managerWeight') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="weight...">
                                                @error('managerWeight')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Height</label>
                                                <input type="hidden" name="managerId" value="{{ $manager->id }}">
                                                <input id="cc-payment" name="managerHeight" type="text"
                                                    value="{{ old('managerHeight', $manager->height) }}"
                                                    class="form-control @error('managerHeight') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="height...">
                                                @error('managerHeight')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Status</label>
                                                <input type="hidden" name="managerId" value="{{ $manager->id }}">
                                                <input id="cc-payment" name="managerStatus" type="text"
                                                    value="{{ old('managerStatus', $manager->status) }}"
                                                    class="form-control @error('managerStatus') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="status...">
                                                @error('managerStatus')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Salary</label>
                                                <input type="hidden" name="managerId" value="{{ $manager->id }}">
                                                <input id="cc-payment" name="managerSalary" type="text"
                                                    value="{{ old('managerSalary', $manager->salary) }}"
                                                    class="form-control @error('managerSalary') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="salary...">
                                                @error('managerSalary')
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
                                                                @if (old('full_part', $manager->full_part) == 'full-time') checked @endif
                                                                name="full_part" id="fulltime">
                                                            <label class="form-check-label" for="fulltime">
                                                                Full-time
                                                            </label>
                                                            <input type="hidden" name="managerId"
                                                                value="{{ $manager->id }}">
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                value="part-time"
                                                                @if (old('full_part', $manager->full_part) == 'part-time') checked @endif
                                                                name="full_part" id="parttime">
                                                            <label class="form-check-label" for="parttime">
                                                                Part-time
                                                            </label>
                                                            <input type="hidden" name="managerId"
                                                                value="{{ $manager->id }}">
                                                        </div>
                                                    </div>

                                                    <div class="ms-5">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                value="live-In"
                                                                @if (old('live_in_out', $manager->live_in_out) == 'live-In') checked @endif
                                                                name="live_in_out" id="livein">
                                                            <label class="form-check-label" for="livein">
                                                                Live-In
                                                            </label>
                                                            <input type="hidden" name="managerId"
                                                                value="{{ $manager->id }}">
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                value="live-Out"
                                                                @if (old('live_in_out', $manager->live_in_out) == 'live-Out') checked @endif
                                                                name="live_in_out" id="liveout">
                                                            <label class="form-check-label" for="liveout">
                                                                Live-Out
                                                            </label>
                                                            <input type="hidden" name="managerId"
                                                                value="{{ $manager->id }}">
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
                                                    <textarea class="form-control" name="managerExperience" placeholder="Experience" id="experience">{{ old('managerExperience', $manager->experience) }}</textarea>
                                                    <label for="experience"></label>
                                                    <input type="hidden" name="managerId" value="{{ $manager->id }}">
                                                </div>
                                                @error('managerExperience')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Skill</label>
                                                <input type="hidden" name="managerId" value="{{ $manager->id }}">
                                                <input id="cc-payment" name="managerSkill" type="text"
                                                    value="{{ old('managerSkill', $manager->skill) }}"
                                                    class="form-control @error('managerSkill') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="skill...">
                                                @error('managerSkill')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>


                                                <label for="cc-payment" class="control-label mb-1">Language</label>
                                                <input type="hidden" name="managerId" value="{{ $manager->id }}">
                                                <input id="cc-payment" name="managerLanguage" type="text"
                                                    value="{{ old('managerLanguage', $manager->language) }}"
                                                    class="form-control @error('managerLanguage') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="language...">
                                                @error('managerLanguage')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror


                                                <br>
                                                Pets :
                                                <div class="ms-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="Yes"
                                                            @if (old('pets', $manager->pet) == 'Yes') checked @endif
                                                            name="pets" id="">
                                                        <label class="form-check-label" for="fulltime">
                                                            Yes
                                                        </label>
                                                        <input type="hidden" name="managerId"
                                                            value="{{ $manager->id }}">
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="No"
                                                            @if (old('pets', $manager->pet) == 'No') checked @endif
                                                            name="pets" id="">
                                                        <label class="form-check-label" for="parttime">
                                                            No
                                                        </label>
                                                        <input type="hidden" name="managerId"
                                                            value="{{ $manager->id }}">
                                                    </div>
                                                    <textarea name="petNote" class="form-control" id="" cols="10" rows="5">{{ old('petNote', $manager->pet_note) }}</textarea>
                                                </div>

                                                <br>

                                                Available/Not Available :
                                                <div class="ms-3">
                                                    <div>
                                                        <select class="form-select" name="managerStock"
                                                            aria-label="Default select example">
                                                            {{-- <option value="" selected>Available or Not Available</option> --}}
                                                            <option value="Available"
                                                                @if (old('managerStock', $manager->stockstatus) == 'Available') selected @endif>Available
                                                            </option>
                                                            <option value="Not Available"
                                                                @if (old('managerStock', $manager->stockstatus) == 'Not Available') selected @endif>Not
                                                                Available</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <br>
                                                <div class="input-group">
                                                    <span class="input-group-text">Vaccine</span>
                                                    <input type="hidden" name="managerId" value="{{ $manager->id }}">
                                                    <textarea class="form-control" name="managerVaccine" aria-label="With textarea">{{ old('managerVaccine', $manager->vaccine) }}</textarea>
                                                </div>

                                                <br>
                                                <div class="d-flex">
                                                    <h4 class="text-danger mb-2">Remark : </h4>
                                                    <p class="ms-2">(optional)</p>
                                                </div>
                                                <div class="form-floating">
                                                    <textarea class="form-control" value="" name="managerRemark" placeholder="" id="remark">{{ old('managerRemark', $manager->remark) }}</textarea>
                                                    <label for="remark">Remark*</label>
                                                </div>

                                                <br>
                                                Note : (optional)
                                                <div>
                                                    <textarea class="form-control" name="note" id="" cols="" rows="">{{ old('note', $manager->note) }}</textarea>
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
