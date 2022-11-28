@extends('user.main.layouts.master')


@section('content')
    <div class="container-lg mt-5">
        <div class="row">
            <div class="col-3">
                <img class="card-img-top rounded" src="{{ asset('storage/' . $nannies->photo) }}" style="height: 310px"
                alt="">
            </div>
            <div class="col ms-5">
                <div class="col info d-flex ">
                    <div>
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
                        <p><b>Full Time/Part Time :</b></p>
                        <p><b>Live In/Live Out :</b></p>
                        <p><b>Experience :</b></p>
                        <p class="text-danger"><b>Remark:</b></p>
                        <div>
                            <p><b>(1) Pets :</b></p>
                            <p><b>(2) Dog : Small :</b></p>
                            <p><b>(3) Dog : Big :</b></p>
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
                            <p>{{ old('smallDog', $nannies->dog_small) }}</p>
                            <p>{{ old('bigDog', $nannies->dog_big) }}</p>
                            <p>{{ old('nannyVaccine', $nannies->vaccine) }}</p>
                            <p>{{ old('note', $nannies->note) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="text-end me-5">
            <a href="{{ route('user#home') }}" class="btn btn-primary px-3">Back</a>
            <a href="{{ route('user#request') }}" class="btn btn-danger px-3">Request</a>
        </div>

    </div>
@endsection
