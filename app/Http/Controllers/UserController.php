<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


function GetAverage($column, $problems)
{

    $array = $problems->pluck($column);
    $sum = 0;
    foreach ($array as $item) {
        $sum += $item;
    }
    if (count($array) == 0 || $sum == 0) {
        return 0;
    }
    return round($sum / count($array));
}


class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        date_default_timezone_set('Asia/Kolkata');

    }

    public function edit()
    {
        $user = auth()->user();
        return view('user.edit', compact('user'));
    }

    public function update()
    {
        $user_id = auth()->user()->id;

        $data = request()->validate([
            'name' => 'unique:users,name,' . $user_id . '|string|required',
            'email' => 'unique:users,email,' . $user_id . '|email|required',
            'codeforces_username' => 'unique:users,codeforces_username,' . $user_id . '|string|required',
            'password' => '',
            'password_confirmation' => ''
        ]);
        $pass_data = [];
        if ($data['password'] != null) {
            $err = [];
            $anyError = false;
            if (strlen($data['password']) < 5) {
                $err['password'] = 'Too Weak Password';
                $anyError = true;
            }
            if ($data['password_confirmation'] == null) {
                $err['password_confirmation'] = 'Password Confirmation Is Required';
                $anyError = true;
            }
            var_dump($err);
            if ($anyError) {
                return Redirect::back()->withErrors($err);
            }
            if ($anyError == false) {
                $pass_data['password'] = bcrypt($data['password']);
            }
        }
        auth()->user()->update([
            'name' => $data['name'],
            'email' => $data['email'],
            'codeforces_username' => $data['codeforces_username'],
        ], $pass_data);
        return \redirect('/');
    }

    function show($username)
    {
        if (is_numeric($username)) {
            $user = User::findOrFail($username);
        } else {
            $user = User::where('name', $username)->first();
        }
        if ($user == null) {
            User::findOrFail(-1);
        }
        $problems = $user->problems;
        $total_problems = $problems->count();
        $first_problem = $problems->first()->created_at ?? '-';
        $dateToday = strtotime(date('y-m-d'));
        $difference = ceil(abs($dateToday - strtotime($user->created_at)) / 86400);
        $date = str_replace('/', '-', date("Y/m/d"));
        $today_problems_class = $problems->where('solvedOn', $date);
        $today_problems = $today_problems_class->count();
        $average_problems_per_day = (int) round($today_problems / $difference);
        $accepted = $problems->where('Status', 'Accepted')->count();
        $accepted_today = $today_problems_class->where('Status', 'Accepted')->count();
//        dd($today_problems_class);
        $completed_byYourself = $problems->where('byYourself', 'Yes')->count();
        $completed_byYourselfToday = $today_problems_class->where('byYourself', 'Yes')->count();

        $average_problem_level = GetAverage('problemLevel', $problems,);
        $average_Total_Time = GetAverage('totalTime', $problems,);
        $average_Reading_Time = GetAverage('readingTime', $problems,);
        $average_Thinking_Time = GetAverage('thinkingTime', $problems,);
        $average_Coding_Time = GetAverage('codingTime', $problems,);
        $average_Debug_Time = GetAverage('debugTime', $problems,);


        return view('home', compact('average_problems_per_day','difference','first_problem', 'average_Total_Time', 'user', 'average_Reading_Time', 'average_Thinking_Time', 'average_Coding_Time', 'average_Debug_Time', 'total_problems', 'today_problems', 'accepted', 'accepted_today', 'average_problem_level', 'completed_byYourself', 'completed_byYourselfToday'));

    }
}
