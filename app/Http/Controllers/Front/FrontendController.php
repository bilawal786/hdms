<?php

namespace App\Http\Controllers\Front;

use App\Content;
use App\GeneralSettings;
use App\Http\Controllers\Controller;
use App\Offers;
use App\Payment;
use App\Query;
use App\Testimonial;
use Illuminate\Http\Request;
use Mollie\Laravel\Facades\Mollie;

class FrontendController extends Controller
{
    public function userLogin(){
        return view('front.user.login');
    }
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
        $query->quantity = "1";
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
    public function paymentLink($link){
        $payment = Payment::where('link', $link)->first();

        if ($payment->type == "installment") {
            $apiKey = env("ALMA_KEY");
            $data = [
                "payment" => [
                    "purchase_amount" => $payment->price * 100,
                    "return_url" => route('payment.success', ['id' => $payment->id]),
                    "shipping_address" => [
                        "first_name" => $payment->user->name,
                        "last_name" => "",
                        "line1" => "GU",
                        "postal_code" => "97139",
                        "city" => "Guadelope",
                    ],
                    "locale" => "fr",
                ],

            ];
            $dataString = json_encode($data);

            $headers = [
                'Authorization: Alma-Auth ' . $apiKey,
                'Content-Type: application/json',
            ];

            $ch = curl_init();
            if(env("ALMA_ENV") == "sandbox"){
                curl_setopt($ch, CURLOPT_URL, 'https://api.sandbox.getalma.eu/v1/payments');
            }else{
                curl_setopt($ch, CURLOPT_URL, 'https://api.getalma.eu/v1/payments');
            }
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);

            $response1 = curl_exec($ch);
            $response = json_decode($response1);
            return redirect($response->url);

        } else if ($payment->type == "onetime") {
            $payment = Mollie::api()->payments->create([
                "amount" => [
                    "currency" => "GBP",
                    "value" => number_format($payment->price, 2) // You must send the correct number of decimals, thus we enforce the use of strings
                ],
                "description" => "Order #". $payment->id,
                "redirectUrl" => route('payment.success', ['id' => $payment->id]),
                "metadata" => [
                    "order_id" => $payment->id,
                ],
            ]);
            return redirect($payment->getCheckoutUrl(), 303);
        } else {
            dd("nothing");
        }
    }
    public function paymentSuccess($id){
        $payment = Payment::where('id', $id)->first();
        $payment->paymentstatus = 1;
        $payment->update();

        $query = Query::where('id', $payment->q_id)->first();
        $query->paymentstatus = 1;
        $query->update();

        return view('front.paymentsuccess', compact('query'));
    }
}
