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
                            <p><b>Code: </b></p>
                            <p class="ms-3">{{ old('housekeepingCode', $housekeeping->code) }}</p>
                        </div>
                        <div class="d-flex">
                            <p><b>Name: </b></p>
                            <p class="ms-3">{{ old('housekeepingName', $housekeeping->name) }}</p>
                        </div>

                        <div class="d-flex">
                            <p><b>Position: </b></p>
                            <p class="ms-3">{{ old('housekeepingPosition', $housekeeping->position) }}</p>
                        </div>

                        <div class="d-flex">
                            <p><b>DOB: </b></p>
                            <p class="ms-3">{{ old('housekeepingDoB', $housekeeping->date_of_birth) }}</p>
                        </div>

                        <div class="d-flex">
                            <p><b>Nationality: </b></p>
                            <p class="ms-3">{{ old('housekeepingNationality', $housekeeping->nationality) }}</p>
                        </div>

                        <div class="d-flex">
                            <p><b>Religion: </b></p>
                            <p class="ms-3">{{ old('housekeepingReligion', $housekeeping->religion) }}</p>
                        </div>

                        <div class="d-flex">
                            <p><b>Weight: </b></p>
                            <p class="ms-3">{{ old('housekeepingWeight', $housekeeping->weight) }}</p>
                        </div>

                        <div class="d-flex">
                            <p><b>Height: </b></p>
                            <p class="ms-3">{{ old('housekeepingHeight', $housekeeping->height) }}</p>
                        </div>

                        <div class="d-flex">
                            <p><b>Salary: </b></p>
                            <p class="ms-3">{{ old('housekeepingSalary', $housekeeping->salary) }}</p>
                        </div>

                        <div class="d-flex">
                            <p><b>Language: </b></p>
                            <p class="ms-3">{{ old('housekeepingLanguage', $housekeeping->language) }}</p>
                        </div>

                        <div class="d-flex">
                            <p><b>status: </b></p>
                            <p class="ms-3">{{ old('housekeepingStatus', $housekeeping->status) }}</p>
                        </div>

                        <div class="d-flex">
                            <p><b>Working Time: </b></p>
                            <p class="ms-3">{{ old('full_part', $housekeeping->full_part) }} / {{ old('live_in_out', $housekeeping->live_in_out) }}</p>
                        </div>

                        <div class="d-flex">
                            <p><b>Experience: </b></p>
                            <p class="ms-3">{{ old('housekeepingExperience', $housekeeping->experience) }}</p>
                        </div>

                        <div class="d-flex">
                            <p><b>Skill: </b></p>
                            <p class="ms-3">{{ old('housekeepingSkill', $housekeeping->skill) }}</p>
                        </div>

                        <div class="d-flex">
                            <p><b>Pets: </b></p>
                            <p class="ms-3">{{ old('pets', $housekeeping->pet) }}</p>
                        </div>

                        <div class="d-flex px-4 mb-3">
                            <small>Note: </small>
                            <small class="ms-3">{{ old('petNote', $housekeeping->pet_note) }}</small>
                        </div>

                        <div class="d-flex">
                            <p><b>Vaccine: </b></p>
                            <p class="ms-3">{{ old('housekeepingVaccine', $housekeeping->vaccine) }}</p>
                        </div>

                        <p class="text-danger"><b>Remark:</b></p>

                        <div class="d-flex">
                            <p><b>Note: </b></p>
                            <p class="ms-3">{{ old('housekeepingNote', $housekeeping->note) }}</p>
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






    {{-- <img src="{{ asset('storage/'. $nanny->photo) }}" alt="">
<input type="file" value="{{ old('nannyPhoto', $nanny->photo) }}" name="nannyPhoto" class="form-control"> --}}

@endsection
