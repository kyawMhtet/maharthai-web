@extends('admin.layouts.master')

@section('title', 'Maid, Cook List')

@section('content')


    <style>
        .info p {
            margin-bottom: 10px;
        }
    </style>
    <div class="main-content">
        <div class="container">
            <div class="text-center">
                <a href="{{ route('maidcook#page') }}" class="text-decoration-none text-dark">
                    <i class="fa-solid fa-left-long"></i> back
                </a>
            </div>
            <div class="w-50 m-auto shadow p-5 bg-light">
                <div id="info">
                    <div class="img col-4 me-3">
                        <input type="hidden" name="maidcookId" value="{{ $maidcook->id }}">
                        @if ($maidcook->photo != null)
                            <img src="{{ asset('storage/' . $maidcook->photo) }}" class="img-thumbnail" alt="...">
                        @endif
                    </div>



                    <div class="col info mt-3">
                        <div class="d-flex">
                            <div class="col-3">
                                <p><b>Code: </b></p>
                            </div>
                            <div class="col">
                                <p class="ms-5">{{ old('maidcookCode', $maidcook->code) }}</p>

                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="col-3">
                                <p><b>Name: </b></p>
                            </div>
                            <div class="col">
                                <p class="ms-5">{{ old('maidcookName', $maidcook->name) }}</p>

                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="col-3">
                                <p><b>Position: </b></p>
                            </div>
                            <div class="col">
                                <p class="ms-5">{{ old('maidcookPosition', $maidcook->position) }}</p>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="col-3">
                                <p><b>DOB: </b></p>
                            </div>
                            <div class="col">
                                <p class="ms-5">{{ old('maidcookDoB', $maidcook->date_of_birth) }}</p>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="col-3">
                                <p><b>Nationality: </b></p>
                            </div>
                            <div class="col">
                                <p class="ms-5">{{ old('maidcookNationality', $maidcook->nationality) }}</p>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="col-3">
                                <p><b>Religion: </b></p>
                            </div>
                            <div class="col">
                                <p class="ms-5">{{ old('maidcookReligion', $maidcook->religion) }}</p>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="col-3">
                                <p><b>Weight: </b></p>
                            </div>
                            <div class="col">
                                <p class="ms-5">{{ old('maidcookWeight', $maidcook->weight) }}</p>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="col-3">
                                <p><b>Height: </b></p>
                            </div>
                            <div class="col">
                                <p class="ms-5">{{ old('maidcookHeight', $maidcook->height) }}</p>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="col-3">
                                <p><b>Salary: </b></p>
                            </div>
                            <div class="col">
                                <p class="ms-5">{{ old('maidcookSalary', $maidcook->salary) }} <b>Baht</b></p>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="col-3">
                                <p><b>Language: </b></p>
                            </div>
                            <div class="col">
                                <p class="ms-5">{{ old('maidcookLanguage', $maidcook->language) }}</p>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="col-3">
                                <p><b>status: </b></p>
                            </div>
                            <div class="col">
                                <p class="ms-5">{{ old('maidcookStatus', $maidcook->status) }}</p>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="col-3">
                                <p><b>Working Time: </b></p>
                            </div>
                            <div class="col">
                                <p class="ms-5">{{ old('full_part', $maidcook->full_part) }} /
                                    {{ old('live_in_out', $maidcook->live_in_out) }}</p>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="col-3">
                                <p><b>Experience: </b></p>
                            </div>
                            <div class="col">
                                <p class="ms-5">{{ old('maidcookExperience', $maidcook->experience) }}</p>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="col-3">
                                <p><b>Skill: </b></p>
                            </div>
                            <div class="col">
                                <p class="ms-5">{{ old('maidcookSkill', $maidcook->skill) }}</p>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="col-3">
                                <p><b>Pets: </b></p>
                            </div>
                            <div class="col">
                                <p class="ms-5">{{ old('pets', $maidcook->pet) }}</p>
                            </div>
                        </div>

                        <div class="d-flex px-4 mb-3">
                            <div class="col-3">
                                <small>Note: </small>
                            </div>
                            <div class="col">
                                <small class="ms-5">{{ old('petNote', $maidcook->pet_note) }}</small>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="col-3">
                                <p><b>Vaccine: </b></p>
                            </div>
                            <div class="col">
                                <p class="ms-5">{{ old('maidcookVaccine', $maidcook->vaccine) }}</p>
                            </div>
                        </div>

                        {{-- <div class="d-flex">
                            <p><b>Available/Not Available:</b></p>
                            <p class="ms-5">{{ old('maidcookStock', $maidcook->stockstatus) }}</p>
                        </div> --}}

                        <div class="d-flex">
                            <div class="col-3">
                                <h4 class="text-danger">Remark: </h4>
                            </div>
                            <div class="col">
                                <p class="ms-5">{{ old('maidcookRemark', $maidcook->remark) }}</p>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="col-3">
                                <p><b>Note: </b></p>
                            </div>
                            <div class="col">
                                <p class="ms-5">{{ old('maidcookNote', $maidcook->note) }}</p>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <div class="text-center mt-2">

                <button class="btn btn-primary me-2" onclick="printPage()">Print</button>
                <a href="{{ route('maidcook#editPage', $maidcook->id) }}" class="card-link">
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
