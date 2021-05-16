<?php

namespace App\Http\Controllers;

use App\Models\Problem;
use Faker\Provider\DateTime;
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

class ProblemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        date_default_timezone_set('Asia/Kolkata');

    }

    function home()
    {
        $problems = auth()->user()->problems;
        $user = auth()->user();
        $total_problems = $problems->count();
        $dateToday = strtotime(date('y-m-d'));
        $first_problem = $problems->first()->created_at ?? '-';

        $difference = ceil(abs($dateToday - strtotime($user->created_at)) / 86400);
        $date = str_replace('/', '-', date("Y/m/d"));
        $today_problems_class = $problems->where('solvedOn', $date);
        $today_problems = $today_problems_class->count();
        $average_problems_per_day = (int)round($problems->count() / $difference);
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


        return view('home', compact('average_problems_per_day', 'difference', 'first_problem', 'user', 'average_Total_Time', 'average_Reading_Time', 'average_Thinking_Time', 'average_Coding_Time', 'average_Debug_Time', 'total_problems', 'today_problems', 'accepted', 'accepted_today', 'average_problem_level', 'completed_byYourself', 'completed_byYourselfToday'));
    }

    function calender()
    {
        return view('problem.calender');
    }

    function show_with_date($date)
    {
        $year = substr($date, 0, 4);
        $month = substr($date, 4, 2);
        $day = substr($date, 6, 2);
        $problems = auth()->user();
        $problems = Problem::where('user_id', $problems->id)->where('solvedOn', $year . '-' . $month . '-' . $day)->latest()->get();
        return view('problem.show_with_date', compact('month', 'year', 'day', 'problems'));
    }

    function create()
    {
        return view('problem.create1');
    }

    public function store(Request $request)
    {

        $data = $request->validate([
            'name' => 'required',
            'solvedOn' => ['required', 'date:yyyy-mm-dd'],
            'Status' => ['required', 'string'],
            'submitCount' => ['required',],
            'readingTime' => 'required',
            'thinkingTime' => 'required',
            'codingTime' => 'required',
            'debugTime' => 'required',
            'problemLevel' => ['required'],
            'byYourself' => ['required', 'string'],
            'Category' => '',
            'url' => ['required', 'url'],
            'code' => '',
            'codeForcesLevel' => 'required',

        ]);
        $totalTime = $data['readingTime'] + $data['thinkingTime'] + $data['codingTime'] + $data['debugTime'];
        $data['totalTime'] = $totalTime;
        auth()->user()->problems()->create($data);
        return \redirect('/date/' . str_replace("-", "", $data['solvedOn']));
    }

    public function show(Problem $problem)
    {
        $list = [
            ['head' => 'Problem Level', 'name' => 'problemLevel', 'mul' => 10, 'average' => 2],
            ['head' => 'Submit Count', 'name' => 'submitCount', 'mul' => 10, 'average' => 2],
            ['head' => 'Total Time', 'name' => 'totalTime', 'mul' => 1, 'average' => 2],

            ['head' => 'Reading Time', 'name' => 'readingTime', 'mul' => 1, 'average' => 2],
            ['head' => 'Thinking Time', 'name' => 'thinkingTime', 'mul' => 1, 'average' => 2],
            ['head' => 'Coding Time', 'name' => 'codingTime', 'mul' => 1, 'average' => 2],
            ['head' => 'Debug Time', 'name' => 'debugTime', 'mul' => 1, 'average' => 2],

        ];
        return view('problem.show', compact('problem', 'list'));
    }

    function list()
    {
        $problems = auth()->user()->problems()->latest()->paginate(5);

        return view('problem.list', compact('problems'));
    }

    function edit(Problem $problem)
    {

        return view('problem.edit', compact('problem'));
    }

    function update(Problem $problem)
    {
        $data = request()->validate([
            'name' => 'required',
            'solvedOn' => ['required', 'date:yyyy-mm-dd'],
            'Status' => ['required', 'string'],
            'submitCount' => ['required',],
            'readingTime' => 'required',
            'thinkingTime' => 'required',
            'codingTime' => 'required',
            'debugTime' => 'required',
            'problemLevel' => ['required'],
            'byYourself' => ['required', 'string'],
            'Category' => '',
            'url' => ['required', 'url'],
            'code' => '',
            'codeForcesLevel' => 'required',

        ]);
        auth()->user()->problems()->where('id', $problem->id)->update($data);
        return redirect('/problem/' . $problem->id);
    }

    function destroy(Problem $problem)
    {
        $problem->delete();
        return Redirect::back();
    }


}
