@extends('user.main.layouts.master')

@section('title', 'Nanny, Maid Details')

@section('content')
    <div class="container-lg shadow-lg p-5 mt-5">
        <div class="row">
            <div class="col-3">
                <img class="card-img-top rounded" src="{{ asset('storage/' . $nannies->photo) }}" style="height: 300px; width: 300px;"
                alt="">
            </div>
            <div class="col ms-5">
                <div class="col info">
                    <div class="d-flex">
                        <p><b>Code: </b></p>
                        <p class="ms-3">{{ old('nannyCode', $nannies->code) }}</p>
                    </div>
                    <div class="d-flex">
                        <p><b>Name: </b></p>
                        <p class="ms-3">{{ old('nannyName', $nannies->name) }}</p>
                    </div>

                    <div class="d-flex">
                        <p><b>Position: </b></p>
                        <p class="ms-3">{{ old('nannyPosition', $nannies->position) }}</p>
                    </div>

                    <div class="d-flex">
                        <p><b>DOB: </b></p>
                        <p class="ms-3">{{ old('nannyDoB', $nannies->date_of_birth) }}</p>
                    </div>

                    <div class="d-flex">
                        <p><b>Nationality: </b></p>
                        <p class="ms-3">{{ old('nannyNationality', $nannies->nationality) }}</p>
                    </div>

                    <div class="d-flex">
                        <p><b>Religion: </b></p>
                        <p class="ms-3">{{ old('nannyReligion', $nannies->religion) }}</p>
                    </div>

                    <div class="d-flex">
                        <p><b>Weight: </b></p>
                        <p class="ms-3">{{ old('nannyWeight', $nannies->weight) }}</p>
                    </div>

                    <div class="d-flex">
                        <p><b>Height: </b></p>
                        <p class="ms-3">{{ old('nannyHeight', $nannies->height) }}</p>
                    </div>

                    <div class="d-flex">
                        <p><b>Salary: </b></p>
                        <p class="ms-3">{{ old('nannySalary', $nannies->salary) }}</p>
                    </div>

                    <div class="d-flex">
                        <p><b>Language: </b></p>
                        <p class="ms-3">{{ old('nannyLanguage', $nannies->language) }}</p>
                    </div>

                    <div class="d-flex">
                        <p><b>status: </b></p>
                        <p class="ms-3">{{ old('nannyStatus', $nannies->status) }}</p>
                    </div>

                    <div class="d-flex">
                        <p><b>Working Time: </b></p>
                        <p class="ms-3">{{ old('full_part', $nannies->full_part) }} / {{ old('live_in_out', $nannies->live_in_out) }}</p>
                    </div>

                    <div class="d-flex">
                        <p><b>Experience: </b></p>
                        <p class="ms-3">{{ old('nannyExperience', $nannies->experience) }}</p>
                    </div>

                    <div class="d-flex">
                        <p><b>Skill: </b></p>
                        <p class="ms-3">{{ old('nannySkill', $nannies->skill) }}</p>
                    </div>

                    <div class="d-flex">
                        <p><b>Pets: </b></p>
                        <p class="ms-3">{{ old('pets', $nannies->pet) }}</p>
                    </div>

                    <div class="d-flex px-4 mb-3">
                        <small>Note: </small>
                        <small class="ms-3">{{ old('petNote', $nannies->pet_note) }}</small>
                    </div>

                    <div class="d-flex">
                        <p><b>Vaccine: </b></p>
                        <p class="ms-3">{{ old('nannyVaccine', $nannies->vaccine) }}</p>
                    </div>

                    {{-- <p class="text-danger"><b>Remark:</b></p>

                    <div class="d-flex">
                        <p><b>Note: </b></p>
                        <p class="ms-3">{{ old('nannyNote', $nannies->note) }}</p>
                    </div> --}}


                </div>
            </div>
        </div>


        <div class="mt-4">
            <a href="{{ route('user#home') }}" class="btn btn-primary px-3">Back</a>
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
