@extends('main_layouts.new_main')
@section('content')

    <section class="hero-wrap hero-wrap-2" style="background-image: url(' {{URL::asset('main/images/HOW IT WORKS.jpg')}}');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ftco-animate pb-5">

                </div>
            </div>
        </div>
    </section>

<section class="ftco-section bg-light ftco-no-pt ftco-intro" >
  <div class="container">
    <div class="row justify-content-center  mb-3">
      <center>
      <div class="row  heading-section text-center ftco-animate" style="margin-top: 36px;">
        <img height="50px" src="{{asset('main/logo/user.png')}}">
        <h2 style="background: transparent;color: black;border: none;text-decoration-line: underline;text-decoration-color: #28b6f6;text-decoration-thickness: 4px;"> HOW IT WORKS USERS</h2>
      </div>
      </center>
    </div>
    <div class="row" id="user_work" >
      <div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
        <div class="d-block services  text-center" style="margin-top: 450px">
          <div class="icon d-flex align-items-center justify-content-center" style="margin-top: -252px;">
            <span ><img src="{{asset('main/images/Picture1.svg')}}" alt="" style="height: 336px;"></span>
          </div>
          <div class="media-body">
            <h3 class="heading">POST YOUR PROBLEM</h3>
            <p>Tell the Super Heroes what you need help with</p>
            <!-- <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="fa fa-chevron-right"></span><i class="sr-only">Read more</i></a> -->
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
        <div class="d-block services text-center" style="margin-top: 450px">
          <div class="icon d-flex align-items-center justify-content-center" style="margin-top: -252px;"><span ><img src="{{asset('main/images/Picture2.svg')}}" alt="" style="height: 336px;"></span>
          </div>
          <div class="media-body">
            <h3 class="heading">PICK YOUR SUPER HEROE</h3>
            <p>Choose the best offer for you</p>
            <!-- <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="fa fa-chevron-right"></span><i class="sr-only">Read more</i></a> -->
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
        <div class="d-block services text-center" style="margin-top: 450px ; ">
          <div class="icon d-flex align-items-center justify-content-center" style="margin-top: -252px;" ><span ><img src="{{asset('main/images/Picture3.svg')}}" alt="" style="height: 336px;"></span>
          </div>
          <div class="media-body">
            <h3 class="heading">AGREE ON THE PRICE</h3>
            <p>Set a budget for your problem</p>
            <!-- <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="fa fa-chevron-right"></span><i class="sr-only">Read more</i></a> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="ftco-section bg-light ftco-faqs">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 order-md-last">
                <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0" style="background-image:url({{asset('main/images/video.svg')}});">
                    <a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
                        <span class="fa fa-play"></span>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>


<section class="ftco-section bg-light ftco-no-pt ftco-intro" >
  <div class="container">
    <div class="row justify-content-center  mb-3">
      <center>
      <div class=" row heading-section text-center ftco-animate" style="margin-top: 36px;">
        <img height="50px" src="{{asset('main/logo/company.png')}}">
        <h2  style="background: transparent;color: black;border: none;text-decoration-line: underline;text-decoration-color: #28a745;text-decoration-thickness: 4px;">HOW IT WORKS SUPERHEROS</h2>
      </div>
      </center>
    </div>
    <div  class="row">
      <div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
        <div class="d-block services  text-center" style="margin-top: 450px">
          <div class="icon d-flex align-items-center justify-content-center" style="margin-top: -252px;">
            <span><img src="{{asset('main/images/shpic1.png')}}" alt="" style="height: 336px;"></span>
          </div>
          <div class="media-body">
            <h3 class="heading">REVIEW THE PROBLEMS BOARD</h3>
            <p>Select an interesting job offer for you</p>
            <!-- <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="fa fa-chevron-right"></span><i class="sr-only">Read more</i></a> -->
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
        <div class="d-block services text-center" style="margin-top: 450px">
          <div class="icon d-flex align-items-center justify-content-center" style="margin-top: -252px;">
            <span><img src="{{asset('main/images/shpic2.png')}}" alt="" style="height: 336px;"></span>
          </div>
          <div class="media-body">
            <h3 class="heading">MAKE AN OFFER</h3>
            <p>Put your super hero skills in action</p>
            <!-- <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="fa fa-chevron-right"></span><i class="sr-only">Read more</i></a> -->
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
        <div class="d-block services text-center" style="margin-top: 450px ; ">
          <div class="icon d-flex align-items-center justify-content-center" style="margin-top: -252px;">
            <span><img src="{{asset('main/images/shpic3.png')}}" alt="" style="height: 336px;"></span>
          </div>
          <div class="media-body">
            <h3 class="heading">EARN MONEY</h3>
            <p>Get a very good review and happy client</p>
            <!-- <a href="#" disabled class="btn-custom d-flex align-items-center justify-content-center"><span class="fa fa-chevron-right"></span><i class="sr-only">Read more</i></a> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="ftco-section bg-light ftco-faqs">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 order-md-last">
                <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0" style="background-image:url({{asset('main/images/video.svg')}});">
                    <a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
                        <span class="fa fa-play"></span>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection
