@extends('admin.layouts.master')

@section('title', 'Maid List')

@section('content')


    <style>
        .info p {
            margin-bottom: 10px;
        }
    </style>
    <div class="main-content">
        <div class="container">
            <div class="text-center">
                <a href="{{ route('maid#page') }}" class="text-decoration-none text-dark">
                    <i class="fa-solid fa-left-long"></i> back
                </a>
            </div>
            <div class="w-50 m-auto shadow p-5 bg-light">
                <div id="info">
                    <div class="img col-4 me-3">
                        <input type="hidden" name="maidId" value="{{ $maid->id }}">
                        @if ($maid->photo != null)
                            <img src="{{ asset('storage/' . $maid->photo) }}" class="img-thumbnail" alt="...">
                        @endif
                    </div>



                    <div class="col info mt-3">
                        <div class="d-flex">
                            <p><b>Code: </b></p>
                            <p class="ms-3">{{ old('maidCode', $maid->code) }}</p>
                        </div>
                        <div class="d-flex">
                            <p><b>Name: </b></p>
                            <p class="ms-3">{{ old('maidName', $maid->name) }}</p>
                        </div>

                        <div class="d-flex">
                            <p><b>Position: </b></p>
                            <p class="ms-3">{{ old('maidPosition', $maid->position) }}</p>
                        </div>

                        <div class="d-flex">
                            <p><b>DOB: </b></p>
                            <p class="ms-3">{{ old('maidDoB', $maid->date_of_birth) }}</p>
                        </div>

                        <div class="d-flex">
                            <p><b>Nationality: </b></p>
                            <p class="ms-3">{{ old('maidNationality', $maid->nationality) }}</p>
                        </div>

                        <div class="d-flex">
                            <p><b>Religion: </b></p>
                            <p class="ms-3">{{ old('maidReligion', $maid->religion) }}</p>
                        </div>

                        <div class="d-flex">
                            <p><b>Weight: </b></p>
                            <p class="ms-3">{{ old('maidWeight', $maid->weight) }}</p>
                        </div>

                        <div class="d-flex">
                            <p><b>Height: </b></p>
                            <p class="ms-3">{{ old('maidHeight', $maid->height) }}</p>
                        </div>

                        <div class="d-flex">
                            <p><b>Salary: </b></p>
                            <p class="ms-3">{{ old('maidSalary', $maid->salary) }} <b>Baht</b></p>
                        </div>

                        <div class="d-flex">
                            <p><b>Language: </b></p>
                            <p class="ms-3">{{ old('maidLanguage', $maid->language) }}</p>
                        </div>

                        <div class="d-flex">
                            <p><b>status: </b></p>
                            <p class="ms-3">{{ old('maidStatus', $maid->status) }}</p>
                        </div>

                        <div class="d-flex">
                            <p><b>Working Time: </b></p>
                            <p class="ms-3">{{ old('full_part', $maid->full_part) }} / {{ old('live_in_out', $maid->live_in_out) }}</p>
                        </div>

                        <div class="d-flex">
                            <p><b>Experience: </b></p>
                            <p class="ms-3">{{ old('maidExperience', $maid->experience) }}</p>
                        </div>

                        <div class="d-flex">
                            <p><b>Skill: </b></p>
                            <p class="ms-3">{{ old('maidSkill', $maid->skill) }}</p>
                        </div>

                        <div class="d-flex">
                            <p><b>Pets: </b></p>
                            <p class="ms-3">{{ old('pets', $maid->pet) }}</p>
                        </div>

                        <div class="d-flex px-4 mb-3">
                            <small>Note: </small>
                            <small class="ms-3">{{ old('petNote', $maid->pet_note) }}</small>
                        </div>

                        <div class="d-flex">
                            <p><b>Vaccine: </b></p>
                            <p class="ms-3">{{ old('maidVaccine', $maid->vaccine) }}</p>
                        </div>

                        <div class="d-flex">
                            <h4 class="text-danger">Remark: </h4>
                            <p class="ms-3">{{ old('maidRemark', $maid->remark) }}</p>
                        </div>

                        <div class="d-flex">
                            <p><b>Note: </b></p>
                            <p class="ms-3">{{ old('maidNote', $maid->note) }}</p>
                        </div>


                    </div>
                </div>
            </div>

            <div class="text-center mt-2">

                <button class="btn btn-primary me-2" onclick="printPage()">Print</button>
                <a href="{{ route('maid#editPage', $maid->id) }}" class="card-link">
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
