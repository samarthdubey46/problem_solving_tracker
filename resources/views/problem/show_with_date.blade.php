@extends('layouts.app')

@section('content')
    <style>
        .pointer-hand:hover {
            cursor: pointer;
        }
    </style>
    <div class="container d-flex flex-column">
        <h1 class="pb-2 text-white">Problems Solved On {{$day}}-{{$month}}-{{$year}}</h1>
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
                        <p class="mb-1">Category : <b>{{$problem['Category']}}</b></p>
                        <p class="mb-1">Status : <b>{{$problem['Status']}}</b></p>
                        <p class="mb-1">By Yourself : <b>{{$problem['byYourself']}}</b></p>
                        <p class="mb-1">Submit Count : <b>{{$problem['submitCount']}}</b></p>
                        <a target="_blank" href="{{$problem['url']}}">{{$problem['url']}}</a>

                    </div>

                </div>
            @endforeach
        @else
            <div class="d-flex justify-content-center">
                <h1 class="text-white" style="margin-top: 200px">No Problems Solved On This Date</h1>

            </div>
        @endif
    </div>

@endsection
