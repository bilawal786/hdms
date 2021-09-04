<?php

namespace App\Http\Controllers;

use App\Query;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function queries(){
        $queries = Query::where('user_id', Auth::user()->id)->get();
        return view('user.queries', compact('queries'));
    }
}
