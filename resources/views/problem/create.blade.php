@extends('layouts.app')

@section('content')
    <link href="{{ asset('css/stopwatch.css') }}" rel="stylesheet">

    <script src="{{ asset('js/stopwatch.js') }}" defer></script>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8 ">
                <div class="card-body">
                    <form method="POST" class="d-flex flex-column flex-fill" action="/problem">
                        @csrf
                        <div class="form-group row">
                            <label for="name"
                                   class="col-md-4 col-form-label text-white  text-md-right"><b>Name</b></label>

                            <div class="col-md-6">
                                <input id="name" type="text"
                                       class="form-control @error('name') is-invalid @enderror" name="name"
                                       value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="solvedOn" class="col-md-4 col-form-label text-white  text-md-right"><b>Solved
                                    On</b></label>

                            <div class="col-md-6">
                                <input id="solvedOn" type="date"
                                       class="form-control @error('solvedOn') is-invalid @enderror" name="solvedOn"
                                       value="{{ old('solvedOn') }}" required autocomplete="solvedOn" autofocus>

                                @error('solvedOn')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Status"
                                   class="col-md-4 col-form-label text-white  text-md-right"><b>Status</b></label>

                            <div class="col-md-6">

                                <select name="Status" value="{{ old('Status') }}" class="form-control"
                                        @error('Status') is-invalid
                                        @enderror id="Status">
                                    <option>Accepted</option>
                                    <option>Rejected</option>
                                    <option>Wrong Answer</option>
                                    <option> Runtime error</option>
                                    <option> Time Limit Exceed</option>
                                    <option> Memory Limit Exceed</option>
                                    <option> Compilation Error</option>

                                </select>

                                @error('Status')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="submitCount" class="col-md-4 col-form-label text-white  text-md-right"><b>Submit
                                    Count</b></label>

                            <div class="col-md-6">
                                <input id="submitCount" type="number"
                                       class="form-control @error('submitCount') is-invalid @enderror"
                                       name="submitCount"
                                       value="{{ old('submitCount') }}" required autocomplete="submitCount"
                                       autofocus>

                                @error('submitCount')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="readingTime" class="col-md-4 col-form-label text-white  text-md-right"><b>Reading
                                    Time(m)</b></label>

                            <div class="col-md-6">
                                <input step="0.0    1" id="readingTime" type="number"
                                       class="form-control @error('readingTime') is-invalid @enderror"
                                       name="readingTime"
                                       value="{{ old('readingTime') }}" required autocomplete="readingTime"
                                       autofocus>

                                @error('readingTime')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="thinkingTime" class="col-md-4 col-form-label text-white  text-md-right"><b>Thinking
                                    Time(m)</b></label>

                            <div step="0.01" class="col-md-6">
                                <input id="thinkingTime" type="number"
                                       class="form-control @error('thinkingTime') is-invalid @enderror"
                                       name="thinkingTime"
                                       value="{{ old('thinkingTime') }}" required autocomplete="thinkingTime"
                                       autofocus>

                                @error('thinkingTime')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="codingTime" class="col-md-4 col-form-label text-white  text-md-right"><b>Coding
                                    Time(m)</b></label>

                            <div class="col-md-6">
                                <input step="0.01" id="codingTime" type="number"
                                       class="form-control @error('codingTime') is-invalid @enderror"
                                       name="codingTime"
                                       value="{{ old('codingTime') }}" required autocomplete="codingTime" autofocus>

                                @error('codingTime')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="debugTime" class="col-md-4 col-form-label text-white  text-md-right"><b>Debug
                                    Time(m)</b></label>

                            <div class="col-md-6">
                                <input step="0.01" id="debugTime" type="number"
                                       class="form-control @error('debugTime') is-invalid @enderror"
                                       name="debugTime"
                                       value="{{ old('debugTime') }}" required autocomplete="debugTime" autofocus>

                                @error('debugTime')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="problemLevel" class="col-md-4 col-form-label text-white  text-md-right"><b>Problem
                                    Level</b></label>

                            <div class="col-md-6">

                                <select name="problemLevel" value="{{ old('problemLevel') }}" class="form-control"
                                        @error('problemLevel') is-invalid
                                        @enderror id="problemLevel">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>

                                </select>

                                @error('problemLevel')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="byYourself" class="col-md-4 col-form-label text-white  text-md-right"><b>By
                                    Yourself</b></label>

                            <div class="col-md-6">
                                <select name="byYourself" value="{{ old('byYourself') }}" class="form-control"
                                        @error('byYourself') is-invalid
                                        @enderror id="byYourself">
                                    <option>Yes</option>
                                    <option>No</option>
                                    <option>Hint</option>
                                </select>

                                @error('byYourself')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="Category"
                                   class="col-md-4 col-form-label text-white  text-md-right"><b>Category</b></label>

                            <div class="col-md-6">
                                <input step="0.01" id="Category" type="text"
                                       class="form-control @error('Category') is-invalid @enderror" name="Category"
                                       value="{{ old('Category') }}" required autocomplete="Category" autofocus>

                                @error('Category')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="url"
                                   class="col-md-4 col-form-label text-white  text-md-right"><b>URL</b></label>

                            <div class="col-md-6">
                                <input step="0.01" id="url" type="text"
                                       class="form-control @error('url') is-invalid @enderror" name="url"
                                       value="{{ old('url') }}" required autocomplete="url" autofocus>

                                @error('url')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="">
                            <div class="form-group row mb-1">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                </div>
                            </div>

                        </div>
                    </form>

                </div>
            </div>

            <div class="col-2 ">
                <div class="wrapper">

                    <div id="watch-dial" class="tile">00:00:00:00</div>
                    <div class="d-flex justify-content-between">
                        <button id="start-stop" style="width: 90px" class="tile action-button start-button">Start
                        </button>
                        <button onclick="
                            let list = ['readingTime','thinkingTime','codingTime','debugTime',]
                            list.forEach((item) => {
                                const element = document.getElementById(item)
                                element.value = ''
                            } )

" style="width: 90px" class="tile action-button reset-button">Form Reset
                        </button>
                        <button id="reset-lap" style="width: 90px" class="tile action-button reset-button">Reset
                        </button>
                    </div>
                    <ul id="laps">
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

