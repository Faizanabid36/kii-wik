<?php

namespace App\Http\Controllers;

use App\Transaction;
use App\User;
use Illuminate\Http\Request;
use Session;
use Stripe;

class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {
        return view('stripe');
    }

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

	$data=[
            "amount" => 100 * $request->subscription_amount,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Kiiwik membership Payment."
        ];

	if($request->payment_type=='oxxo'){
		$data['payment_method_types']=['oxxo'];
		$res=\Stripe\PaymentIntent::create($data);
	}else{
		$res=Stripe\Charge::create ($data);
	}
        
        $user_id=auth()->user()->id;
        Transaction::create([
            'user_id'=>$user_id,
            'amount'=>$request->subscription_amount,
            'duration'=>$request->subscription_duration,
            'api_res'=>$res
        ]);
        User::where(['id'=>$user_id,])->update([
            'subscription_start_date'=>date('Y-m-d'),
            'subscription_end_date'=>date('Y-m-d',strtotime('now'.' + '.$request->subscription_duration.' months'))
        ]);

        Session::flash('success', 'Payment successful!');
        return back();
    }
}
