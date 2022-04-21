<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    function checklogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password'  => 'required|alphaNum|min:3'
        ]);

        $user_data = array(
            'email'  => $request->get('email'),
            'password' => $request->get('password')
        );

        // $user = User::all();

        // if($user->password == $request->get('password'))
        // {
        //     // return redirect('main/successlogin');
        //     return redirect()->route("admin");
        // }
        // else
        // {
        //     return back()->with('error', 'Wrong Login Details');
        // }

        if(Auth::attempt($user_data))
        {
            // return redirect('main/successlogin');
            return redirect()->route("admin.home");
        }
        else
        {
            return back()->with('error', 'Wrong Login Details');
        }


    }

    // function successlogin()
    // {
    //     return view('admin.index');
    // }

    function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
