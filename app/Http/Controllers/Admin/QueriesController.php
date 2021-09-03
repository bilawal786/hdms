<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Query;
use Illuminate\Http\Request;

class QueriesController extends Controller
{
    public function index(){
        $queries = Query::orderBy('id', 'DESC')->where('status', '0')->get();
        return view('admin.queries.index', compact('queries'));
    }
    public function view($id){
        $query = Query::find($id);
        return view('admin.queries.view', compact('query'));
    }
    public function status($id, $status){
        $query = Query::find($id);
        $query->status = $status;
        $query->update();
        $notification = array(
            'messege' => 'Mise à jour du statut!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
