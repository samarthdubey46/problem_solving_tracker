@extends('layouts.app')
@section('options-nav')
    <style>
        button {
            background: none;
            border: none;
            padding: 0;
        }
    </style>
    <form action="/problem/{{$problem['id']}}" method="post">
        @csrf
        @method('DELETE')
        <li class="nav-item" style="top:5px">
            <button type="submit" style="color: red;background: white" class="nav-link">Delete</button>
        </li>
    </form>
    <li class="nav-item" style="top:5px">
        <a class="nav-link" href="/problem/{{$problem['id']}}/edit">Edit</a>
    </li>
@endsection
@section('content')
    <link href="{{ asset('css/progress_round.css') }}" rel="stylesheet">
    <link href="{{ asset('css/progress_bar.css') }}" rel="stylesheet">

    <script src="{{ asset('js/round_progress.js') }}" defer></script>
    <style>
        body {
            /*background: #F5F1E9;*/
        }
    </style>

    <div class="container">
        <div class="list-group mb-4">
            <div class=" list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                    <div class="d-flex">
                        <h2 class="mb-1 mr-3">{{$problem['name']}}</h2>
                    </div>
                    <small>{{(int)$problem['totalTime']}} mins</small>
                </div>
                <p class="mb-1">Solved On : <b>{{$problem['solvedOn']}}</b></p>
                <p class="mb-1">Status : <b>{{$problem['Status']}}</b></p>
                <p class="mb-1">By Yourself : <b>{{$problem['byYourself']}}</b></p>
                <p class="mb-1">Category : <b>{{$problem['Category']}}</b></p>
                <p class="mb-1">Problem Class : <b>{{$problem['codeForcesLevel']}}</b></p>

                <a target="_blank" href="{{$problem['url']}}">{{$problem['url']}}</a>

            </div>

        </div>
        <div class="row">
            @foreach($list as $item)
                {{--                <div class="col-3">--}}
                <div class="mb-5 col-xl-3" style="height: 330px">
                    <div style="height: 325px"
                         class="bg-white rounded-lg p-5 shadow d-flex flex-column justify-content-between ">
                        <div style="margin-top: -13px" class="mb-2">
                            <h2 class="h6 font-weight-bold text-center mb-4">{{$item['head']}}</h2>

                            <!-- Progress bar 1 -->
                            <div class="progress mx-auto" data-value='{{$problem[$item['name']] * $item['mul']}}'>
<span class="progress-left">
                        <span class="progress-bar border-primary"></span>
          </span>
                                <span class="progress-right">
                        <span class="progress-bar border-primary"></span>
          </span>
                                <div
                                    class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                                    <div class="h2 font-weight-bold">{{$problem[$item['name']]}}<sup
                                            class="small"></sup>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END -->

                        <!-- Demo info -->
                        <div class="container d-flex align-items-center justify-content-center">
                            <div class="text-center mt-4">
                                <div class="h4 font-weight-bold mb-0">{{$item['average']}}</div>
                                <span class="small text-gray">Average</span>

                            </div>
                        </div>
                        <!-- END -->
                    </div>
                </div>
                {{--                </div>--}}
            @endforeach
        </div>

    </div>

@endsection
