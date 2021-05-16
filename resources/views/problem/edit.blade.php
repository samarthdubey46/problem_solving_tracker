@extends('layouts.app')


@section('content')
    <form method="POST" action="/problem/{{$problem['id']}}">
        @csrf
        @method('PATCH')

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-white  text-md-right"><b>Name</b></label>

            <div class="col-md-6">
                <input id="name" type="text"
                       class="form-control @error('name') is-invalid @enderror" name="name"
                       value="{{ old('name') ?? $problem['name'] }}" required autocomplete="name" autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="solvedOn" class="col-md-4 col-form-label text-white  text-md-right"><b>Solved On</b></label>

            <div class="col-md-6">
                <input id="solvedOn" type="date"
                       class="form-control @error('solvedOn') is-invalid @enderror" name="solvedOn"
                       value="{{ old('solvedOn') ?? $problem['solvedOn'] }}" required autocomplete="solvedOn" autofocus>

                @error('solvedOn')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="Status" class="col-md-4 col-form-label text-white  text-md-right"><b>Status</b></label>

            <div class="col-md-6">

                <select name="Status" value="{{ old('Status') ?? $problem['Status'] }}" class="form-control"
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
                       class="form-control @error('submitCount') is-invalid @enderror" name="submitCount"
                       value="{{ old('submitCount') ?? $problem['submitCount'] }}" required autocomplete="submitCount"
                       autofocus>

                @error('submitCount')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="readingTime" class="col-md-4 col-form-label text-white  text-md-right"><b>Reading Time(m)</b></label>

            <div class="col-md-6">
                <input id="readingTime"
                       class="form-control" name="readingTime"
                       value="{{ old('readingTime') ?? $problem['readingTime'] }}" required
                       autofocus>

                @error('readingTime')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="thinkingTime" class="col-md-4 col-form-label text-white  text-md-right"><b>Thinking Time(m)</b></label>

            <div class="col-md-6">
                <input id="thinkingTime" type="number"
                       class="form-control @error('thinkingTime') is-invalid @enderror" name="thinkingTime"
                       value="{{ old('thinkingTime') ?? $problem['thinkingTime'] }}" required
                       autocomplete="thinkingTime" autofocus>

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
                <input id="codingTime" type="number"
                       class="form-control @error('codingTime') is-invalid @enderror" name="codingTime"
                       value="{{ old('codingTime') ?? $problem['codingTime'] }}" required autocomplete="codingTime"
                       autofocus>

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
                <input id="debugTime" type="number"
                       class="form-control @error('debugTime') is-invalid @enderror" name="debugTime"
                       value="{{ old('debugTime') ?? $problem['debugTime'] }}" required autocomplete="debugTime"
                       autofocus>

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

                <select name="problemLevel" value="{{ old('problemLevel') ?? $problem['problemLevel'] }}"
                        class="form-control" @error('problemLevel') is-invalid
                        @enderror id="problemLevel">
                    <option @if($problem['problemLevel'] == 1) selected @endif>1</option>
                    <option @if($problem['problemLevel'] == 2) selected @endif>2</option>
                    <option @if($problem['problemLevel'] == 3) selected @endif>3</option>
                    <option @if($problem['problemLevel'] == 4) selected @endif>4</option>
                    <option @if($problem['problemLevel'] == 5) selected @endif>5</option>
                    <option @if($problem['problemLevel'] == 6) selected @endif>6</option>
                    <option @if($problem['problemLevel'] == 7) selected @endif>7</option>
                    <option @if($problem['problemLevel'] == 8) selected @endif>8</option>
                    <option @if($problem['problemLevel'] == 9) selected @endif>9</option>
                    <option @if($problem['problemLevel'] == 10) selected @endif>10</option>

                </select>

                @error('problemLevel')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>
        {{--        byYourself--}}
        <div class="form-group row">
            <label for="byYourself" class="col-md-4 col-form-label text-white  text-md-right"><b>By Yourself</b></label>

            <div class="col-md-6">

                <select name="byYourself" value="{{ old('byYourself') ?? $problem['byYourself'] }}" class="form-control"
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
            <label for="code"
                   class="col-md-4 col-form-label text-white  text-md-right"><b>Contest Code</b></label>

            <div class="col-md-6">
                <input id="code" type="text"
                       class="form-control @error('code') is-invalid @enderror" name="code"
                       value="{{ old('code') ?? $problem['code'] }}" autocomplete="code" autofocus>

                @error('code')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="codeForcesLevel" class="col-md-4 col-form-label text-white  text-md-right"><b>Problem Class</b></label>

            <div class="col-md-6">
                <select name="codeForcesLevel" value="{{ old('codeForcesLevel') }}" class="form-control"
                        @error('codeForcesLevel') is-invalid
                        @enderror id="codeForcesLevel">
                    <option @if($problem['codeForcesLevel' == 'A']) selected @endif>A</option>
                    <option @if($problem['codeForcesLevel' == 'B']) selected @endif>B</option>
                    <option @if($problem['codeForcesLevel' == 'C']) selected @endif>C</option>
                    <option @if($problem['codeForcesLevel' == 'D']) selected @endif>D</option>
                    <option @if($problem['codeForcesLevel' == 'E']) selected @endif>E</option>
                    <option @if($problem['codeForcesLevel' == 'F']) selected @endif>F</option>
                </select>

                @error('codeForcesLevel')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>


        <div class="form-group row">
            <label for="Category" class="col-md-4 col-form-label text-white  text-md-right"><b>Category</b></label>

            <div class="col-md-6">
                <input id="Category" type="text"
                       class="form-control @error('Category') is-invalid @enderror" name="Category"
                       value="{{ old('Category') ?? $problem['Category'] }}" required autocomplete="Category" autofocus>

                @error('Category')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="url" class="col-md-4 col-form-label text-white  text-md-right"><b>URL</b></label>

            <div class="col-md-6">
                <input id="url" type="text"
                       class="form-control @error('url') is-invalid @enderror" name="url"
                       value="{{ old('url') ?? $problem['url'] }}" required autocomplete="url" autofocus>

                @error('url')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>


        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    Update
                </button>
            </div>
        </div>
    </form>
@endsection

