@extends('admin.layouts.master')

@section('title', 'HouseKeeping List')

@section('content')


    <style>
        .info p {
            margin-bottom: 10px;
        }
    </style>
    <div class="main-content">
        <div class="container">
            <div class="text-center">
                <a href="{{ route('housekeeping#page') }}" class="text-decoration-none text-dark">
                    <i class="fa-solid fa-left-long"></i> back
                </a>
            </div>
            <div class="w-50 m-auto shadow p-5 bg-light">
                <div id="info">
                    <div class="img col-4 me-3">
                        <input type="hidden" name="housekeepingId" value="{{ $housekeeping->id }}">
                        @if ($housekeeping->photo != null)
                            <img src="{{ asset('storage/' . $housekeeping->photo) }}" class="img-thumbnail" alt="...">
                        @endif
                    </div>



                    <div class="col info mt-3">
                        <div class="d-flex">
                            <div class="col-2">
                                <p><b>Code: </b></p>
                            </div>
                            <div class="col">
                                <p class="ms-5">{{ old('housekeepingCode', $housekeeping->code) }}</p>

                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="col-2">
                                <p><b>Name: </b></p>

                            </div>
                            <div class="col">
                                <p class="ms-5">{{ old('housekeepingName', $housekeeping->name) }}</p>

                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="col-2">
                                <p><b>Position: </b></p>
                            </div>
                            <div class="col">
                                <p class="ms-5">{{ old('housekeepingPosition', $housekeeping->position) }}</p>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="col-2">
                                <p><b>DOB: </b></p>
                            </div>
                            <div class="col">
                                <p class="ms-5">{{ old('housekeepingDoB', $housekeeping->date_of_birth) }}</p>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="col-2">
                                <p><b>Nationality: </b></p>
                            </div>
                            <div class="col">
                                <p class="ms-5">{{ old('housekeepingNationality', $housekeeping->nationality) }}</p>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="col-2">
                                <p><b>Religion: </b></p>
                            </div>
                            <div class="col">
                                <p class="ms-5">{{ old('housekeepingReligion', $housekeeping->religion) }}</p>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="col-2">
                                <p><b>Weight: </b></p>
                            </div>
                            <div class="col">
                                <p class="ms-5">{{ old('housekeepingWeight', $housekeeping->weight) }}</p>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="col-2">
                                <p><b>Height: </b></p>
                            </div>
                            <div class="col">
                                <p class="ms-5">{{ old('housekeepingHeight', $housekeeping->height) }}</p>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="col-2">
                                <p><b>Salary: </b></p>
                            </div>
                            <div class="col">
                                <p class="ms-5">{{ old('housekeepingSalary', $housekeeping->salary) }} <b>Baht</b></p>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="col-2">
                                <p><b>Language: </b></p>
                            </div>
                            <div class="col">
                                <p class="ms-5">{{ old('housekeepingLanguage', $housekeeping->language) }}</p>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="col-2">
                                <p><b>status: </b></p>
                            </div>
                            <div class="col">
                                <p class="ms-5">{{ old('housekeepingStatus', $housekeeping->status) }}</p>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="col-2">
                                <p><b>Working Time: </b></p>
                            </div>
                            <div class="col">
                                <p class="ms-5">{{ old('full_part', $housekeeping->full_part) }} /
                                    {{ old('live_in_out', $housekeeping->live_in_out) }}</p>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="col-2">
                                <p><b>Experience: </b></p>
                            </div>
                            <div class="col">
                                <p class="ms-5">{{ old('housekeepingExperience', $housekeeping->experience) }}</p>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="col-2">
                                <p><b>Skill: </b></p>
                            </div>
                            <div class="col">
                                <p class="ms-5">{{ old('housekeepingSkill', $housekeeping->skill) }}</p>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="col-2">
                                <p><b>Pets: </b></p>
                            </div>
                            <div class="col">
                                <p class="ms-5">{{ old('pets', $housekeeping->pet) }}</p>
                            </div>
                        </div>

                        <div class="d-flex px-4 mb-3">
                            <div class="col-2">
                                <small>Note: </small>
                            </div>
                            <div class="col">
                                <small class="ms-5">{{ old('petNote', $housekeeping->pet_note) }}</small>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="col-2">
                                <p><b>Vaccine: </b></p>
                            </div>
                            <div class="col">
                                <p class="ms-5">{{ old('housekeepingVaccine', $housekeeping->vaccine) }}</p>
                            </div>
                        </div>

                        {{-- <div class="d-flex">
                            <p><b>Available/Not Available:</b></p>
                            <p class="ms-5">{{ old('housekeepingStock', $housekeeping->stockstatus) }}</p>
                        </div> --}}

                        <div class="d-flex">
                            <div class="col-2">
                                <h4 class="text-danger">Remark: </h4>
                            </div>
                            <div class="col">
                                <p class="ms-5">{{ old('housekeepingRemark', $housekeeping->remark) }}</p>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="col-2">
                                <p><b>Note: </b></p>
                            </div>
                            <div class="col">
                                <p class="ms-5">{{ old('housekeepingNote', $housekeeping->note) }}</p>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <div class="text-center mt-2">

                <button class="btn btn-primary me-2" onclick="printPage()">Print</button>
                <a href="{{ route('housekeeping#editPage', $housekeeping->id) }}" class="card-link">
                    <button class="btn btn-secondary">Edit</button>
                </a>
            </div>

        </div>
    </div>


    <script>
        function printPage() {
            var body = document.getElementById('body').innerHTML;
            var info = document.getElementById('info').innerHTML;
            document.getElementById('body').innerHTML = info;
            window.print();
            document.getElementById('body').innerHTML = body;

        }
    </script>






    {{-- <img src="{{ asset('storage/'. $housekeeping->photo) }}" alt="">
<input type="file" value="{{ old('housekeepingPhoto', $housekeeping->photo) }}" name="housekeepingPhoto" class="form-control"> --}}

@endsection
