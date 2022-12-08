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
                        <div class="col-2">
                            <p><b>Code : </b></p>
                        </div>
                        <div class="col">
                            <p class="ms-3">{{ old('housekeepingCode', $housekeepings->code) }}</p>
                        </div>

                    </div>
                    <div class="d-flex">

                        <div class="col-2">
                            <p><b>Name : </b></p>
                        </div>

                        <div class="col">
                            <p class="ms-3">{{ old('housekeepingName', $housekeepings->name) }}</p>
                        </div>
                        {{-- <p><b>Name: </b></p>
                        <p class="ms-3">{{ old('housekeepingName', $housekeepings->name) }}</p> --}}
                    </div>

                    <div class="d-flex">
                        <div class="col-2">
                            <p><b>Position : </b></p>
                        </div>
                        <div class="col">
                        <p class="ms-3">{{ old('housekeepingPosition', $housekeepings->position) }}</p>

                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="col-2">
                        <p><b>DOB : </b></p>

                        </div>

                        <div class="col">
                        <p class="ms-3">{{ old('housekeepingDoB', $housekeepings->date_of_birth) }}</p>

                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="col-2">
                            <p><b>Nationality : </b></p>
                        </div>
                        <div class="col">
                            <p class="ms-3">{{ old('housekeepingNationality', $housekeepings->nationality) }}</p>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="col-2">
                            <p><b>Religion : </b></p>
                        </div>
                        <div class="col">
                            <p class="ms-3">{{ old('housekeepingReligion', $housekeepings->religion) }}</p>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="col-2">
                            <p><b>Weight : </b></p>
                        </div>
                        <div class="col">
                            <p class="ms-3">{{ old('housekeepingWeight', $housekeepings->weight) }}</p>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="col-2">
                            <p><b>Height : </b></p>
                        </div>
                        <div class="col">
                            <p class="ms-3">{{ old('housekeepingHeight', $housekeepings->height) }}</p>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="col-2">
                            <p><b>Salary : </b></p>
                        </div>
                        <div class="col">
                            <p class="ms-3">{{ old('housekeepingSalary', $housekeepings->salary) }}</p>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="col-2">
                            <p><b>Language : </b></p>
                        </div>
                        <div class="col">
                            <p class="ms-3">{{ old('housekeepingLanguage', $housekeepings->language) }}</p>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="col-2">
                            <p><b>status : </b></p>
                        </div>
                        <div class="col">
                            <p class="ms-3">{{ old('housekeepingStatus', $housekeepings->status) }}</p>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="col-2">
                            <p><b>Working Time : </b></p>
                        </div>
                        <div class="col">
                            <p class="ms-3">{{ old('full_part', $housekeepings->full_part) }} / {{ old('live_in_out', $housekeepings->live_in_out) }}</p>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="col-2">
                            <p><b>Experience : </b></p>
                        </div>
                        <div class="col">
                            <p class="ms-3">{{ old('housekeepingExperience', $housekeepings->experience) }}</p>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="col-2">
                            <p><b>Skill : </b></p>
                        </div>
                        <div class="col">
                            <p class="ms-3">{{ old('housekeepingSkill', $housekeepings->skill) }}</p>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="col-2">
                            <p><b>Pets : </b></p>
                        </div>
                        <div class="col">
                            <p class="ms-3">{{ old('pets', $housekeepings->pet) }}</p>
                        </div>
                    </div>

                    <div class="d-flex px-3 mb-3 py-1 text-white rounded" style="background: #BB2D3B;">
                        <div class="col-1">
                            <small>Note : </small>
                        </div>
                        <div class="col">
                            <small class="ms-3">{{ old('petNote', $housekeepings->pet_note) }}</small>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="col-2">
                            <p><b>Vaccine: </b></p>
                        </div>
                        <div class="col">
                            <p class="ms-3">{{ old('housekeepingVaccine', $housekeepings->vaccine) }}</p>
                        </div>
                    </div>

                    {{-- <p class="text-danger"><b>Remark:</b></p>

                    <div class="d-flex">
                        <p><b>Note: </b></p>
                        <p class="ms-3">{{ old('nannyNote', $housekeepings->note) }}</p>
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
