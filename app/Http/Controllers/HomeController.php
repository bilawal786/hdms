<?php

namespace App\Http\Controllers;

use App\Query;
use App\User;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::where('role', '2')->count();
        $newqueries = Query::where('status', '0')->count();
        return view('home', compact('users'));
    }
}
