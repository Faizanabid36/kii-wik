<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function Home()
    {
        return view('main.home');
    }
    public function About()
    {
        return view('main.about');
    }
    public function tandt()
    {
        return view('main.tandt');
    }
    public function pp()
    {
        return view('main.pp');
    }
    public function faqs()
    {
        return view('main.faqs');
    }
    public function blogs()
    {
        return view('main.blog');
    }
    public function contactus()
    {
        return view('main.contact');
    }
    public function howitworks()
    {
        return view('main.kiiwik');
    }


    public function Kiiwik()
    {
        return view('main.kiiwik');
    }
    public function career()
    {
        return view('main.career');
    }
    public function categories()
    {
        return view('main.categories');
    }
    public function privacyPolicy()
    {
        return view('main.privacy-policy');
    }
    public function termsConditions()
    {
        return view('main.terms-conditions');
    }
}
