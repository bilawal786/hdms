<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Payment;
use App\Sponser;
use App\User;
use App\Query;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        $customers = User::orderby('created_at', 'DESC')->where('role', '=', '2')->get();
        return view('admin.customers.index', compact('customers'));
    }
    public function edit($id){
        $customer = User::find($id);
        return view('admin.customers.edit', compact('customer'));
    }

    public function delete($id){
         $queries = Query::where('user_id', $id)->get();
         $queries->each->delete();
        $customer = User::find($id);
        $customer->delete();

        return redirect()->back();
    }
    public function update(Request $request, $id){
        $customer = User::find($id);
        $customer->name = $request->name;
        $customer->phone = $request->phone;
        $customer->points = $request->points;
        $customer->update();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->route('customers.index')->with($notification);
    }
    public function payments(){
        $payments = Payment::orderby('created_at', 'DESC')->get();
        return view('admin.customers.payments', compact('payments'));
    }
    public function sponsership(){
        $sponsership = Sponser::orderby('created_at', 'DESC')->get();
        return view('admin.customers.sponsership', compact('sponsership'));
    }
    public function paymentdelete($id){
        $payment = Payment::find($id);
        $payment->delete();
        $notification = array(
            'messege' => 'Supreme!',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    }
}
