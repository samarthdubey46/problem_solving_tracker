<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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
            'name' => 'required|string|max:255',
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
}
