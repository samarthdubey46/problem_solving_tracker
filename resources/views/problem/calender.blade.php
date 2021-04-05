@extends('layouts.app')

@section('content')
    <link href="{{ asset('css/calender.css') }}" rel="stylesheet">
    <script src="{{ asset('js/calender.js') }}" defer></script>

    <div class="col-12 d-flex flex-column justify-content-center align-items-center">
        <div class="col-12" id="calendar">
            <div id="calendar_header">
                <i func="back" class="material-icons">
                    arrow_back_ios
                </i>
                <h1></h1>
                <i func="front" class="material-icons">
                    arrow_forward_ios
                </i>

            </div>
            <div id="calendar_weekdays"></div>
            <div id="calendar_content"></div>
        </div>
    </div>




@endsection
