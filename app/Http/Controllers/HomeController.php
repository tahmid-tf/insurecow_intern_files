<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function index()
    {
//        return view('home');

        if(auth()->user()->admin == "u"){
            return redirect()->route('user');
        }

        if(auth()->user()->admin == "a"){
            return redirect()->route('admin');
        }

        abort(404);
    }
}
