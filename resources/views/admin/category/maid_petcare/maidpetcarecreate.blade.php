@extends('admin.layouts.master')

@section('title', 'Maid, Pet Care List')

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
                                <h2 class="title-1">Maid, Pet Care List</h2>

                            </div>
                        </div>
                        <div class="table-data__tool-right">
                            <a href="{{ route('maidpetcare#create') }}">
                                <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                    <i class="zmdi zmdi-plus"></i>Add Maid, Pet Care
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-3 offset-8">
                                <a href="{{ route('maidpetcare#page') }}"><button class="btn bg-dark text-white my-3">
                                        Back</button></a>
                            </div>
                        </div>
                        <div class="col-lg-6 offset-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <h3 class="text-center title-2 p-2">Maid, Eldercare Form</h3>
                                    </div>
                                    <hr>
                                    <form action="{{ route('maidpetcare#aftercreate') }}" method="post"
                                        enctype="multipart/form-data" novalidate="novalidate">
                                        @csrf
                                        <div class="form-group p-3">
                                            <div class="mb-2">
                                                <label for="cc-payment" class="control-label mb-1">Code#</label>
                                                <input id="cc-payment" name="maidpetcareCode" type="text"
                                                    value="{{ old('maidpetcareCode') }}"
                                                    class="form-control @error('maidpetcareCode') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="code#">
                                                @error('maidpetcareCode')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <div id="display-image"></div>
                                                <label for="cc-payment" class="control-label mb-1">Photo</label>
                                                <input accept="image/jpeg, image/png" name="maidpetcarePhoto"
                                                    value="{{ old('maidpetcarePhoto') }}" id="image-input" type="file"
                                                    class="form-control @error('maidpetcarePhoto') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="upload photo...">
                                                @error('maidpetcarePhoto')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Name</label>
                                                <input id="cc-payment" name="maidpetcareName" type="text"
                                                    value="{{ old('maidpetcareName') }}"
                                                    class="form-control @error('maidpetcareName') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="Enter name...">
                                                @error('maidpetcareName')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Date of Birth</label>
                                                <input id="cc-payment" name="maidpetcareDoB" type="text"
                                                    value="{{ old('maidpetcareDoB') }}"
                                                    class="form-control @error('maidpetcareDoB') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false"
                                                    placeholder="Date of Birth...">
                                                @error('maidpetcareDoB')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Position</label>
                                                <input id="cc-payment" name="maidpetcarePosition" type="text" value="Maid, Pet Care"
                                                    class="form-control @error('maidpetcarePosition') is-invalid  @enderror"
                                                    aria-label="Disabled input example" disabled>
                                                @error('maidpetcarePosition')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Nationality</label>
                                                <input id="cc-payment" name="maidpetcareNationality" type="text"
                                                    value="{{ old('maidpetcareNationality') }}"
                                                    class="form-control @error('maidpetcareNationality') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="nationality...">
                                                @error('maidpetcareNationality')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Religion</label>
                                                <input id="cc-payment" name="maidpetcareReligion" type="text"
                                                    value="{{ old('maidpetcareReligion') }}"
                                                    class="form-control @error('maidpetcareReligion') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="religion...">
                                                @error('maidpetcareReligion')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Weight</label>
                                                <input id="cc-payment" name="maidpetcareWeight" type="text"
                                                    value="{{ old('maidpetcareWeight') }}"
                                                    class="form-control @error('maidpetcareWeight') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="weight...">
                                                @error('maidpetcareWeight')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Height</label>
                                                <input id="cc-payment" name="maidpetcareHeight" type="text"
                                                    value="{{ old('maidpetcareHeight') }}"
                                                    class="form-control @error('maidpetcareHeight') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="height...">
                                                @error('maidpetcareHeight')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Status</label>
                                                <input id="cc-payment" name="maidpetcareStatus" type="text"
                                                    value="{{ old('maidpetcareStatus') }}"
                                                    class="form-control @error('maidpetcareStatus') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="status...">
                                                @error('maidpetcareStatus')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                Salary
                                                <div class="mt-3 input-group">
                                                    <input type="text"
                                                        class="form-control @error('maidpetcareSalary') is-invalid  @enderror"
                                                        name="maidpetcareSalary" value="{{ old('maidpetcareSalary') }}"
                                                        placeholder="salary...">
                                                    <span class="input-group-text">Baht</span>

                                                </div>
                                                @error('maidpetcareSalary')
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
                                                                @if (old('full_part') == 'full-time') checked @endif
                                                                name="full_part" id="fulltime">
                                                            <label class="form-check-label" for="fulltime">
                                                                Full-time
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                value="part-time"
                                                                @if (old('full_part') == 'part-time') checked @endif
                                                                name="full_part" id="parttime">
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
                                                                value="live-Out"
                                                                @if (old('live_in_out') == 'live-Out') checked @endif
                                                                name="live_in_out" id="liveout">
                                                            <label class="form-check-label" for="liveout">
                                                                Live-Out
                                                            </label>
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
                                                    <textarea class="form-control @error('maidpetcareExperience') is-invalid  @enderror" value="" name="maidpetcareExperience" placeholder="Experience" id="experience">{{ old('maidpetcareExperience') }}</textarea>
                                                    <label for="experience">experience...</label>
                                                </div>
                                                @error('maidpetcareExperience')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                Skill : <br>
                                                <div class="form-floating">
                                                    <textarea name="maidpetcareSkill" class="form-control @error('maidpetcareSkill') is-invalid  @enderror" id="skill" cols="10" rows="5">{{ old('nannySkill') }}</textarea>
                                                    <label for="skill">skill...</label>
                                                </div>


                                                @error('maidpetcareSkill')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Language</label>
                                                <input id="cc-payment" name="maidpetcareLanguage" type="text"
                                                    value="{{ old('maidpetcareLanguage') }}"
                                                    class="form-control @error('maidpetcareLanguage') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="language...">
                                                @error('maidpetcareLanguage')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror


                                                <br>

                                                Pets :
                                                <div class="ms-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="Yes"
                                                            @if (old('pets') == 'Yes') checked @endif
                                                            name="pets" id="">
                                                        <label class="form-check-label" for="">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="No"
                                                            @if (old('pets') == 'No') checked @endif
                                                            name="pets" id="">
                                                        <label class="form-check-label" for="">
                                                            No
                                                        </label>
                                                    </div>
                                                    <small>Note:</small>
                                                    <textarea name="petNote" class="form-control @error('petNote') is-invalid  @enderror" id="" cols="10" rows="5">{{ old('petNote') }}</textarea>
                                                </div>


                                                <br>

                                                <div class="mt-3 input-group">
                                                    <span class="input-group-text">Vaccine</span>
                                                    <textarea class="form-control @error('maidpetcareVaccine') is-invalid  @enderror" name="maidpetcareVaccine" aria-label="With textarea">{{ old('maidpetcareVaccine') }}</textarea>
                                                </div>
                                                @error('maidpetcareVaccine')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror

                                                <br>

                                                <div class="d-flex">
                                                    <h4 class="text-danger mb-2">Remark : </h4>
                                                    <p class="ms-2">(optional)</p>
                                                </div>
                                                <div class="form-floating">
                                                    <textarea class="form-control" value="" name="maidpetcareRemark" placeholder="" id="remark">{{ old('maidpetcareRemark') }}</textarea>
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
