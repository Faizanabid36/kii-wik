@extends('main_layouts.new_main')
@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end">
            <div class="col-md-9 ftco-animate pb-5">
                <h1 class="mb-0 bread">Contact us</h1>
            </div>
        </div>
    </div>
</section>
<section class="row flexbox-container">
    <div class="col-xl-12 col-12 d-flex justify-content-center">
        <div class="card bg-authentication rounded-0 mb-0">
            <div class="row m-0">
                <div class="col-lg-6 d-lg-block d-none text-center align-self-center px-1 py-0">
                    <img src="{{asset('theme/app-assets/images/pages/log.jpg')}}" alt="branding logo" style="width: inherit;">
                </div>
                <div class="col-lg-6 col-12 p-0">
                    <div class="card rounded-0 mb-0" style="border: 0px;">
                        <h4 class="mb-0" style="text-align: center;padding: 10px;">Free Consultation</h4>
                        <div class="card-content">
                            <div class="card-body pt-1">
                                <form method="POST" action="login">
                                    @csrf
                                    <div class="row" style="padding-bottom: 15px;">
                                        <div class="col-lg-6 pull-right">
                                            <input id="name" type="text" class="form-control " name="name" placeholder="Your Name" required autofocus>
                                        </div>
                                        <div class="col-lg-6">
                                            <input id="email" type="email" placeholder="Your Email" class="form-control" name="" value="" required>
                                        </div>
                                    </div>
                                    <div class="row m-0" style="padding-bottom: 15px;">
                                        <input id="subject" type="text" class="form-control col-lg-12" name="subject" placeholder="Subject" value="" required autofocus>
                                    </div>
                                    <div class="row m-0" style="padding-bottom: 20px;">
                                        <textarea name="description" class="form-control col-lg-12" id="description" rows="8" placeholder="Message"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary float-right btn-inline">Submit</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection