<?php

namespace App\Http\Controllers\Admin;

use App\GeneralSettings;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GeneralSettingsController extends Controller
{
    public function index(){
        $gs = GeneralSettings::find(1);
        return view('admin.generalsettings.index', compact('gs'));
    }
    public function store(Request $request){
        $gs = GeneralSettings::find(1);
        $gs->sitename = $request->sitename;
        $gs->address1 = $request->address1;
        $gs->address2 = $request->address2;
        $gs->email = $request->email;
        $gs->phone1 = $request->phone1;
        $gs->phone2 = $request->phone2;
        $gs->time1 = $request->time1;
        $gs->time2 = $request->time2;
        $gs->footer = $request->footer;
        $gs->facebook = $request->facebook;
        $gs->instagram = $request->instagram;

        if ($request->hasfile('logo')) {
            $image1 = $request->file('logo');
            $name = time() . 'logo' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'logo/';
            $image1->move($destinationPath, $name);
            $gs->logo = 'logo/' . $name;
        }
        $gs->update();
        $notification = array(
            'messege' => 'Ajouté avec succès!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
