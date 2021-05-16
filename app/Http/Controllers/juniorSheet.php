<?php

namespace App\Http\Controllers;

use App\Models\Problem;
use App\Models\User;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class juniorSheet extends Controller
{

    function juniorSheet()
    {
        return view('JuniorSheet.category');
    }

    function juniorSheetApi($email)
    {
        $user = User::where('email', '=', $email)->first();
        if ($user == null) {
            return response('No User With This Email', 404);
        }
        $array = [];
//        {
//            'id': 201,
//        'Name': 'Digital Counter',
//        'code': '495',
//        'level': 'A',
//        'url': 'http://codeforces.com/contest/495/problem/A',
//    },
        $problems = $user->problems;
        for ($i = 0; $i < count($problems); $i++) {
            $item = $problems[$i];
            $key = $item['code'] . $item['codeForcesLevel'];
            $temp = ['id' => $item['id'],'code' => $item['code'], 'Name' => $item['name'], 'level' => $item['codeForcesLevel'], 'status' => $item['Status'],];
            if (array_key_exists($key, $array)) {
                if ($item['verdict'] == 'OK') {
                    $array[$key] = $temp;
                }
            } else {
                $array[$key] = $temp;
            }
        }
        return $array;

    }

    function getProblemsSolved($username)
    {
        $url = 'https://codeforces.com/api/user.status?handle=' . $username . '&from=1&count=4000';
        $res = Http::get($url);
        $body = $res->json();
        $keys = [];
        if ($body['status'] == 'OK') {
            for ($i = 0; $i < count($body['result']); $i++) {
                $item = $body['result'][$i];
                $key = $item['contestId'] . $item['problem']['index'];
                $temp = ['code' => $item['contestId'], 'Name' => $item['problem']['name'], 'level' => $item['problem']['index'], 'status' => $item['verdict'],];
                if (array_key_exists($key, $keys)) {
                    if ($item['verdict'] == 'OK') {
                        $keys[$key] = $temp;
                    }
                } else {
                    $keys[$key] = $temp;
                }
            }
        }
        return $keys;
    }
}
