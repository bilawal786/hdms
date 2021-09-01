<?php

namespace App\Http\Controllers\Admin;

use App\Content;
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
    public function slider(){
        $content = Content::find(1);
        return view('admin.generalsettings.slider', compact('content'));
    }
    public function sliderstore(Request $request){
        $content = Content::find(1);

        if ($request->hasfile('slider1')) {
            $image1 = $request->file('slider1');
            $name = time() . 'slider' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'slider/';
            $image1->move($destinationPath, $name);
            $content->slider1 = 'slider/' . $name;
        }
        if ($request->hasfile('slider2')) {
            $image2 = $request->file('slider2');
            $name = time() . 'slider' . '.' . $image2->getClientOriginalExtension();
            $destinationPath = 'slider/';
            $image2->move($destinationPath, $name);
            $content->slider2 = 'slider/' . $name;
        }
        if ($request->hasfile('slider3')) {
            $image3 = $request->file('slider3');
            $name = time() . 'slider' . '.' . $image3->getClientOriginalExtension();
            $destinationPath = 'slider/';
            $image3->move($destinationPath, $name);
            $content->slider3 = 'slider/' . $name;
        }
        $content->update();
        $notification = array(
            'messege' => 'Ajouté avec succès!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function services(){
        $content = Content::find(1);
        return view('admin.generalsettings.services', compact('content'));
    }
    public function servicesstore(Request $request){
        $content = Content::find(1);
        $content->sh1 = $request->sh1;
        $content->sh2 = $request->sh2;
        $content->sh3 = $request->sh3;

        $content->sd1 = $request->sd1;
        $content->sd2 = $request->sd2;
        $content->sd3 = $request->sd3;

        if ($request->hasfile('simage1')) {
            $image1 = $request->file('simage1');
            $name = time() . 'service' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'service/';
            $image1->move($destinationPath, $name);
            $content->simage1 = 'service/' . $name;
        }
        if ($request->hasfile('simage2')) {
            $image2 = $request->file('simage2');
            $name = time() . 'service' . '.' . $image2->getClientOriginalExtension();
            $destinationPath = 'service/';
            $image2->move($destinationPath, $name);
            $content->simage2 = 'service/' . $name;
        }
        if ($request->hasfile('simage3')) {
            $image3 = $request->file('simage3');
            $name = time() . 'service' . '.' . $image3->getClientOriginalExtension();
            $destinationPath = 'service/';
            $image3->move($destinationPath, $name);
            $content->simage3 = 'service/' . $name;
        }

        if ($request->hasfile('sv1')) {
            $video1 = $request->file('sv1');
            $name = time() . 'video' . '.' . $video1->getClientOriginalExtension();
            $destinationPath = 'video/';
            $video1->move($destinationPath, $name);
            $content->sv1 = 'video/' . $name;
        }
        if ($request->hasfile('sv2')) {
            $video2 = $request->file('sv2');
            $name = time() . 'video' . '.' . $video2->getClientOriginalExtension();
            $destinationPath = 'video/';
            $video2->move($destinationPath, $name);
            $content->sv2 = 'video/' . $name;
        }
        if ($request->hasfile('sv3')) {
            $video3 = $request->file('sv3');
            $name = time() . 'video' . '.' . $video3->getClientOriginalExtension();
            $destinationPath = 'video/';
            $video3->move($destinationPath, $name);
            $content->sv3 = 'video/' . $name;
        }
        $content->update();
        $notification = array(
            'messege' => 'Ajouté avec succès!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
