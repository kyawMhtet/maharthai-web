@extends('user.main.layouts.master')

@section('title', 'Maid Details')

@section('content')
<div class="container-lg shadow-sm p-5 mt-5">
    <div class="row p-2 detail">
        <div class="col-12 col-xl-3 col-lg-3 col-md-2 col-sm-2   img">
            <img class="card-img-top rounded" src="{{ asset('storage/' . $maids->photo) }}"
                style="height: 270px; width: 270px;" alt="">
        </div>
        <div class="col col-xl-8 col-lg-8 col-md-7 col-sm-5 ms-4">
            <div class="col info">
                <div class="d-flex">
                    <div class="col-5 col-xl-2 col-lg-2">
                        <p><b>Code : </b></p>
                    </div>
                    <div class="col">
                        <p class="ms-3">{{ old('madiCode', $maids->code) }}</p>
                    </div>

                </div>
                <div class="d-flex">

                    <div class="col-5 col-xl-2 col-lg-2">
                        <p><b>Name : </b></p>
                    </div>

                    <div class="col">
                        <p class="ms-3">{{ old('madiName', $maids->name) }}</p>
                    </div>
                </div>

                <div class="d-flex">
                    <div class="col-5 col-xl-2 col-lg-2">
                        <p><b>Position : </b></p>
                    </div>
                    <div class="col">
                        <p class="ms-3">{{ old('madiPosition', $maids->position) }}</p>

                    </div>
                </div>

                <div class="d-flex">
                    <div class="col-5 col-xl-2 col-lg-2">
                        <p><b>DOB : </b></p>

                    </div>

                    <div class="col">
                        <p class="ms-3">{{ old('madiDoB', $maids->date_of_birth) }}</p>

                    </div>
                </div>

                <div class="d-flex">
                    <div class="col-5 col-xl-2 col-lg-2">
                        <p><b>Nationality : </b></p>
                    </div>
                    <div class="col">
                        <p class="ms-3">{{ old('madiNationality', $maids->nationality) }}</p>
                    </div>
                </div>

                <div class="d-flex">
                    <div class="col-5 col-xl-2 col-lg-2">
                        <p><b>Religion : </b></p>
                    </div>
                    <div class="col">
                        <p class="ms-3">{{ old('madiReligion', $maids->religion) }}</p>
                    </div>
                </div>

                <div class="d-flex">
                    <div class="col-5 col-xl-2 col-lg-2">
                        <p><b>Weight : </b></p>
                    </div>
                    <div class="col">
                        <p class="ms-3">{{ old('madiWeight', $maids->weight) }}</p>
                    </div>
                </div>

                <div class="d-flex">
                    <div class="col-5 col-xl-2 col-lg-2">
                        <p><b>Height : </b></p>
                    </div>
                    <div class="col">
                        <p class="ms-3">{{ old('madiHeight', $maids->height) }}</p>
                    </div>
                </div>

                <div class="d-flex">
                    <div class="col-5 col-xl-2 col-lg-2">
                        <p><b>Salary : </b></p>
                    </div>
                    <div class="col">
                        <p class="ms-3">{{ old('madiSalary', $maids->salary) }} <b>Baht</b></p>
                    </div>
                </div>

                <div class="d-flex">
                    <div class="col-5 col-xl-2 col-lg-2">
                        <p><b>Language : </b></p>
                    </div>
                    <div class="col">
                        <p class="ms-3">{{ old('madiLanguage', $maids->language) }}</p>
                    </div>
                </div>

                <div class="d-flex">
                    <div class="col-5 col-xl-2 col-lg-2">
                        <p><b>status : </b></p>
                    </div>
                    <div class="col">
                        <p class="ms-3">{{ old('madiStatus', $maids->status) }}</p>
                    </div>
                </div>

                <div class="d-flex">
                    <div class="col-5 col-xl-2 col-lg-2">
                        <p><b>Working Time : </b></p>
                    </div>
                    <div class="col">
                        <p class="ms-3">{{ old('full_part', $maids->full_part) }} /
                            {{ old('live_in_out', $maids->live_in_out) }}</p>
                    </div>
                </div>

                <div class="d-flex">
                    <div class="col-5 col-xl-2 col-lg-2">
                        <p><b>Experience : </b></p>
                    </div>
                    <div class="col">
                        <p class="ms-3">{{ old('madiExperience', $maids->experience) }}</p>
                    </div>
                </div>

                <div class="d-flex">
                    <div class="col-5 col-xl-2 col-lg-2">
                        <p><b>Skill : </b></p>
                    </div>
                    <div class="col">
                        <p class="ms-3">{{ old('madiSkill', $maids->skill) }}</p>
                    </div>
                </div>

                <div class="d-flex">
                    <div class="col-5 col-xl-2 col-lg-2">
                        <p><b>Pets : </b></p>
                    </div>
                    <div class="col">
                        <p class="ms-3">{{ old('pets', $maids->pet) }}</p>
                    </div>

                    <div class="col pet-column">
                        <small class="ms-3"><b> - </b></small>
                    </div>
                    <div class="col-10 pet-note d-flex px-4 pb-2 mb-3">

                        <small class="shadow-sm p-2"
                            style="color: rgb(187, 45, 59);">{{ old('petNote', $maids->pet_note) }}</small>
                    </div>
                </div>



                <div class="d-flex">
                    <div class="col-5 col-xl-2 col-lg-2">
                        <p><b>Vaccine: </b></p>
                    </div>
                    <div class="col">
                        <p class="ms-3">{{ old('madiVaccine', $maids->vaccine) }}</p>
                    </div>
                </div>

                <div class="d-flex">
                    <div class="col-5 col-xl-2 col-lg-2">
                        <h5 class="text-danger"><b>Remark :</b></h5>
                    </div>
                    <div class="col">
                        <p class="ms-3">{{ old('madiRemark', $maids->remark) }}</p>
                    </div>
                </div>





                {{-- <p class="text-danger"><b>Remark:</b></p>

                <div class="d-flex">
                    <p><b>Note: </b></p>
                    <p class="ms-3">{{ old('madiNote', $maids->note) }}</p>
                </div> --}}


            </div>
        </div>
    </div>


    <div class="mt-4">
        <a href="{{ route('mainmaid#page') }}" class="btn btn-primary px-3">Back</a>
        <a href="{{ route('maidrequest#page', $maids->id) }}" class="btn btn-danger px-3 float-end">Request</a>
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
                        <p>{{ old('madiCode', $maids->code) }}</p>
                        <p>{{ old('madiName', $maids->name) }}</p>
                        <p>{{ old('madiPosition', $maids->position) }}</p>
                        <p>{{ old('nannyDoB', $maids->date_of_birth) }}</p>
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
