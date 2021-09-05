<?php

namespace App\Http\Controllers;

use App\Payment;
use App\Query;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function queries(){
        $queries = Query::where('user_id', Auth::user()->id)->get();
        return view('user.queries', compact('queries'));
    }
    public function dashboard(){
        $queries = Query::where('user_id', Auth::user()->id)->get();
        $payments = Payment::orderby('created_at', 'DESC')->where('user_id', Auth::user()->id)->get();
        return view('front.user.dashboard', compact('queries', 'payments'));
    }
    public function queryView($id){
        $query = Query::where('id', $id)->where('user_id', Auth::user()->id)->first();
        return view('front.user.queryView', compact('query'));
    }
}
