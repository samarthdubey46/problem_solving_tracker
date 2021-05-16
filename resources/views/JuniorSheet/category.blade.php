@extends('layouts.junior')

@section('content')
    <script>
        let click = (letter) => {
            let A = document.getElementById(letter)
            console.log(A.value)

        }
    </script>
    <div class="container">
        <div id="CURRENT" letter="A">

        </div>
    <div id="junior"></div>
    <div class="container">

{{--        <table class="table">--}}
{{--            <thead class="thead-dark">--}}
{{--            <tr>--}}
{{--                <th scope="col">id</th>--}}
{{--                <th scope="col">Name</th>--}}
{{--                <th scope="col">Level</th>--}}
{{--                <th scope="col">Verdict</th>--}}

{{--            </tr>--}}
{{--            </thead>--}}

{{--            @foreach($list['A'] as $item)--}}
{{--                <tbody>--}}
{{--                <tr style="background: {{$item['color']}}">--}}
{{--                    <th style="color: {{$item['text_color']}}" scope="row">{{$item['id']}}</th>--}}

{{--                    <td style="color: {{$item['text_color']}}"><a target="{{$item['target']}}"--}}
{{--                                                                  @if($item['solvedOn'] != '-') style="color: {{$item['text_color']}}"--}}
{{--                                                                  @endif href="{{$item['url']}}">{{$item['Name']}}</a>--}}
{{--                    </td>--}}
{{--                    --}}{{----}}{{--                    <td style="color: {{$item['text_color']}}">{{$item['onSite']}}</td>--}}
{{--                    <td style="color: {{$item['text_color']}}">{{$item['level']}}</td>--}}
{{--                    <td style="color: {{$item['text_color']}}">{{$item['solvedOn']}}</td>--}}

{{--                </tr>--}}
{{--                </tbody>--}}
{{--            @endforeach--}}
{{--        </table>--}}


    </div>

@endsection
