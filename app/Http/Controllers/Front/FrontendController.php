<?php

namespace App\Http\Controllers\Front;

use App\Content;
use App\GeneralSettings;
use App\Http\Controllers\Controller;
use App\Offers;
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
}
