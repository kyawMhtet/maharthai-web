@extends('user.main.layouts.master')

@section('title', 'Maid Details')

@section('content')
    <div class="container-lg shadow-lg p-5 mt-5">
        <div class="row">
            <div class="col-3">
                <img class="card-img-top rounded" src="{{ asset('storage/' . $maids->photo) }}" style="height: 300px; width: 300px;"
                alt="">
            </div>
            <div class="col ms-5">
                <div class="col info">
                    <div class="d-flex">
                        <div class="col-2">
                            <p><b>Code : </b></p>
                        </div>
                        <div class="col">
                            <p class="ms-3">{{ old('maidCode', $maids->code) }}</p>
                        </div>

                    </div>
                    <div class="d-flex">

                        <div class="col-2">
                            <p><b>Name : </b></p>
                        </div>

                        <div class="col">
                            <p class="ms-3">{{ old('maidName', $maids->name) }}</p>
                        </div>
                        {{-- <p><b>Name: </b></p>
                        <p class="ms-3">{{ old('maidName', $maids->name) }}</p> --}}
                    </div>

                    <div class="d-flex">
                        <div class="col-2">
                            <p><b>Position : </b></p>
                        </div>
                        <div class="col">
                        <p class="ms-3">{{ old('maidPosition', $maids->position) }}</p>

                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="col-2">
                        <p><b>DOB : </b></p>

                        </div>

                        <div class="col">
                        <p class="ms-3">{{ old('maidDoB', $maids->date_of_birth) }}</p>

                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="col-2">
                            <p><b>Nationality : </b></p>
                        </div>
                        <div class="col">
                            <p class="ms-3">{{ old('maidNationality', $maids->nationality) }}</p>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="col-2">
                            <p><b>Religion : </b></p>
                        </div>
                        <div class="col">
                            <p class="ms-3">{{ old('maidReligion', $maids->religion) }}</p>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="col-2">
                            <p><b>Weight : </b></p>
                        </div>
                        <div class="col">
                            <p class="ms-3">{{ old('maidWeight', $maids->weight) }}</p>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="col-2">
                            <p><b>Height : </b></p>
                        </div>
                        <div class="col">
                            <p class="ms-3">{{ old('maidHeight', $maids->height) }}</p>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="col-2">
                            <p><b>Salary : </b></p>
                        </div>
                        <div class="col">
                            <p class="ms-3">{{ old('maidSalary', $maids->salary) }} <b>Baht</b></p>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="col-2">
                            <p><b>Language : </b></p>
                        </div>
                        <div class="col">
                            <p class="ms-3">{{ old('maidLanguage', $maids->language) }}</p>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="col-2">
                            <p><b>status : </b></p>
                        </div>
                        <div class="col">
                            <p class="ms-3">{{ old('maidStatus', $maids->status) }}</p>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="col-2">
                            <p><b>Working Time : </b></p>
                        </div>
                        <div class="col">
                            <p class="ms-3">{{ old('full_part', $maids->full_part) }} / {{ old('live_in_out', $maids->live_in_out) }}</p>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="col-2">
                            <p><b>Experience : </b></p>
                        </div>
                        <div class="col">
                            <p class="ms-3">{{ old('maidExperience', $maids->experience) }}</p>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="col-2">
                            <p><b>Skill : </b></p>
                        </div>
                        <div class="col">
                            <p class="ms-3">{{ old('maidSkill', $maids->skill) }}</p>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="col-2">
                            <p><b>Pets : </b></p>
                        </div>
                        <div class="col">
                            <p class="ms-3">{{ old('pets', $maids->pet) }}</p>
                        </div>

                        <div class="col">
                            <small class="ms-3"><b> - </b></small>
                        </div>
                        <div class="col-10 d-flex px-4 pb-2 mb-3">
                                <small class="shadow-sm p-2" style="color: rgb(187, 45, 59);">{{ old('petNote', $maids->pet_note) }}</small>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="col-2">
                            <p><b>Vaccine: </b></p>
                        </div>
                        <div class="col">
                            <p class="ms-3">{{ old('maidVaccine', $maids->vaccine) }}</p>
                        </div>
                    </div>

                    <div class="d-flex mt-2">
                        <div class="col-2">
                            <h5 class="text-danger">Remark: </h5>
                        </div>
                        <div class="col">
                            <p class="ms-3">{{ old('maidRemark', $maids->remark) }}</p>
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
            <a href="{{ route('mainmaid#page') }}" class="btn btn-primary px-3">Back</a>
            <a href="{{ route('maidrequest#page') }}" class="btn btn-danger px-3 float-end">Request</a>
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
