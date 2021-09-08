<?php

namespace App\Http\Controllers;

use App\Ac;
use App\Maintain;
use App\Payment;
use App\Query;
use App\Sponser;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function queries(){
        $queries = Query::where('user_id', Auth::user()->id)->get();
        return view('user.queries', compact('queries'));
    }
    public function dashboard(){
        $user = Auth::user();
        $queries = Query::where('user_id', Auth::user()->id)->get();
        $payments = Payment::orderby('created_at', 'DESC')->where('user_id', Auth::user()->id)->get();
        return view('front.user.dashboard', compact('queries', 'payments', 'user'));
    }
    public function queryView($id){
        $query = Query::where('id', $id)->where('user_id', Auth::user()->id)->first();
        return view('front.user.queryView', compact('query'));
    }
    public function queryStatus($id, $status){
        $query = Query::find($id);
        $query->customerstatus = $status;
        $query->update();
        $notification = array(
            'messege' => 'Mise à jour du statut!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function profileupdate(Request $request){
        $id = Auth::user();
        $user = User::where('id', $id->id)->first();
        $user->name = $request->name;
        $user->phone = $request->phone;


        if ($request->hasfile('photo')) {
            $image1 = $request->file('photo');
            $name = time() . 'profile' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'profile/';
            $image1->move($destinationPath, $name);
            $user->photo = 'profile/' . $name;
        }

        if ($request->oldpassword){
            $oldpass = $request->oldpassword;
            $pass = $user->password;
            if (Hash::check($oldpass , $pass)) {
                $user->password = Hash::make($request->newpassword);
                $user->save();
                Auth::logout();
                $notification = array(
                    'messege'=>'Le mot de passe a été changé avec succès ! Connectez-vous maintenant avec votre nouveau mot de passe',
                    'alert-type'=>'success'
                );
                return Redirect()->route('user.login')->with($notification);
            }else{
                $notification=array(
                    'messege'=>'Lancien mot de passe ne correspond pas!',
                    'alert-type'=>'error'
                );
                return Redirect()->back()->with($notification);
            }
        }


        $user->update();

        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function sponsershipStore(Request $request){
        $sponsership = new Sponser();
        $sponsership->user_id = Auth::user()->id;
        $sponsership->name = $request->fname;
        $sponsership->email = $request->lname;
        $sponsership->phone = $request->phone;
        $sponsership->save();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function history($id){
        $ac = Ac::find($id);
        $main = Maintain::where('ac_id', $id)->get();
        return view('front.user.history', compact('main', 'ac'));
    }
}
