@extends('layouts.app')

@section('content')
    <link href="{{ asset('css/progress_round.css') }}" rel="stylesheet">
    <link href="{{ asset('css/progress_bar.css') }}" rel="stylesheet">

    <script src="{{ asset('js/round_progress.js') }}" defer></script>
    <div class="container py-5">
        <div class="row">
            <div class="col-xl-3 col-lg-6 mb-4">
                <div class="bg-white rounded-lg p-5 shadow">
                    <h2 class="h6 font-weight-bold text-center mb-4">Total Problems</h2>

                    <!-- Progress bar 1 -->
                    <div class="progress mx-auto" data-value='{{$total_problems}}'>
<span class="progress-left">
                        <span class="progress-bar border-primary"></span>
          </span>
                        <span class="progress-right">
                        <span class="progress-bar border-primary"></span>
          </span>
                        <div
                            class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                            <div class="h2 font-weight-bold">{{$total_problems}}<sup class="small"></sup></div>
                        </div>
                    </div>
                    <!-- END -->

                    <!-- Demo info -->
                    <div class="row text-center mt-4">
                        <div class="col-6 border-right">
                            <div class="h4 font-weight-bold mb-0">{{$today_problems}}</div>
                            <span class="small text-gray">Today</span>
                        </div>
                        <div class="col-6">
                            <div class="h4 font-weight-bold mb-0">21</div>
                            <span class="small text-gray">Last week</span>
                        </div>
                    </div>
                    <!-- END -->
                </div>
            </div>


            <div class="col-xl-3 col-lg-6 mb-4">
                <div class="bg-white rounded-lg p-5 shadow">
                    <h2 class="h6 font-weight-bold text-center mb-4">Accepted
                        <Spent></Spent>
                    </h2>

                    <!-- Progress bar 2 -->
                    <div class="progress mx-auto" data-value='{{$accepted}}'>
          <span class="progress-left">
                        <span class="progress-bar border-success"></span>
          </span>
                        <span class="progress-right">
                        <span class="progress-bar border-success"></span>
          </span>
                        <div
                            class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                            <div class="h2 font-weight-bold">{{$accepted}}</div>
                        </div>
                    </div>
                    <!-- END -->

                    <!-- Demo info-->
                    <div class="row text-center mt-4">
                        <div class="col-6 border-right">
                            <div class="h4 font-weight-bold mb-0">{{$accepted_today}}</div>
                            <span class="small text-gray">Today</span>
                        </div>
                        <div class="col-6">
                            <div class="h4 font-weight-bold mb-0">14</div>
                            <span class="small text-gray">Last week</span>
                        </div>
                    </div>
                    <!-- END -->
                </div>
            </div>

            <div class="col-xl-3 col-lg-6 mb-4">
                <div class="bg-white rounded-lg p-5 shadow">
                    <h2 class="h6 font-weight-bold text-center mb-4">Average Problem Level</h2>

                    <!-- Progress bar 3 -->
                    <div class="progress mx-auto" data-value='{{$average_problem_level * 10}}'>
          <span class="progress-left">
                        <span class="progress-bar border-danger"></span>
          </span>
                        <span class="progress-right">
                        <span class="progress-bar border-danger"></span>
          </span>
                        <div
                            class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                            <div class="h2 font-weight-bold">{{$average_problem_level}}</div>
                        </div>
                    </div>
                    <!-- END -->

                    <!-- Demo info -->
                    <div class="row text-center mt-4">
                        <div class="col-6 border-right">
                            <div class="h4 font-weight-bold mb-0">3</div>
                            <span class="small text-gray">Last week</span>
                        </div>
                        <div class="col-6">
                            <div class="h4 font-weight-bold mb-0">4</div>
                            <span class="small text-gray">Last month</span>
                        </div>
                    </div>
                    <!-- END -->
                </div>
            </div>

            <div class="col-xl-3 col-lg-6 mb-4">
                <div class="bg-white rounded-lg p-5 shadow">
                    <h2 class="h6 font-weight-bold text-center mb-4">Completed By Yourself</h2>

                    <!-- Progress bar 4 -->
                    <div class="progress mx-auto" data-value='{{$completed_byYourself}}'>
          <span class="progress-left">
                        <span class="progress-bar" style="border-color: #64d5ca"></span>
          </span>
                        <span class="progress-right">
                        <span class="progress-bar" style="border-color: #64d5ca"></span>
          </span>
                        <div
                            class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                            <div class="h2 font-weight-bold">{{$completed_byYourself}}</div>
                        </div>
                    </div>
                    <!-- END -->

                    <!-- Demo info -->
                    <div class="row text-center mt-4">
                        <div class="col-6 border-right">
                            <div class="h4 font-weight-bold mb-0">{{$completed_byYourselfToday}}</div>
                            <span class="small text-gray">Today</span>
                        </div>
                        <div class="col-6">
                            <div class="h4 font-weight-bold mb-0">21</div>
                            <span class="small text-gray">Last week</span>
                        </div>
                    </div>
                    <!-- END -->
                </div>
            </div>






        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="wrap-bar">
                    <h3 style="margin-left: -80px" class="progress-linear-title">Average Total Time</h3>
                    <div class="progress-linear">
                        <div class="progress-linear-bar" style="width:{{$average_Total_Time * 1.2}}%; background:orange;">
                            <div class="progress-linear-value">{{$average_Total_Time}}m</div>
                        </div>
                    </div>
                </div>
                <div class="wrap-bar">

                    <h3 style="margin-left: -80px" class="progress-linear-title">Average Reading Time</h3>
                    <div class="progress-linear">
                        <div class="progress-linear-bar" style="width:{{$average_Reading_Time * 1.2}}%; background:#c602d8;">
                            <div class="progress-linear-value">{{$average_Reading_Time}}m</div>
                        </div>
                    </div>
                </div>
                <div class="wrap-bar">
                    <h3 style="margin-left: -80px" class="progress-linear-title">Average Thinking Time</h3>
                    <div class="progress-linear">
                        <div class="progress-linear-bar" style="width:{{$average_Thinking_Time * 1.2}}%; background:#d9534f;">
                            <div class="progress-linear-value">{{$average_Thinking_Time}}m</div>
                        </div>
                    </div>
                </div>
                <div class="wrap-bar">

                    <h3 style="margin-left: -80px" class="progress-linear-title">Average Coding Time</h3>
                    <div class="progress-linear">
                        <div class="progress-linear-bar" style="width:{{$average_Coding_Time * 1.2}}%; background:#00ff00;">
                            <div class="progress-linear-value">{{$average_Coding_Time}}m</div>
                        </div>
                    </div>
                </div>
                <div class="wrap-bar">

                    <h3 style="margin-left: -80px" class="progress-linear-title">Average Debug Time</h3>
                    <div class="progress-linear">
                        <div class="progress-linear-bar" style="width:{{$average_Debug_Time * 1.2}}%; background:yellow;">
                            <div class="progress-linear-value">{{$average_Debug_Time}}m</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
