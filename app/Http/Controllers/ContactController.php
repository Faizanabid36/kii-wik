<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request) {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'job_position' => 'required',
//            'subject' => 'required',
            'message' => 'required',
        ]);


        Contact::create([
            'name'          => $request->name,
            'email'         => $request->email,
            'phone'         => $request->phone,
            'job_position'  => $request->job_position,
            'subject'       => '',
            'message'       => $request->message,
        ]);

        // sending email to customer
        Mail::send('mail_templates.contact-us-customer', ['request' => $request], function ($m) use ($request) {
            $m->from(env('MAIL_USERNAME'), 'KiiWik');
            $m->to($request->email, $request->name)->subject('Thank You For Contacting Us.');
        });

        // sending email to admin
        Mail::send('mail_templates.contact-us-admin', ['request' => $request], function ($m) use ($request) {
            $m->from(env('MAIL_USERNAME'), 'KiiWik');
            $m->to(env('MAIL_USERNAME'), 'KiiWik')->subject('Contact Us Enquiry.');
        });

        return response()->json([ 'success'=> 'Your query is successfully submitted!']);

    }
}
