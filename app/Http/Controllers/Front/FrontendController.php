<?php

namespace App\Http\Controllers\Front;

use App\Content;
use App\GeneralSettings;
use App\Http\Controllers\Controller;
use App\Offers;
use App\Query;
use App\Testimonial;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $gs = GeneralSettings::find(1);
        $content = Content::find(1);
        $testimonials = Testimonial::all();
        $offers = Offers::find(1);
        return view('front.index', compact('gs', 'content', 'testimonials', 'offers'));
    }
    public function query(Request $request){
        $query = new Query();
        $query->name = $request->name;
        $query->email = $request->email;
        $query->phone = $request->phone;
        $query->service = $request->service;
        $query->message = $request->message;
        $query->quantity = $request->quantity;
        $query->price = $request->price;
        if($request->installed){
            foreach($request->installed as $size)
            {
                $data[] = $size;
                $query->installed = json_encode($data);
            }
        }
        $query->save();
        $notification = array(
            'messege' => 'Votre requête est soumise avec succès!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
