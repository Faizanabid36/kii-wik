@extends('main_layouts.new_main')
@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{URL::asset('main/images/careers.jpg')}}');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ftco-animate pb-5">
                    <h1 class="mb-0 bread">Profile Deletion</h1>
                </div>
            </div>
        </div>
    </section>





    <section class="ftco-section bg-light ftco-faqs">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2">
                    <h3>You want to delete your profile from KiiWik?</h3>
                    <p>If you want to delete your profile from Kiiwik please contact to <b>Admin</b> at <a href="mailto:admin@kii-wik.com">admin@kii-wik.com</a>
                    With the reference your account ID. Your account will be deleted from <b>KiiWik</b></p>
                </div>
            </div>
        </div>
    </section>
@endsection
