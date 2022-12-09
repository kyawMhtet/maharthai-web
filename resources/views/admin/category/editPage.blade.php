@extends('admin.layouts.master')

@section('title', 'Nanny List')

@section('content')

    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="col-md-12">
                    <!-- DATA TABLE -->
                    {{-- <div class="table-data__tool">
                        <div class="table-data__tool-left">
                            <div class="overview-wrap">
                                <h2 class="title-1">Nanny List</h2>

                            </div>
                        </div>
                        <div class="table-data__tool-right">
                            <a href="{{ route('nanny#create') }}">
                                <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                    <i class="zmdi zmdi-plus"></i>Add Nanny
                                </button>
                            </a>
                        </div>
                    </div> --}}
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-3 offset-8">
                                <a href="{{ route('nanny#updatePage', $nanny->id) }}"><button
                                        class="btn bg-dark text-white my-3">
                                        Back</button></a>
                            </div>
                        </div>
                        <div class="col-lg-6 offset-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <h3 class="text-center title-2 p-2">Edit Nanny Info</h3>
                                    </div>
                                    <hr>
                                    <form action="{{ route('nanny#update', $nanny->id) }}" method="post"
                                        enctype="multipart/form-data" novalidate="novalidate">
                                        @csrf
                                        <div class="form-group p-3">
                                            <div class="mb-2">
                                                <label for="cc-payment" class="control-label mb-1">Code#</label>
                                                <input type="hidden" name="nannyId" value="{{ $nanny->id }}">
                                                <input id="cc-payment" name="nannyCode" type="text"
                                                    value="{{ old('nannyCode', $nanny->code) }}"
                                                    class="form-control @error('nannyCode') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="code#">
                                                @error('nannyCode')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Photo</label>
                                                <input type="hidden" name="nannyId" value="{{ $nanny->id }}">
                                                @if ($nanny->photo != null)
                                                    <img src="{{ asset('storage/' . $nanny->photo) }}" class="img-thumbnail"
                                                        alt="...">
                                                @endif
                                                <input id="cc-payment" name="nannyPhoto" type="file"
                                                    value="{{ old('nannyPhoto', $nanny->nannyPhoto) }}"
                                                    class="form-control @error('nannyPhoto') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="upload photo...">
                                                @error('nannyPhoto')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Name</label>
                                                <input type="hidden" name="nannyId" value="{{ $nanny->id }}">
                                                <input id="cc-payment" name="nannyName" type="text"
                                                    value="{{ old('nannyName', $nanny->name) }}"
                                                    class="form-control @error('nannyName') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="Enter name...">
                                                @error('nannyName')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Date of Birth</label>
                                                <input type="hidden" name="nannyId" value="{{ $nanny->id }}">
                                                <input id="cc-payment" name="nannyDoB" type="text"
                                                    value="{{ old('nannyDoB', $nanny->date_of_birth) }}"
                                                    class="form-control @error('nannyDoB') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false"
                                                    placeholder="Date of Birth...">
                                                @error('nannyDoB')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Position</label>
                                                <input type="hidden" name="nannyId" value="{{ $nanny->id }}">
                                                <input id="cc-payment" name="nannyPosition" type="text"
                                                    value="{{ old('nannyPosition', $nanny->position) }}"
                                                    class="form-control @error('nannyPosition') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="position...">
                                                @error('nannyPosition')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Nationality</label>
                                                <input type="hidden" name="nannyId" value="{{ $nanny->id }}">
                                                <input id="cc-payment" name="nannyNationality" type="text"
                                                    value="{{ old('nannyNationality', $nanny->nationality) }}"
                                                    class="form-control @error('nannyNationality') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false"
                                                    placeholder="nationality...">
                                                @error('nannyNationality')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Religion</label>
                                                <input type="hidden" name="nannyId" value="{{ $nanny->id }}">
                                                <input id="cc-payment" name="nannyReligion" type="text"
                                                    value="{{ old('nannyReligion', $nanny->religion) }}"
                                                    class="form-control @error('nannyReligion') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="religion...">
                                                @error('nannyReligion')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Weight</label>
                                                <input type="hidden" name="nannyId" value="{{ $nanny->id }}">
                                                <input id="cc-payment" name="nannyWeight" type="text"
                                                    value="{{ old('nannyWeight', $nanny->weight) }}"
                                                    class="form-control @error('nannyWeight') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="weight...">
                                                @error('nannyWeight')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Height</label>
                                                <input type="hidden" name="nannyId" value="{{ $nanny->id }}">
                                                <input id="cc-payment" name="nannyHeight" type="text"
                                                    value="{{ old('nannyHeight', $nanny->height) }}"
                                                    class="form-control @error('nannyHeight') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="height...">
                                                @error('nannyHeight')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Status</label>
                                                <input type="hidden" name="nannyId" value="{{ $nanny->id }}">
                                                <input id="cc-payment" name="nannyStatus" type="text"
                                                    value="{{ old('nannyStatus', $nanny->status) }}"
                                                    class="form-control @error('nannyStatus') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="status...">
                                                @error('nannyStatus')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Salary</label>
                                                <input type="hidden" name="nannyId" value="{{ $nanny->id }}">
                                                <input id="cc-payment" name="nannySalary" type="text"
                                                    value="{{ old('nannySalary', $nanny->salary) }}"
                                                    class="form-control @error('nannySalary') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="salary...">
                                                @error('nannySalary')
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
                                                                @if (old('full_part', $nanny->full_part) == 'full-time') checked @endif
                                                                name="full_part" id="fulltime">
                                                            <label class="form-check-label" for="fulltime">
                                                                Full-time
                                                            </label>
                                                            <input type="hidden" name="nannyId"
                                                                value="{{ $nanny->id }}">
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                value="part-time"
                                                                @if (old('full_part', $nanny->full_part) == 'part-time') checked @endif
                                                                name="full_part" id="parttime">
                                                            <label class="form-check-label" for="parttime">
                                                                Part-time
                                                            </label>
                                                            <input type="hidden" name="nannyId"
                                                                value="{{ $nanny->id }}">
                                                        </div>
                                                    </div>

                                                    <div class="ms-5">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                value="live-In"
                                                                @if (old('live_in_out', $nanny->live_in_out) == 'live-In') checked @endif
                                                                name="live_in_out" id="livein">
                                                            <label class="form-check-label" for="livein">
                                                                Live-In
                                                            </label>
                                                            <input type="hidden" name="nannyId"
                                                                value="{{ $nanny->id }}">
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                value="live-Out"
                                                                @if (old('live_in_out', $nanny->live_in_out) == 'live-Out') checked @endif
                                                                name="live_in_out" id="liveout">
                                                            <label class="form-check-label" for="liveout">
                                                                Live-Out
                                                            </label>
                                                            <input type="hidden" name="nannyId"
                                                                value="{{ $nanny->id }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                @error('workingTime', 'liveIn')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>
                                                Experience <br>
                                                <div class="form-floating">
                                                    <textarea class="form-control" name="nannyExperience" placeholder="Experience" id="experience">{{ old('nannyExperience', $nanny->experience) }}</textarea>
                                                    <label for="experience"></label>
                                                    <input type="hidden" name="nannyId" value="{{ $nanny->id }}">
                                                </div>
                                                @error('nannyExperience')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>

                                                <label for="cc-payment" class="control-label mb-1">Skill</label>
                                                <input type="hidden" name="nannyId" value="{{ $nanny->id }}">
                                                <input id="cc-payment" name="nannySkill" type="text"
                                                    value="{{ old('nannySkill', $nanny->skill) }}"
                                                    class="form-control @error('nannySkill') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="skill...">
                                                @error('nannySkill')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <br>


                                                <label for="cc-payment" class="control-label mb-1">Language</label>
                                                <input type="hidden" name="nannyId" value="{{ $nanny->id }}">
                                                <input id="cc-payment" name="nannyLanguage" type="text"
                                                    value="{{ old('nannyLanguage', $nanny->language) }}"
                                                    class="form-control @error('nannyLanguage') is-invalid  @enderror"
                                                    aria-required="true" aria-invalid="false" placeholder="language...">
                                                @error('nannyLanguage')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror


                                                <br>
                                                Pets :
                                                <div class="ms-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="Yes"
                                                            @if (old('pets', $nanny->pet) == 'Yes') checked @endif
                                                            name="pets" id="">
                                                        <label class="form-check-label" for="fulltime">
                                                            Yes
                                                        </label>
                                                        <input type="hidden" name="nannyId"
                                                            value="{{ $nanny->id }}">
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="No"
                                                            @if (old('pets', $nanny->pet) == 'No') checked @endif
                                                            name="pets" id="">
                                                        <label class="form-check-label" for="parttime">
                                                            No
                                                        </label>
                                                        <input type="hidden" name="nannyId"
                                                            value="{{ $nanny->id }}">
                                                    </div>
                                                    <textarea name="petNote" class="form-control" id="" cols="10" rows="5">{{ old('petNote', $nanny->pet_note) }}</textarea>
                                                </div>

                                                <br>

                                                <div class="input-group">
                                                    <span class="input-group-text">Vaccine</span>
                                                    <input type="hidden" name="nannyId" value="{{ $nanny->id }}">
                                                    <textarea class="form-control" name="nannyVaccine" aria-label="With textarea">{{ old('nannyVaccine', $nanny->vaccine) }}</textarea>
                                                </div>

                                                <br>

                                                <div class="d-flex">
                                                    <h4 class="text-danger mb-2">Remark : </h4>
                                                    <p class="ms-2">(optional)</p>
                                                </div>
                                                <div class="form-floating">
                                                    <textarea class="form-control" value="" name="nannyRemark" placeholder="" id="remark">{{ old('nannyRemark', $nanny->remark) }}</textarea>

                                                    <label for="remark">Remark...</label>
                                                </div>


                                                <br>
                                                Note : (optional)
                                                <div>
                                                    <textarea class="form-control" name="note" id="" cols="" rows="">{{ old('note', $nanny->note) }}</textarea>
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
@endsection
