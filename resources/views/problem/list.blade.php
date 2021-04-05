@extends('layouts.app')

@section('content')
    <style>
        .pointer-hand:hover {
            cursor: pointer;
        }
    </style>
    <div class="container d-flex flex-column">
        @if($problems->count() > 0)
            @foreach($problems as $problem)
                <div class="list-group mb-2">
                    <div onclick="function s(){
                        window.location.assign('/problem/{{$problem['id']}}')}
                        s()
                        " class="pointer-hand list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <div class="d-flex">
                                <h4 class="mb-1 mr-3">{{$problem['name']}}</h4>
                                <span
                                    class="badge badge-primary badge-pill d-flex justify-content-center align-items-center">{{$problem['problemLevel']}}</span>
                            </div>
                            <small>{{(int)$problem['totalTime']}} mins</small>
                        </div>
                        <p class="mb-1">Solved On : <b>{{$problem['solvedOn']}}</b></p>
                        <p class="mb-1">Status : <b>{{$problem['Status']}}</b></p>
                        <p class="mb-1">Category : <b>{{$problem['Category']}}</b></p>
                        <p class="mb-1">By Yourself : <b>{{$problem['byYourself']}}</b></p>
                        <a href="{{$problem['url']}}">{{$problem['url']}}</a>

                    </div>

                </div>
            @endforeach
            <div class="row">
                <div class="col-8 d-flex justify-content-center">
                    {{ $problems->links() }}
                </div>
            </div>
        @else
            <div class="d-flex justify-content-center">
                <h1 class="text-white" style="margin-top: 200px">No Problems Solved</h1>

            </div>
        @endif
    </div>

@endsection
