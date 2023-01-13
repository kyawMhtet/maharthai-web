@extends('user.main.layouts.master')

@section('title', 'Gardener details')

@section('content')
    <div class="container-lg shadow-sm p-5 mt-5">
        <div class="row p-2 detail">
            <div class="col-12 col-xl-3 col-lg-3 col-md-2 col-sm-2  img">
                <img class="card-img-top rounded" src="{{ asset('storage/' . $gardeners->photo) }}"
                    style="height: 270px; width: 270px;" alt="">
            </div>
            <div class="col col-xl-8 col-lg-8 col-md-7 col-sm-5 ms-4">
                <div class="col info">
                    <div class="d-flex">
                        <div class="col-5 col-xl-2 col-lg-2">
                            <p><b>Code : </b></p>
                        </div>
                        <div class="col">
                            <p class="ms-3">{{ old('gardenerCode', $gardeners->code) }}</p>
                        </div>

                    </div>
                    <div class="d-flex">

                        <div class="col-5 col-xl-2 col-lg-2">
                            <p><b>Name : </b></p>
                        </div>

                        <div class="col">
                            <p class="ms-3">{{ old('gardenerName', $gardeners->name) }}</p>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="col-5 col-xl-2 col-lg-2">
                            <p><b>Position : </b></p>
                        </div>
                        <div class="col">
                            <p class="ms-3">{{ old('gardenerPosition', $gardeners->position) }}</p>

                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="col-5 col-xl-2 col-lg-2">
                            <p><b>DOB : </b></p>

                        </div>

                        <div class="col">
                            <p class="ms-3">{{ old('gardenerDoB', $gardeners->date_of_birth) }}</p>

                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="col-5 col-xl-2 col-lg-2">
                            <p><b>Nationality : </b></p>
                        </div>
                        <div class="col">
                            <p class="ms-3">{{ old('gardenerNationality', $gardeners->nationality) }}</p>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="col-5 col-xl-2 col-lg-2">
                            <p><b>Religion : </b></p>
                        </div>
                        <div class="col">
                            <p class="ms-3">{{ old('gardenerReligion', $gardeners->religion) }}</p>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="col-5 col-xl-2 col-lg-2">
                            <p><b>Weight : </b></p>
                        </div>
                        <div class="col">
                            <p class="ms-3">{{ old('gardenerWeight', $gardeners->weight) }}</p>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="col-5 col-xl-2 col-lg-2">
                            <p><b>Height : </b></p>
                        </div>
                        <div class="col">
                            <p class="ms-3">{{ old('gardenerHeight', $gardeners->height) }}</p>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="col-5 col-xl-2 col-lg-2">
                            <p><b>Salary : </b></p>
                        </div>
                        <div class="col">
                            <p class="ms-3">{{ old('gardenerSalary', $gardeners->salary) }} <b>Baht</b></p>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="col-5 col-xl-2 col-lg-2">
                            <p><b>Language : </b></p>
                        </div>
                        <div class="col">
                            <p class="ms-3">{{ old('gardenerLanguage', $gardeners->language) }}</p>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="col-5 col-xl-2 col-lg-2">
                            <p><b>status : </b></p>
                        </div>
                        <div class="col">
                            <p class="ms-3">{{ old('gardenerStatus', $gardeners->status) }}</p>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="col-5 col-xl-2 col-lg-2">
                            <p><b>Working Time : </b></p>
                        </div>
                        <div class="col">
                            <p class="ms-3">{{ old('full_part', $gardeners->full_part) }} /
                                {{ old('live_in_out', $gardeners->live_in_out) }}</p>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="col-5 col-xl-2 col-lg-2">
                            <p><b>Experience : </b></p>
                        </div>
                        <div class="col">
                            <p class="ms-3">{{ old('gardenerExperience', $gardeners->experience) }}</p>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="col-5 col-xl-2 col-lg-2">
                            <p><b>Skill : </b></p>
                        </div>
                        <div class="col">
                            <p class="ms-3">{{ old('gardenerSkill', $gardeners->skill) }}</p>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="col-5 col-xl-2 col-lg-2">
                            <p><b>Pets : </b></p>
                        </div>
                        <div class="col">
                            <p class="ms-3">{{ old('pets', $gardeners->pet) }}</p>
                        </div>

                        <div class="col pet-column">
                            <small class="ms-3"><b> - </b></small>
                        </div>
                        <div class="col-10 pet-note d-flex px-4 pb-2 mb-3">

                            <small class="shadow-sm p-2"
                                style="color: rgb(187, 45, 59);">{{ old('petNote', $gardeners->pet_note) }}</small>
                        </div>
                    </div>



                    <div class="d-flex">
                        <div class="col-5 col-xl-2 col-lg-2">
                            <p><b>Vaccine: </b></p>
                        </div>
                        <div class="col">
                            <p class="ms-3">{{ old('gardenerVaccine', $gardeners->vaccine) }}</p>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="col-5 col-xl-2 col-lg-2">
                            <h5 class="text-danger"><b>Remark :</b></h5>
                        </div>
                        <div class="col">
                            <p class="ms-3">{{ old('gardenerRemark', $gardeners->remark) }}</p>
                        </div>
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
            <a href="{{ route('maingardener#page') }}" class="btn btn-primary px-3">Back</a>
            <a href="{{ route('gardenerrequest#page', $gardeners->id) }}" class="btn btn-danger px-3 float-end">Request</a>
        </div>

    </div>
@endsection
