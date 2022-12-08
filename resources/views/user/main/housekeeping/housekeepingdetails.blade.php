@extends('user.main.layouts.master')

@section('title', 'HouseKeeping details')

@section('content')
    <div class="container-lg shadow-lg p-5 mt-5">
        <div class="row">
            <div class="col-3">
                <img class="card-img-top rounded" src="{{ asset('storage/' . $housekeepings->photo) }}" style="height: 300px; width: 300px;"
                alt="">
            </div>
            <div class="col ms-5">
                <div class="col info">
                    <div class="d-flex">
                        <p><b>Code: </b></p>
                        <p class="ms-3">{{ old('housekeepingCode', $housekeepings->code) }}</p>
                    </div>
                    <div class="d-flex">
                        <p><b>Name: </b></p>
                        <p class="ms-3">{{ old('housekeepingName', $housekeepings->name) }}</p>
                    </div>

                    <div class="d-flex">
                        <p><b>Position: </b></p>
                        <p class="ms-3">{{ old('housekeepingPosition', $housekeepings->position) }}</p>
                    </div>

                    <div class="d-flex">
                        <p><b>DOB: </b></p>
                        <p class="ms-3">{{ old('housekeepingDoB', $housekeepings->date_of_birth) }}</p>
                    </div>

                    <div class="d-flex">
                        <p><b>Nationality: </b></p>
                        <p class="ms-3">{{ old('housekeepingNationality', $housekeepings->nationality) }}</p>
                    </div>

                    <div class="d-flex">
                        <p><b>Religion: </b></p>
                        <p class="ms-3">{{ old('housekeepingReligion', $housekeepings->religion) }}</p>
                    </div>

                    <div class="d-flex">
                        <p><b>Weight: </b></p>
                        <p class="ms-3">{{ old('housekeepingWeight', $housekeepings->weight) }}</p>
                    </div>

                    <div class="d-flex">
                        <p><b>Height: </b></p>
                        <p class="ms-3">{{ old('housekeepingHeight', $housekeepings->height) }}</p>
                    </div>

                    <div class="d-flex">
                        <p><b>Salary: </b></p>
                        <p class="ms-3">{{ old('housekeepingSalary', $housekeepings->salary) }}</p>
                    </div>

                    <div class="d-flex">
                        <p><b>Language: </b></p>
                        <p class="ms-3">{{ old('housekeepingLanguage', $housekeepings->language) }}</p>
                    </div>

                    <div class="d-flex">
                        <p><b>status: </b></p>
                        <p class="ms-3">{{ old('housekeepingStatus', $housekeepings->status) }}</p>
                    </div>

                    <div class="d-flex">
                        <p><b>Working Time: </b></p>
                        <p class="ms-3">{{ old('full_part', $housekeepings->full_part) }} / {{ old('live_in_out', $housekeepings->live_in_out) }}</p>
                    </div>

                    <div class="d-flex">
                        <p><b>Experience: </b></p>
                        <p class="ms-3">{{ old('housekeepingExperience', $housekeepings->experience) }}</p>
                    </div>

                    <div class="d-flex">
                        <p><b>Skill: </b></p>
                        <p class="ms-3">{{ old('housekeepingSkill', $housekeepings->skill) }}</p>
                    </div>

                    <div class="d-flex">
                        <p><b>Pets: </b></p>
                        <p class="ms-3">{{ old('pets', $housekeepings->pet) }}</p>
                    </div>

                    <div class="d-flex px-4 mb-3">
                        <small>Note: </small>
                        <small class="ms-3">{{ old('petNote', $housekeepings->pet_note) }}</small>
                    </div>

                    <div class="d-flex">
                        <p><b>Vaccine: </b></p>
                        <p class="ms-3">{{ old('housekeepingVaccine', $housekeepings->vaccine) }}</p>
                    </div>

                    {{-- <p class="text-danger"><b>Remark:</b></p>

                    <div class="d-flex">
                        <p><b>Note: </b></p>
                        <p class="ms-3">{{ old('housekeepingNote', $housekeepings->note) }}</p>
                    </div> --}}


                </div>
            </div>
        </div>


        <div class="mt-4">
            <a href="{{ route('mainhousekeeping#page') }}" class="btn btn-primary px-3">Back</a>
            <a href="{{ route('user#request') }}" class="btn btn-danger px-3 float-end">Request</a>
        </div>

    </div>
@endsection

                    {{-- <div>
                        <p><b>Code :</b></p>
                        <p><b>Name :</b></p>
                        <p><b>Position :</b></p>
                        <p><b>DOB :</b></p>
                        <p><b>Nationality :</b></p>
                        <p><b>Religion :</b></p>
                        <p><b>Weight :</b></p>
                        <p><b>Height :</b></p>
                        <p><b>Salary :</b></p>
                        <p><b>Language :</b></p>
                        <p><b>Status :</b></p>
                        <p><b>Working Time: </b></p>
                        <p><b>Experience :</b></p>
                        <p class="text-danger"><b>Remark:</b></p>
                        <div>
                            <p><b>(1) Pets :</b></p>
                            <p><b>(4) Vaccine :</b></p>
                        </div>
                        <p><b>Note : </b></p>
                    </div>


                    <div class="ms-4">
                        <p>{{ old('nannyCode', $nannies->code) }}</p>
                        <p>{{ old('nannyName', $nannies->name) }}</p>
                        <p>{{ old('nannyPosition', $nannies->position) }}</p>
                        <p>{{ old('nannyDoB', $nannies->date_of_birth) }}</p>
                        <p>{{ old('nannyNationality', $nannies->nationality) }}</p>
                        <p>{{ old('nannyReligion', $nannies->religion) }}</p>
                        <p>{{ old('nannyWeight', $nannies->weight) }}</p>
                        <p>{{ old('nannyHeight', $nannies->height) }}</p>
                        <p>{{ old('nannySalary', $nannies->salary) }}</p>
                        <p>{{ old('nannyLanguage', $nannies->language) }}</p>
                        <p>{{ old('nannyStatus', $nannies->status) }}</p>
                        <p>{{ old('full_part', $nannies->full_part) }}</p>
                        <p>{{ old('live_in_out', $nannies->live_in_out) }}</p>
                        <p>{{ old('nannyExperience', $nannies->experience) }}</p>
                         <br>
                        <div class="mt-3">
                            <p>{{ old('pets', $nannies->pet) }}</p>
                            <p>{{ old('petNote', $nannies->pet_note) }}</p>
                            <p>{{ old('nannyVaccine', $nannies->vaccine) }}</p>
                            <p>{{ old('note', $nannies->note) }}</p>
                        </div>
                    </div> --}}
