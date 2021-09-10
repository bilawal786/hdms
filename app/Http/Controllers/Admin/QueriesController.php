<?php

namespace App\Http\Controllers\Admin;

use App\Ac;
use App\Http\Controllers\Controller;
use App\Maintain;
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
    public function update(Request $request, $id){
        $query = Query::find($id);
        $query->service_date = $request->service_date;
        $query->mark = $request->mark;
        $query->place = $request->place;
        $query->next_maintain = $request->next_maintain;
        $query->update();
        $notification = array(
            'messege' => 'Ajouté avec succès!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function update1(Request $request, $id){
        $query = Query::find($id);
        $query->quantity = $request->quantity;
        if($request->installed){
            foreach($request->installed as $size)
            {
                $data[] = $size;
                $query->installed = json_encode($data);
            }
        }
        $query->update();
        $notification = array(
            'messege' => 'Ajouté avec succès!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function acstore(Request $request){
        $ac = new Ac();
        $ac->q_id = $request->q_id;
        $ac->place = $request->place;
        $ac->mark = $request->mark;
        $ac->installation = $request->installation;
        $ac->save();
        $notification = array(
            'messege' => 'Ajouté avec succès!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function history($id){
        $ac = Ac::find($id);
        $main = Maintain::where('ac_id', $id)->get();
        return view('admin.queries.history', compact('main', 'ac'));
    }
    public function maintainstore(Request $request){
        $maintain = new Maintain();
        $maintain->ac_id = $request->ac_id;
        $maintain->q_id = $request->q_id;
        $maintain->service_date = $request->service_date;
        $maintain->next_maintain = $request->next_maintain;
        $maintain->servicecomments = $request->servicecomments;
        $maintain->nextcomments = $request->nextcomments;
        $maintain->save();
        $notification = array(
            'messege' => 'Ajouté avec succès!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function historyedit($id){
        $history = Maintain::find($id);
        return view('admin.queries.historyedit', compact('history'));
    }
    public function historyupdate(Request $request, $id){
        $history = Maintain::find($id);
        $history->servicecomments = $request->servicecomments;
        $history->nextcomments = $request->nextcomments;
        $history->update();
        $notification = array(
            'messege' => 'Ajouté avec succès!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

}
