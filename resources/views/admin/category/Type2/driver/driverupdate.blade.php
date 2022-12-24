@extends('admin.layouts.master')

@section('title', 'Driver List')

@section('content')


    <style>
        .info p {
            margin-bottom: 10px;
        }
    </style>

    <div class="main-content">
        <div class="container">
            <div class="text-center">
                <a href="{{ route('driver#page') }}" class="text-decoration-none text-dark">
                    <i class="fa-solid fa-left-long"></i> back
                </a>
            </div>
            <div class="w-50 m-auto shadow p-5 bg-light">
                <div id="info">
                    <div class="img col-4 me-3">
                        <input type="hidden" name="driverId" value="{{ $driver->id }}">
                        @if ($driver->photo != null)
                            <img src="{{ asset('storage/' . $driver->photo) }}" class="img-thumbnail" alt="...">
                        @endif
                    </div>



                    <div class="col info mt-3">
                        <div class="d-flex">
                            <p><b>Code: </b></p>
                            <p class="ms-3">{{ old('driverCode', $driver->code) }}</p>
                        </div>
                        <div class="d-flex">
                            <p><b>Name: </b></p>
                            <p class="ms-3">{{ old('driverName', $driver->name) }}</p>
                        </div>

                        <div class="d-flex">
                            <p><b>Position: </b></p>
                            <p class="ms-3">{{ old('driverPosition', $driver->position) }}</p>
                        </div>

                        <div class="d-flex">
                            <p><b>DOB: </b></p>
                            <p class="ms-3">{{ old('driverDoB', $driver->date_of_birth) }}</p>
                        </div>

                        <div class="d-flex">
                            <p><b>Nationality: </b></p>
                            <p class="ms-3">{{ old('driverNationality', $driver->nationality) }}</p>
                        </div>

                        <div class="d-flex">
                            <p><b>Religion: </b></p>
                            <p class="ms-3">{{ old('driverReligion', $driver->religion) }}</p>
                        </div>

                        <div class="d-flex">
                            <p><b>Weight: </b></p>
                            <p class="ms-3">{{ old('driverWeight', $driver->weight) }}</p>
                        </div>

                        <div class="d-flex">
                            <p><b>Height: </b></p>
                            <p class="ms-3">{{ old('driverHeight', $driver->height) }}</p>
                        </div>

                        <div class="d-flex">
                            <p><b>Salary: </b></p>
                            <p class="ms-3">{{ old('driverSalary', $driver->salary) }} <b>Baht</b></p>
                        </div>

                        <div class="d-flex">
                            <p><b>Language: </b></p>
                            <p class="ms-3">{{ old('driverLanguage', $driver->language) }}</p>
                        </div>

                        <div class="d-flex">
                            <p><b>status: </b></p>
                            <p class="ms-3">{{ old('driverStatus', $driver->status) }}</p>
                        </div>

                        <div class="d-flex">
                            <p><b>Working Time: </b></p>
                            <p class="ms-3">{{ old('full_part', $driver->full_part) }} / {{ old('live_in_out', $driver->live_in_out) }}</p>
                        </div>

                        <div class="d-flex">
                            <p><b>Experience: </b></p>
                            <p class="ms-3">{{ old('driverExperience', $driver->experience) }}</p>
                        </div>

                        <div class="d-flex">
                            <p><b>Skill: </b></p>
                            <p class="ms-3">{{ old('driverSkill', $driver->skill) }}</p>
                        </div>

                        <div class="d-flex">
                            <p><b>Pets: </b></p>
                            <p class="ms-3">{{ old('pets', $driver->pet) }}</p>
                        </div>

                        <div class="d-flex px-4 mb-3">
                            <small>Note: </small>
                            <small class="ms-3">{{ old('petNote', $driver->pet_note) }}</small>
                        </div>

                        <div class="d-flex">
                            <p><b>Vaccine: </b></p>
                            <p class="ms-3">{{ old('driverVaccine', $driver->vaccine) }}</p>
                        </div>

                        <div class="d-flex">
                            <h4 class="text-danger">Remark: </h4>
                            <p class="ms-3">{{ old('driverRemark', $driver->remark) }}</p>
                        </div>

                        <div class="d-flex">
                            <p><b>Note: </b></p>
                            <p class="ms-3">{{ old('driverNote', $driver->note) }}</p>
                        </div>


                    </div>
                </div>
            </div>

            <div class="text-center mt-2">

                <button class="btn btn-primary me-2" onclick="printPage()">Print</button>
                <a href="{{ route('driver#editPage', $driver->id) }}" class="card-link">
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