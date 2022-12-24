@extends('admin.layouts.master')

@section('title', 'Nanny List')

@section('content')


    <style>
        .info p {
            margin-bottom: 10px;
        }
    </style>
    <div class="main-content">
        <div class="container">
            <div class="text-center">
                <a href="{{ route('nanny#page') }}" class="text-decoration-none text-dark">
                    <i class="fa-solid fa-left-long"></i> back
                </a>
            </div>
            <div class="w-50 m-auto shadow p-5 bg-light">
                <div id="info">
                    <div class="img col-4 me-3">
                        <input type="hidden" name="nannyId" value="{{ $nanny->id }}">
                        @if ($nanny->photo != null)
                            <img src="{{ asset('storage/' . $nanny->photo) }}" class="img-thumbnail" alt="...">
                        @endif
                    </div>

                    {{-- <div class="col info d-flex mt-3 ">
                        <div class="col-4">
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

                            <p><b>Working Time : </b></p> <br>

                            <p style="height: 200px;"><b>Experience : </b></p>
                            <p><b>Skill : </b></p>
                            <p><b>Pets :</b></p>
                            <p><b> - </b></p>
                            <p><b>Vaccine : </b></p>
                            <h4 class="text-danger">Remark : </h4>
                            <p class="mt-2"><b>Note : </b></p>
                        </div>


                        <div class="ms-4">
                            <p>{{ old('nannyCode', $nanny->code) }}</p>
                            <p>{{ old('nannyName', $nanny->name) }}</p>
                            <p>{{ old('nannyPosition', $nanny->position) }}</p>
                            <p>{{ old('nannyDoB', $nanny->date_of_birth) }}</p>
                            <p>{{ old('nannyNationality', $nanny->nationality) }}</p>
                            <p>{{ old('nannyReligion', $nanny->religion) }}</p>
                            <p>{{ old('nannyWeight', $nanny->weight) }}</p>
                            <p>{{ old('nannyHeight', $nanny->height) }}</p>
                            <p>{{ old('nannySalary', $nanny->salary) }} Baht</p>
                            <p>{{ old('nannyLanguage', $nanny->language) }}</p>
                            <p>{{ old('nannyStatus', $nanny->status) }}</p>
                            <p>{{ old('full_part', $nanny->full_part) }} / {{ old('live_in_out', $nanny->live_in_out) }}</p> <br>
                            <p style="height: 200px;">{{ old('nannyExperience', $nanny->experience) }}</p>
                            <p>{{ old('nannySkill', $nanny->skill) }}</p>

                            <p>{{ old('pets', $nanny->pet) }}</p>
                            <p>{{ old('petNote', $nanny->pet_note) }}</p>

                            <p>{{ old('nannyVaccine', $nanny->vaccine) }}</p> <br>
                            <p>{{ old('note', $nanny->note) }}</p>
                        </div>
                    </div> --}}

                    <div class="col info mt-3">
                        <div class="d-flex">
                            <div class="col-2">
                                <p><b>Code: </b></p>
                            </div>
                            <div class="col">
                                <p class="ms-5">{{ old('nannyCode', $nanny->code) }}</p>

                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="col-2">
                                <p><b>Name: </b></p>

                            </div>
                            <div class="col">
                                <p class="ms-5">{{ old('nannyName', $nanny->name) }}</p>

                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="col-2">
                                <p><b>Position: </b></p>
                            </div>
                            <div class="col">
                                <p class="ms-5">{{ old('nannyPosition', $nanny->position) }}</p>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="col-2">
                                <p><b>DOB: </b></p>
                            </div>
                            <div class="col">
                                <p class="ms-5">{{ old('nannyDoB', $nanny->date_of_birth) }}</p>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="col-2">
                                <p><b>Nationality: </b></p>
                            </div>
                            <div class="col">
                                <p class="ms-5">{{ old('nannyNationality', $nanny->nationality) }}</p>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="col-2">
                                <p><b>Religion: </b></p>
                            </div>
                            <div class="col">
                                <p class="ms-5">{{ old('nannyReligion', $nanny->religion) }}</p>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="col-2">
                                <p><b>Weight: </b></p>
                            </div>
                            <div class="col">
                                <p class="ms-5">{{ old('nannyWeight', $nanny->weight) }}</p>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="col-2">
                                <p><b>Height: </b></p>
                            </div>
                            <div class="col">
                                <p class="ms-5">{{ old('nannyHeight', $nanny->height) }}</p>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="col-2">
                                <p><b>Salary: </b></p>
                            </div>
                            <div class="col">
                                <p class="ms-5">{{ old('nannySalary', $nanny->salary) }} <b>Baht</b></p>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="col-2">
                                <p><b>Language: </b></p>
                            </div>
                            <div class="col">
                                <p class="ms-5">{{ old('nannyLanguage', $nanny->language) }}</p>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="col-2">
                                <p><b>status: </b></p>
                            </div>
                            <div class="col">
                                <p class="ms-5">{{ old('nannyStatus', $nanny->status) }}</p>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="col-2">
                                <p><b>Working Time: </b></p>
                            </div>
                            <div class="col">
                                <p class="ms-5">{{ old('full_part', $nanny->full_part) }} /
                                    {{ old('live_in_out', $nanny->live_in_out) }}</p>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="col-2">
                                <p><b>Experience: </b></p>
                            </div>
                            <div class="col">
                                <p class="ms-5">{{ old('nannyExperience', $nanny->experience) }}</p>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="col-2">
                                <p><b>Skill: </b></p>
                            </div>
                            <div class="col">
                                <p class="ms-5">{{ old('nannySkill', $nanny->skill) }}</p>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="col-2">
                                <p><b>Pets: </b></p>
                            </div>
                            <div class="col">
                                <p class="ms-5">{{ old('pets', $nanny->pet) }}</p>
                            </div>
                        </div>

                        <div class="d-flex px-4 mb-3">
                            <div class="col-2">
                                <small>Note: </small>
                            </div>
                            <div class="col">
                                <small class="ms-5">{{ old('petNote', $nanny->pet_note) }}</small>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="col-2">
                                <p><b>Vaccine: </b></p>
                            </div>
                            <div class="col">
                                <p class="ms-5">{{ old('nannyVaccine', $nanny->vaccine) }}</p>
                            </div>
                        </div>

                        {{-- <div class="d-flex">
                            <p><b>Available/Not Available:</b></p>
                            <p class="ms-5">{{ old('nannyStock', $nanny->stockstatus) }}</p>
                        </div> --}}

                        <div class="d-flex">
                            <div class="col-2">
                                <h4 class="text-danger">Remark: </h4>
                            </div>
                            <div class="col">
                                <p class="ms-5">{{ old('nannyRemark', $nanny->remark) }}</p>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="col-2">
                                <p><b>Note: </b></p>
                            </div>
                            <div class="col">
                                <p class="ms-5">{{ old('nannyNote', $nanny->note) }}</p>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <div class="text-center mt-2">

                <button class="btn btn-primary me-2" onclick="printPage()">Print</button>
                <a href="{{ route('nanny#editPage', $nanny->id) }}" class="card-link">
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
