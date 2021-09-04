<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Payment;
use App\Query;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class QueriesController extends Controller
{
    public function index(){
        $queries = Query::orderBy('id', 'DESC')->where('status', '0')->get();
        return view('admin.queries.index', compact('queries'));
    }
    public function processing(){
        $queries = Query::orderBy('id', 'DESC')->where('status', '1')->get();
        return view('admin.queries.index', compact('queries'));
    }
    public function complete(){
        $queries = Query::orderBy('id', 'DESC')->where('status', '2')->get();
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
    public function customerStore(Request $request){
        $validator=$request->validate([
            'email' => 'required|string|email|max:255|unique:users',
        ]);

        $customer = new User();
        $customer->role = 2;
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->password = Hash::make($request->password);
        $customer->save();

        $query = Query::find($request->q_id);
        $query->user_id = $customer->id;
        $query->update();

        $notification = array(
            'messege' => 'Ajouté avec succès!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function paymentLink(Request $request){
        $payment = new Payment();
        $payment->user_id = $request->user_id;
        $payment->q_id = $request->q_id;
        $payment->price = $request->price;
        $payment->message = $request->message;
        $payment->type = $request->type;
        $payment->link = rand(0, 900000000);
        $payment->save();
        $notification = array(
            'messege' => 'Ajouté avec succès!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
