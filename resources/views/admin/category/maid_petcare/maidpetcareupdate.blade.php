@extends('admin.layouts.master')

@section('title', 'Maid, Pet Care List')

@section('content')


    <style>
        .info p {
            margin-bottom: 10px;
        }
    </style>
    <div class="main-content">
        <div class="container">
            <div class="text-center">
                <a href="{{ route('maidpetcare#page') }}" class="text-decoration-none text-dark">
                    <i class="fa-solid fa-left-long"></i> back
                </a>
            </div>
            <div class="w-50 m-auto shadow p-5 bg-light">
                <div id="info">
                    <div class="img col-4 me-3">
                        <input type="hidden" name="maidpetcareId" value="{{ $maidpetcare->id }}">
                        @if ($maidpetcare->photo != null)
                            <img src="{{ asset('storage/' . $maidpetcare->photo) }}" class="img-thumbnail" alt="...">
                        @endif
                    </div>



                    <div class="col info mt-3">
                        <div class="d-flex">
                            <p><b>Code: </b></p>
                            <p class="ms-3">{{ old('maidpetcareCode', $maidpetcare->code) }}</p>
                        </div>
                        <div class="d-flex">
                            <p><b>Name: </b></p>
                            <p class="ms-3">{{ old('maidpetcareName', $maidpetcare->name) }}</p>
                        </div>

                        <div class="d-flex">
                            <p><b>Position: </b></p>
                            <p class="ms-3">{{ old('maidpetcarePosition', $maidpetcare->position) }}</p>
                        </div>

                        <div class="d-flex">
                            <p><b>DOB: </b></p>
                            <p class="ms-3">{{ old('maidpetcareDoB', $maidpetcare->date_of_birth) }}</p>
                        </div>

                        <div class="d-flex">
                            <p><b>Nationality: </b></p>
                            <p class="ms-3">{{ old('maidpetcareNationality', $maidpetcare->nationality) }}</p>
                        </div>

                        <div class="d-flex">
                            <p><b>Religion: </b></p>
                            <p class="ms-3">{{ old('maidpetcareReligion', $maidpetcare->religion) }}</p>
                        </div>

                        <div class="d-flex">
                            <p><b>Weight: </b></p>
                            <p class="ms-3">{{ old('maidpetcareWeight', $maidpetcare->weight) }}</p>
                        </div>

                        <div class="d-flex">
                            <p><b>Height: </b></p>
                            <p class="ms-3">{{ old('maidpetcareHeight', $maidpetcare->height) }}</p>
                        </div>

                        <div class="d-flex">
                            <p><b>Salary: </b></p>
                            <p class="ms-3">{{ old('maidpetcareSalary', $maidpetcare->salary) }} <b>Baht</b></p>
                        </div>

                        <div class="d-flex">
                            <p><b>Language: </b></p>
                            <p class="ms-3">{{ old('maidpetcareLanguage', $maidpetcare->language) }}</p>
                        </div>

                        <div class="d-flex">
                            <p><b>status: </b></p>
                            <p class="ms-3">{{ old('maidpetcareStatus', $maidpetcare->status) }}</p>
                        </div>

                        <div class="d-flex">
                            <p><b>Working Time: </b></p>
                            <p class="ms-3">{{ old('full_part', $maidpetcare->full_part) }} / {{ old('live_in_out', $maidpetcare->live_in_out) }}</p>
                        </div>

                        <div class="d-flex">
                            <p><b>Experience: </b></p>
                            <p class="ms-3">{{ old('maidpetcareExperience', $maidpetcare->experience) }}</p>
                        </div>

                        <div class="d-flex">
                            <p><b>Skill: </b></p>
                            <p class="ms-3">{{ old('maidpetcareSkill', $maidpetcare->skill) }}</p>
                        </div>

                        <div class="d-flex">
                            <p><b>Pets: </b></p>
                            <p class="ms-3">{{ old('pets', $maidpetcare->pet) }}</p>
                        </div>

                        <div class="d-flex px-4 mb-3">
                            <small>Note: </small>
                            <small class="ms-3">{{ old('petNote', $maidpetcare->pet_note) }}</small>
                        </div>

                        <div class="d-flex">
                            <p><b>Vaccine: </b></p>
                            <p class="ms-3">{{ old('maidpetcareVaccine', $maidpetcare->vaccine) }}</p>
                        </div>

                        <div class="d-flex">
                            <h4 class="text-danger">Remark: </h4>
                            <p class="ms-3">{{ old('maidpetcareRemark', $maidpetcare->remark) }}</p>
                        </div>

                        <div class="d-flex">
                            <p><b>Note: </b></p>
                            <p class="ms-3">{{ old('maidpetcareNote', $maidpetcare->note) }}</p>
                        </div>


                    </div>
                </div>
            </div>

            <div class="text-center mt-2">

                <button class="btn btn-primary me-2" onclick="printPage()">Print</button>
                <a href="{{ route('maidpetcare#editPage', $maidpetcare->id) }}" class="card-link">
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
