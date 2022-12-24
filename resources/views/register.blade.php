$(document).ready(function() {
    // $.ajax({
    //     type : 'get' ,
    //     url : 'http://localhost/maharthai/public/ajax/nanny/list' ,
    //     dataType : 'json' ,
    //     success : function(response){
    //         console.log('response');
    //     }
    // });


    // input[type=radio][name=full_part]

    $('.workingtime').change(function() {
        $eventOption = $('.workingtime:checked').val();
        // console.log($eventOption);
        if ($eventOption == 'full-time') {
            $.ajax({
                type: 'get',
                url: '{{ route('filter#nannylist') }}',
                data: {
                    'status': 'full-time'
                },
                dataType: 'json',
                success: function(response) {
                    // console.log(response[0].full_part);
                    $list = '';
                    for ($i = 0; $i < response.length; $i++) {
                        $list += `
                        <div class="col-4 mt-5">
            <div class="nanny card p-2 border border-0" style="width: 20rem; height: 600px; ">

                <img class="card-img-top" src="{{ asset('storage/${response[$i].photo}') }}"
                    style="height: 305px; width: 305px;" alt="">
                <div class="card-body text-start">
                    <div>
                        <p>${response[$i].code}</p>
                        <p>${response[$i].full_part} / ${response[$i].live_in_out}</p>
                        <p>${response[$i].salary} <b>Baht</b></p>

                        <p>{{ Str::words($nanny->experience, 8, '...') }}</p>
                    </div>

                </div>
                <div class="text-center mb-4">
                    <a href="{{ route('nanny#info', $nanny->id) }}" class="btn btn-danger rounded-pill w-75">
                        More Details
                    </a>
                </div>

                {{-- <a href="javascript:void(0)" id="show-worker" data-url="{{ route('nanny#info', $nanny->id) }}" class="btn btn-danger">More Details</a> --}}

            </div>
        </div>
                    `;
                    }
                    $('#nannyList').html($list);
                }
            });
        } else if ($eventOption == 'part-time') {
            $.ajax({
                type: 'get',
                url: '{{ route('filter#nannylist') }}',
                data: {
                    'status': 'part-time'
                },
                dataType: 'json',
                success: function(response) {
                    // console.log(response[0].full_part);
                    $list = '';
                    for ($i = 0; $i < response.length; $i++) {
                        $list += `
                        <div class="col-4 mt-5">
            <div class="nanny card p-2 border border-0" style="width: 20rem; height: 600px; ">

                <img class="card-img-top" src="{{ asset('storage/${response[$i].photo}') }}"
                    style="height: 305px; width: 305px;" alt="">
                <div class="card-body text-start">
                    <div>
                        <p>${response[$i].code}</p>
                        <p>${response[$i].full_part} / ${response[$i].live_in_out}</p>
                        <p>${response[$i].salary} <b>Baht</b></p>

                        <p>{{ Str::words($nanny->experience, 8, '...') }}</p>
                    </div>

                </div>
                <div class="text-center mb-4">
                    <a href="{{ route('nanny#info', $nanny->id) }}" class="btn btn-danger rounded-pill w-75">
                        More Details
                    </a>
                </div>

                {{-- <a href="javascript:void(0)" id="show-worker" data-url="{{ route('nanny#info', $nanny->id) }}" class="btn btn-danger">More Details</a> --}}

            </div>
        </div>
                    `;
                    }
                    $('#nannyList').html($list);
                }
            });
        } else if ($eventOption == 'live-In') {
            $.ajax({
                type: 'get',
                url: '{{ route('filter#nannylist') }}',
                data: {
                    'status': 'live-In'
                },
                dataType: 'json',
                success: function(response) {
                    $list = '';
                    for ($i = 0; $i < response.length; $i++) {
                        $list += `
                        <div class="col-4 mt-5">
            <div class="nanny card p-2 border border-0" style="width: 20rem; height: 600px; ">

                <img class="card-img-top" src="{{ asset('storage/${response[$i].photo}') }}"
                    style="height: 305px; width: 305px;" alt="">
                <div class="card-body text-start">
                    <div>
                        <p>${response[$i].code}</p>
                        <p>${response[$i].full_part} / ${response[$i].live_in_out}</p>
                        <p>${response[$i].salary} <b>Baht</b></p>

                        <p>{{ Str::words($nanny->experience, 8, '...') }}</p>
                    </div>

                </div>
                <div class="text-center mb-4">
                    <a href="{{ route('nanny#info', $nanny->id) }}" class="btn btn-danger rounded-pill w-75">
                        More Details
                    </a>
                </div>

                {{-- <a href="javascript:void(0)" id="show-worker" data-url="{{ route('nanny#info', $nanny->id) }}" class="btn btn-danger">More Details</a> --}}

            </div>
        </div>
                    `;
                    }
                    $('#nannyList').html($list);
                }
            });
        } else if ($eventOption == 'live-Out') {
            $.ajax({
                type: 'get',
                url: '{{ route('filter#nannylist') }}',
                data: {
                    'status': 'live-Out'
                },
                dataType: 'json',
                success: function(response) {
                    $list = '';
                    for ($i = 0; $i < response.length; $i++) {
                        $list += `
                        <div class="col-4 mt-5">
            <div class="nanny card p-2 border border-0" style="width: 20rem; height: 600px; ">

                <img class="card-img-top" src="{{ asset('storage/${response[$i].photo}') }}"
                    style="height: 305px; width: 305px;" alt="">
                <div class="card-body text-start">
                    <div>
                        <p>${response[$i].code}</p>
                        <p>${response[$i].full_part} / ${response[$i].live_in_out}</p>
                        <p>${response[$i].salary} <b>Baht</b></p>

                        <p>{{ Str::words($nanny->experience, 8, '...') }}</p>
                    </div>

                </div>
                <div class="text-center mb-4">
                    <a href="{{ route('nanny#info', $nanny->id) }}" class="btn btn-danger rounded-pill w-75">
                        More Details
                    </a>
                </div>

                {{-- <a href="javascript:void(0)" id="show-worker" data-url="{{ route('nanny#info', $nanny->id) }}" class="btn btn-danger">More Details</a> --}}

            </div>
        </div>
                    `;
                    }
                    $('#nannyList').html($list);

                }
            });
        }
    });
});
