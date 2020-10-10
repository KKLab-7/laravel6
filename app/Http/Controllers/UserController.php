<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(Request $request)
    {
        return view('front.login',[
            'message' => $request->message
        ]);
    }

    public function login(Request $request)
    {
        $user = User::where('email', $request->email)
                    ->where('password', $request->password)
                    ->first();

        if (isset($user)) {
            session(['User'=>$user]);
            return redirect()->action('ProductController@index');
        } else {
            return redirect()->action('UserController@index',[
                'message' => 'ログインできませんでした。'
            ]);
        }
    }
}
