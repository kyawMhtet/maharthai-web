@extends('admin.layouts.master')

@section('title', 'HouseKeeping List')

@section('content')

    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="col-md-12">
                    <!-- DATA TABLE -->
                    <div class="table-data__tool">
                        <div class="table-data__tool-left">
                            <div class="overview-wrap">
                                <h2 class="title-1">housekeeping List</h2>

                            </div>
                        </div>
                        <div class="table-data__tool-right">
                            <a href="{{ route('housekeeping#create') }}">
                                <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                    <i class="zmdi zmdi-plus"></i>Add housekeeping
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-3 offset-8">
                                <a href="{{ route('housekeeping#page') }}"><button class="btn bg-dark text-white my-3">
                                        Back</button></a>
                            </div>
                        </div>
                        <div class="col-lg-6 offset-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <h3 class="text-center title-2 p-2">Housekeeping Form</h3>
                                    </div>
                                    <hr>
                                    <form action="{{ route('housekeeping#aftercreate') }}" method="post"
                                        enctype="multipart/form-data" novalidate="novalidate">
                                        @csrf
                                        <div class="form-group p-3">
                                            <div class="mb-2">
                                                <label for="cc-payment" class="control-label mb-1">Code#</label>
                                                <input id="cc-payment" name="housekeepingCode" type="text"
                                                    value="{{ old('housekeepingCode') }}"
                                                    class="form-control @error('housekeepingCode') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="code#">
                                                @error('housekeepingCode')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <div id="display-image"></div>
                                                <label for="cc-payment" class="control-label mb-1">Photo</label>
                                                <input accept="image/jpeg, image/png" name="housekeepingPhoto"
                                                value="{{ old('housekeepingPhoto') }}"
                                                    id="image-input" type="file"
                                                    class="form-control @error('housekeepingPhoto') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="upload photo...">
                                                @error('housekeepingPhoto')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Name</label>
                                                <input id="cc-payment" name="housekeepingName" type="text"
                                                    value="{{ old('housekeepingName') }}"
                                                    class="form-control @error('housekeepingName') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="Enter name...">
                                                @error('housekeepingName')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Date of Birth</label>
                                                <input id="cc-payment" name="housekeepingDoB" type="text"
                                                    value="{{ old('housekeepingDoB') }}"
                                                    class="form-control @error('housekeepingDoB') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false"
                                                    placeholder="Date of Birth...">
                                                @error('housekeepingDoB')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Position</label>
                                                <input id="cc-payment" name="housekeepingPosition" type="text"
                                                    value="HouseKeeping"
                                                    class="form-control @error('housekeepingPosition') is-invalid  @enderror"
                                                    aria-label="Disabled input example" disabled>
                                                @error('housekeepingPosition')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Nationality</label>
                                                <input id="cc-payment" name="housekeepingNationality" type="text"
                                                    value="{{ old('housekeepingNationality') }}"
                                                    class="form-control @error('housekeepingNationality') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="nationality...">
                                                @error('housekeepingNationality')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Religion</label>
                                                <input id="cc-payment" name="housekeepingReligion" type="text"
                                                    value="{{ old('housekeepingReligion') }}"
                                                    class="form-control @error('housekeepingReligion') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="religion...">
                                                @error('housekeepingReligion')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Weight</label>
                                                <input id="cc-payment" name="housekeepingWeight" type="text"
                                                    value="{{ old('housekeepingWeight') }}"
                                                    class="form-control @error('housekeepingWeight') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="weight...">
                                                @error('housekeepingWeight')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Height</label>
                                                <input id="cc-payment" name="housekeepingHeight" type="text"
                                                    value="{{ old('housekeepingHeight') }}"
                                                    class="form-control @error('housekeepingHeight') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="height...">
                                                @error('housekeepingHeight')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Status</label>
                                                <input id="cc-payment" name="housekeepingStatus" type="text"
                                                    value="{{ old('housekeepingStatus') }}"
                                                    class="form-control @error('housekeepingStatus') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="status...">
                                                @error('housekeepingStatus')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                Salary
                                                <div class="mt-3 input-group">
                                                    <input type="text"
                                                        class="form-control @error('housekeepingSalary') is-invalid  @enderror"
                                                        name="housekeepingSalary" value="{{ old('housekeepingSalary') }}"
                                                        placeholder="salary...">
                                                    <span class="input-group-text">Baht</span>

                                                </div>
                                                @error('housekeepingSalary')
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
                                                                value="full-time" @if (old('full_part') == 'full-time') checked @endif name="full_part" id="fulltime">
                                                            <label class="form-check-label" for="fulltime">
                                                                Full-time
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                value="part-time" @if (old('full_part') == 'part-time') checked @endif name="full_part" id="parttime">
                                                            <label class="form-check-label" for="parttime">
                                                                Part-time
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="ms-5">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                value="live-In"
                                                                @if (old('live_in_out') == 'live-In') checked @endif
                                                                name="live_in_out" id="livein">
                                                            <label class="form-check-label" for="livein">
                                                                Live-In
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                value="live-Out"`
                                                                @if (old('live_in_out') == 'live-Out') checked @endif
                                                                name="live_in_out" id="liveout">
                                                            <label class="form-check-label" for="liveout">
                                                                Live-Out
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>

                                                @error('workingTime', 'liveIn')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>
                                                Experience : <br>
                                                <div class="form-floating">
                                                    <textarea class="form-control @error('housekeepingExperience') is-invalid  @enderror" value="" name="housekeepingExperience" placeholder="Experience"id="experience">{{ old('housekeepingExperience') }}</textarea>
                                                    <label for="experience">experience...</label>
                                                </div>
                                                @error('housekeepingExperience')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                Skill : <br>
                                                <div class="form-floating">
                                                    <textarea name="housekeepingSkill" class="form-control @error('housekeepingSkill') is-invalid  @enderror" id="skill" cols="10" rows="5">{{ old('housekeepingSkill') }}</textarea>
                                                    <label for="skill">skill...</label>
                                                </div>
                                                @error('housekeepingSkill')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Language</label>
                                                <input id="cc-payment" name="housekeepingLanguage" type="text"
                                                    value="{{ old('housekeepingLanguage') }}"
                                                    class="form-control @error('housekeepingLanguage') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="language...">
                                                @error('housekeepingLanguage')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror


                                                <br>

                                                Pets :
                                                <div class="ms-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="Yes" @if (old('pets') == 'Yes') checked @endif
                                                            name="pets" id="">
                                                        <label class="form-check-label" for="">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="No" @if (old('pets') == 'No') checked @endif
                                                            name="pets" id="">
                                                        <label class="form-check-label" for="">
                                                            No
                                                        </label>
                                                    </div>
                                                    <textarea name="petNote" class="form-control" id="" cols="10" rows="5">{{ old('petNote') }}</textarea>
                                                </div>

                                                <br>

                                                <div class="mt-3 input-group">
                                                    <span class="input-group-text">Vaccine</span>
                                                    <textarea class="form-control" name="housekeepingVaccine" aria-label="With textarea">{{ old('housekeepingVaccine') }}</textarea>
                                                </div>
                                                <br>

                                                <div class="d-flex">
                                                    <h4 class="text-danger mb-2">Remark : </h4>
                                                    <p class="ms-2">(optional)</p>
                                                </div>
                                                <div class="form-floating">
                                                    <textarea class="form-control" value="" name="housekeepingRemark" placeholder="" id="remark">{{ old('housekeepingRemark') }}</textarea>
                                                    <label for="remark">Remark*</label>
                                                </div>

                                                <br>

                                                Note : (optional)
                                                <div>
                                                    <textarea class="form-control" name="note" id="" cols="" rows="">{{ old('note') }}</textarea>
                                                </div>


                                            </div>
                                        </div>

                                        <div class="mt-2 ms-3 py-2">
                                            <button id="payment-button" type="submit"
                                                class="btn btn-danger btn-info btn-block">
                                                <span id="payment-button-amount">Create</span>
                                                <span id="payment-button-sending" style="display:none;">Sending…</span>
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

    <script>
        const image_input = document.querySelector("#image-input");
        image_input.addEventListener("change", function() {
            const reader = new FileReader();
            reader.addEventListener("load", () => {
                const uploaded_image = reader.result;
                document.querySelector("#display-image").style.backgroundImage = `url(${uploaded_image})`;
                document.querySelector("#display-image").style.display = "block";

            });
            reader.readAsDataURL(this.files[0]);
        });
    </script>
    <!-- END MAIN CONTENT-->


@endsection
