@extends('admin.layouts.master')

@section('title', 'Premium Nanny List')

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
                                <h2 class="title-1">Premium Nanny List</h2>

                            </div>
                        </div>
                        <div class="table-data__tool-right">
                            <a href="{{ route('premiumNannyCreate#page') }}">
                                <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                    <i class="zmdi zmdi-plus"></i>Add Premium Nanny
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-3 offset-8">
                                <a href="{{ route('premiumNanny#page') }}"><button class="btn bg-dark text-white my-3">
                                        Back</button></a>
                            </div>
                        </div>
                        <div class="col-lg-6 offset-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <h3 class="text-center title-2 p-2">Category Form</h3>
                                    </div>
                                    <hr>
                                    <form action="{{ route('premiumNanny#aftercreate') }}" method="post"
                                        enctype="multipart/form-data" novalidate="novalidate">
                                        @csrf
                                        <div class="form-group p-3">
                                            <div class="mb-2">
                                                <label for="cc-payment" class="control-label mb-1">Code#</label>
                                                <input id="cc-payment" name="premiumNannyCode" type="text"
                                                    value="{{ old('premiumNannyCode') }}"
                                                    class="form-control @error('premiumNannyCode') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="code#">
                                                @error('premiumNannyCode')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <div id="display-image"></div>
                                                <label for="cc-payment" class="control-label mb-1">Photo</label>
                                                <input accept="image/jpeg, image/png" name="premiumNannyPhoto"
                                                    value="{{ old('premiumNannyPhoto') }}" id="image-input" type="file"
                                                    class="form-control @error('premiumNannyPhoto') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="upload photo...">
                                                @error('premiumNannyPhoto')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Name</label>
                                                <input id="cc-payment" name="premiumNannyName" type="text"
                                                    value="{{ old('premiumNannyName') }}"
                                                    class="form-control @error('premiumNannyName') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="Enter name...">
                                                @error('premiumNannyName')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Date of Birth</label>
                                                <input id="cc-payment" name="premiumNannyDoB" type="text"
                                                    value="{{ old('premiumNannyDoB') }}"
                                                    class="form-control @error('premiumNannyDoB') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false"
                                                    placeholder="Date of Birth...">
                                                @error('premiumNannyDoB')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Position</label>
                                                <input id="cc-payment" name="premiumNannyPosition" type="text"
                                                    value="Nanny, Maid"
                                                    class="form-control @error('premiumNannyPosition') is-invalid  @enderror"
                                                    aria-label="Disabled input example" disabled>
                                                @error('premiumNannyPosition')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Nationality</label>
                                                <input id="cc-payment" name="premiumNannyNationality" type="text"
                                                    value="{{ old('premiumNannyNationality') }}"
                                                    class="form-control @error('premiumNannyNationality') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="nationality...">
                                                @error('premiumNannyNationality')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Religion</label>
                                                <input id="cc-payment" name="premiumNannyReligion" type="text"
                                                    value="{{ old('premiumNannyReligion') }}"
                                                    class="form-control @error('premiumNannyReligion') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="religion...">
                                                @error('premiumNannyReligion')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Weight</label>
                                                <input id="cc-payment" name="premiumNannyWeight" type="text"
                                                    value="{{ old('premiumNannyWeight') }}"
                                                    class="form-control @error('premiumNannyWeight') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="weight...">
                                                @error('premiumNannyWeight')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Height</label>
                                                <input id="cc-payment" name="premiumNannyHeight" type="text"
                                                    value="{{ old('premiumNannyHeight') }}"
                                                    class="form-control @error('premiumNannyHeight') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="height...">
                                                @error('premiumNannyHeight')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Status</label>
                                                <input id="cc-payment" name="premiumNannyStatus" type="text"
                                                    value="{{ old('premiumNannyStatus') }}"
                                                    class="form-control @error('premiumNannyStatus') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="status...">
                                                @error('premiumNannyStatus')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                {{-- <label for="cc-payment" class="control-label mb-1">Salary</label>
                                                <input id="cc-payment" name="nannySalary" type="text"
                                                    value="{{ old('nannySalary') }}"
                                                    class="form-control @error('nannySalary') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="salary...">
                                                @error('nannySalary')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror --}}

                                                <div class="mt-3 input-group">
                                                    <input type="text"
                                                        class="form-control @error('premiumNannySalary') is-invalid  @enderror"
                                                        name="premiumNannySalary" value="{{ old('premiumNannySalary') }}"
                                                        placeholder="salary...">
                                                    <span class="input-group-text">Baht</span>

                                                </div>
                                                @error('premiumNannySalary')
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
                                                                value="full_time" name="full_part" id="fulltime">
                                                            <label class="form-check-label" for="fulltime">
                                                                Full-time
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                value="part_time" name="full_part" id="parttime">
                                                            <label class="form-check-label" for="parttime">
                                                                Part-time
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="ms-5">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                value="live_In" name="live_in_out" id="livein">
                                                            <label class="form-check-label" for="livein">
                                                                Live-In
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                value="live_Out" name="live_in_out" id="liveout">
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
                                                    <textarea class="form-control" value="{{ old('premiumNannyExperience') }}" name="premiumNannyExperience" placeholder="Experience"
                                                        id="experience"></textarea>
                                                    <label for="experience">experience...</label>
                                                </div>
                                                @error('premiumNannyExperience')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                Skill : <br>
                                                <textarea name="premiumNannySkill" class="form-control" id="" cols="10" rows="5">
                                                    {{ old('premiumNannySkill') }}
                                                </textarea>
                                                @error('premiumNannySkill')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Language</label>
                                                <input id="cc-payment" name="premiumNannyLanguage" type="text"
                                                    value="{{ old('premiumNannyLanguage') }}"
                                                    class="form-control @error('premiumNannyLanguage') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="language...">
                                                @error('premiumNannyLanguage')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror


                                                <br>

                                                Pets :
                                                <div class="ms-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="Yes"
                                                            name="pets" id="">
                                                        <label class="form-check-label" for="">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="No"
                                                            name="pets" id="">
                                                        <label class="form-check-label" for="">
                                                            No
                                                        </label>
                                                    </div>
                                                    <textarea name="petNote" class="form-control" id="" cols="10" rows="5"></textarea>
                                                </div>

                                                <br>

                                                <div class="mt-3 input-group">
                                                    <span class="input-group-text">Vaccine</span>
                                                    <textarea class="form-control" name="premiumNannyVaccine" aria-label="With textarea"></textarea>
                                                </div>
                                                <br>

                                                <h4 class="text-danger">Remark : </h4> <br>
                                                Note : (optional)
                                                <div>
                                                    <textarea class="form-control" name="note" id="" cols="" rows=""></textarea>
                                                </div>


                                            </div>
                                        </div>

                                        <div class="mt-2 ms-3">
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
