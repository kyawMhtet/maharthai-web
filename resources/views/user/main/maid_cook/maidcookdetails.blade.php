@extends('user.main.layouts.master')

@section('title', 'Maid, Cook details')

@section('content')
    <div class="container-lg shadow-lg p-5 mt-5">
        <div class="row">
            <div class="col-3">
                <img class="card-img-top rounded" src="{{ asset('storage/' . $maidcooks->photo) }}" style="height: 300px; width: 300px;"
                alt="">
            </div>
            <div class="col ms-5">
                <div class="col info">
                    <div class="d-flex">
                        <div class="col-2">
                            <p><b>Code : </b></p>
                        </div>
                        <div class="col">
                            <p class="ms-3">{{ old('maidcookCode', $maidcooks->code) }}</p>
                        </div>

                    </div>
                    <div class="d-flex">

                        <div class="col-2">
                            <p><b>Name : </b></p>
                        </div>

                        <div class="col">
                            <p class="ms-3">{{ old('maidcookName', $maidcooks->name) }}</p>
                        </div>
                        {{-- <p><b>Name: </b></p>
                        <p class="ms-3">{{ old('maidcookName', $maidcooks->name) }}</p> --}}
                    </div>

                    <div class="d-flex">
                        <div class="col-2">
                            <p><b>Position : </b></p>
                        </div>
                        <div class="col">
                        <p class="ms-3">{{ old('maidcookPosition', $maidcooks->position) }}</p>

                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="col-2">
                        <p><b>DOB : </b></p>

                        </div>

                        <div class="col">
                        <p class="ms-3">{{ old('maidcookDoB', $maidcooks->date_of_birth) }}</p>

                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="col-2">
                            <p><b>Nationality : </b></p>
                        </div>
                        <div class="col">
                            <p class="ms-3">{{ old('maidcookNationality', $maidcooks->nationality) }}</p>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="col-2">
                            <p><b>Religion : </b></p>
                        </div>
                        <div class="col">
                            <p class="ms-3">{{ old('maidcookReligion', $maidcooks->religion) }}</p>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="col-2">
                            <p><b>Weight : </b></p>
                        </div>
                        <div class="col">
                            <p class="ms-3">{{ old('maidcookWeight', $maidcooks->weight) }}</p>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="col-2">
                            <p><b>Height : </b></p>
                        </div>
                        <div class="col">
                            <p class="ms-3">{{ old('maidcookHeight', $maidcooks->height) }}</p>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="col-2">
                            <p><b>Salary : </b></p>
                        </div>
                        <div class="col">
                            <p class="ms-3">{{ old('maidcookSalary', $maidcooks->salary) }} <b>Baht</b></p>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="col-2">
                            <p><b>Language : </b></p>
                        </div>
                        <div class="col">
                            <p class="ms-3">{{ old('maidcookLanguage', $maidcooks->language) }}</p>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="col-2">
                            <p><b>status : </b></p>
                        </div>
                        <div class="col">
                            <p class="ms-3">{{ old('maidcookStatus', $maidcooks->status) }}</p>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="col-2">
                            <p><b>Working Time : </b></p>
                        </div>
                        <div class="col">
                            <p class="ms-3">{{ old('full_part', $maidcooks->full_part) }} / {{ old('live_in_out', $maidcooks->live_in_out) }}</p>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="col-2">
                            <p><b>Experience : </b></p>
                        </div>
                        <div class="col">
                            <p class="ms-3">{{ old('maidcookExperience', $maidcooks->experience) }}</p>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="col-2">
                            <p><b>Skill : </b></p>
                        </div>
                        <div class="col">
                            <p class="ms-3">{{ old('maidcookSkill', $maidcooks->skill) }}</p>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="col-2">
                            <p><b>Pets : </b></p>
                        </div>
                        <div class="col">
                            <p class="ms-3">{{ old('pets', $maidcooks->pet) }}</p>
                        </div>

                        <div class="">
                            <small class="ms-3"><b> - </b></small>
                        </div>
                        <div class="d-flex px-4 pb-2 mb-3">

                                <small class="shadow-sm p-2" style="color: rgb(187, 45, 59);">{{ old('petNote', $maidcooks->pet_note) }}</small>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="col-2">
                            <p><b>Vaccine: </b></p>
                        </div>
                        <div class="col">
                            <p class="ms-3">{{ old('maidcookVaccine', $maidcooks->vaccine) }}</p>
                        </div>
                    </div>




                    <div class="d-flex">
                        <div class="col-2">
                            <h5 class="text-danger">Remark: </h5>
                        </div>
                        <div class="col">
                            <p class="ms-3">{{ old('maidcookRemark', $maidcooks->remark) }}</p>
                        </div>
                    </div>


                    {{-- <p class="text-danger"><b>Remark:</b></p>

                    <div class="d-flex">
                        <p><b>Note: </b></p>
                        <p class="ms-3">{{ old('nannyNote', $maidcooks->note) }}</p>
                    </div> --}}


                </div>
            </div>
        </div>


        <div class="mt-4">
            <a href="{{ route('mainmaidcook#page') }}" class="btn btn-primary px-3">Back</a>
            <a href="{{ route('maidcookrequest#page') }}" class="btn btn-danger px-3 float-end">Request</a>
        </div>

    </div>
@endsection
