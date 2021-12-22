@extends('main_layouts.new_main')
@section('content')


    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
<div class="hero-wrap js-fullheight" style="background-image: url({{asset('main/images/bg_1.jpg')}});" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
      <div class="col-md-11 ftco-animate ">
        <h1 class="mb-4" style="color: yellow">FIND YOUR HERO!</h1>
        <h1 class="mb-4">SAY GOODBYE</h1>
        <h1 class="mb-4">TO YOUR PROBLEMS</h1>
        <p>
          @if(isset(auth()->user()->id))
          @if(auth()->user()->role=='user')
          <a href="#" class="btn btn-primary mr-md-4 py-3 px-4" style="background-color:#0288d1 !important ; border: 2px solid white; " data-toggle="modal" data-target="#myModal">Post a Problem <i class="fa fa-edit" style="font-size:17px"></i>
            <span class="ion-ios-arrow-forward"></span>
          </a>
          @else
          <a href="{{route('company.earn.index')}}" class="btn btn-primary mr-md-4 py-3 px-4" style="background-color:#00bc58 !important; border: 2px solid white;">Earn Money<i class="fa fa-usd" style="font-size:17px" aria-hidden="true"></i>
            <span class="ion-ios-arrow-forward"></span>
          </a>
          @endif
          @else
          <a href="#" class="btn btn-primary mr-md-4 py-3 px-4" style="background-color:#0288d1 !important ; border: 2px solid white;" data-toggle="modal" data-target="#myModal">Post a Problem <i class="fa fa-edit" style="font-size:17px"></i>
            <span class="ion-ios-arrow-forward"></span>
          </a>
          <a href="{{route('company.earn.index')}}" class="btn btn-primary mr-md-4 py-3 px-4" style="background-color:#00bc58 !important; border: 2px solid white;">Earn Money <i class="fa fa-usd" style="font-size:17px" aria-hidden="true"></i>
            <span class="ion-ios-arrow-forward"></span>
          </a>
          @endif
        </p>
      </div>
    </div>
  </div>
</div>
{{-- <div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="    background-color: #b9deff">
        <h4 class="modal-title">Post a Problem</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>

      </div>
      <form enctype="multipart/form-data" method="POST" action="{{route('user.task.submit')}}">
        <div class="modal-body">
          @csrf
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <div class="controls">
                  <label for="account-username">Task title</label>
                  <input type="text" name="title" class="form-control" id="account-username" placeholder="Title" required data-validation-required-message="This title field is required">
                </div>
              </div>
            </div>
            <br>
            <br>
            <div class="col-12">
              <div class="form-group">
                <label for="accountTextarea">Describe your task in more detail</label>
                <textarea class="form-control pac-target-input" name="description" id="accountTextarea" rows="3" placeholder="Description."></textarea>
              </div>
            </div>
            <!-- limit file upload starts -->
            <div class="row" style="display: contents;">
              <div class="col-12">
                <div class="card">
                  <div class="card-header" style="background-color: #b9deff">
                    <h4 class="card-title">Describe your task in more detail</h4>
                  </div>
                  <div class="card-content col-12">
                    <div class="card-body" id="image-list">
                      <p class="card-text">
                        Upload Picture</p>
                      <input type="file" name="pic">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>What type of task is it?</label>
                <ul class="list-unstyled mb-0">
                  <li class="d-inline-block mr-2">
                    <fieldset>
                      <input type="radio" checked name="type" value="physical">
                      <i class="ficon feather icon-map-pin"></i>Physical
                      <div class="vs-radio-con"></div>
                    </fieldset>
                  </li>
                  <li class="d-inline-block mr-2">
                    <fieldset>
                      <input type="radio" name="type" value="online">
                      <i class="ficon feather icon-globe"></i>Online
                      <div class="vs-radio-con"></div>
                    </fieldset>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <div class="controls">
                  <label for="account-username">Location</label>
                  <input type="text" id="address" name="loc" class="form-control pac-target-input"  placeholder="Locations" required>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <div class="controls">
                  <label for="account-username">Date</label>
                  <input type="text" readonly id="due_date" name="due_date" class="form-control" placeholder="Date" required data-validation-required-message="This username field is required">
                </div>
              </div>
            </div>

            <input hidden type="number" name="people" class="form-control" placeholder="Taskers" required value="1" data-validation-required-message="This username field is required">

            <div class="col-12">
              <div class="form-group">
                <div class="controls">
                  <label for="account-username">What's your budget estimate?</label>
                  <input type="number" name="budget" class="form-control" placeholder="Amount" required data-validation-required-message="This username field is required">
                  <input type="hidden" value="73.5555" name="latitude" id="latitude">
                  <input type="hidden" value="39.33333" name="longitude" id="longitude">
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0" value="Get Offers">
        </div>
      </form>
    </div>
  </div>
</div> --}}

<section class="ftco-section bg-light ftco-no-pt ftco-intro" style="margin-top: 80px">
  <div class="container">
    <div class="row justify-content-center  mb-3">
      <div class="col-md-7 heading-section text-center ftco-animate" style="margin-top: 36px;">
        <h2>HOW IT WORKS</h2>
        <h5>GOODBYE TO YOUR PROBLEMS</h5>
      </div>
    </div>
    <div style="text-align: center;" >
        <button id="how_user_work" class="btn btn-primary" style="background: transparent;color: black;border: none;text-decoration-line: underline;text-decoration-color: #28b6f6;text-decoration-thickness: 4px;">USERS</button>
        <button id="how_hero_work" class="btn btn-success" style="background: transparent;color: black;border: none;text-decoration-line: underline;text-decoration-color: #28a745;text-decoration-thickness: 4px;">SUPERHEROS</button>
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
    <div id="hero_work" class="row" style="display: none;">
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

<!-- <section class="ftco-section bg-light ftco-no-pt ftco-intro" style="margin-top: 80px">
  <div class="container">
    <div class="row justify-content-center  mb-3">
      <div class="col-md-7 heading-section text-center ftco-animate" style="margin-top: 36px;">
        <h2 style="text-decoration: underline ;text-decoration-color: #28a745;text-decoration-thickness: 4px;">HOW IT WORKS SUPERHEROS
        </h2>
      </div>
    </div>

  </div>
</section> -->

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

<section class="ftco-section ftco-no-pt ftco-no-pb">
  <div class="container">
    <div class="row d-flex no-gutters">
      <div class="col-md-5 d-flex">
        <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0" style="background-image:url({{asset('main/images/mobiles.svg')}});">
        </div>
      </div>
      <div class="col-md-7 pl-md-5 py-md-5">
        <div class="heading-section pt-md-5">
          <h2 class="mb-4" style="text-align: center">Why Choose Us?</h2>
          <div class="mb-4" style="margin-bottom: 20px;">
            <button id="why_user_btn" class="btn btn-primary" style="background: transparent;color: black;border: none;text-decoration-line: underline;text-decoration-color: #28b6f6;text-decoration-thickness: 4px;">USERS BENEFITS</button>
            <button id="why_hero_work_btn" class="btn btn-success pull-right" style="background: transparent;color: black;border: none;text-decoration-line: underline;text-decoration-color: #28a745;text-decoration-thickness: 4px;">SUPERHEROS BENEFITS</button>
          </div>
        </div>
        <div id="user_choosebtn">
          <div class="row">
            <div class="col-md-4 services-2 w-100 d-flex">

              <div class="text pl-3">
                <img src="{{asset('main/images/new_icon/platform.png')}}" alt="" height="100px">
                <h5 style="text-align: center">FREE PLATFORM</h5>
              </div>
            </div>
            <div class="col-md-4 services-2 w-100 d-flex">

              <div class="text pl-3">
                <img src="{{asset('main/images/new_icon/your_hero.png')}}" alt="" height="100px">
                <h5 style="text-align: center">CHOOSE YOUR HERO</h5>
              </div>
            </div>
            <div class="col-md-4 services-2 w-100 d-flex">

              <div class="text pl-3">
                <img src="{{asset('main/images/new_icon/reliability-security-icon.svg')}}" alt="" height="100px">
                <h5 style="text-align: center">RELIABILITY</h5>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 services-2 w-100 d-flex">

              <div class="text pl-3">
                <img src="{{asset('main/images/new_icon/dollar.png')}}" alt="" height="100px">
                <h5 style="text-align: center">LOWER PRICE</h5>
              </div>
            </div>
            <div class="col-md-4 services-2 w-100 d-flex">

              <div class="text pl-3">
                <img src="{{asset('main/images/new_icon/problem.png')}}" alt="" height="100px">
                <h5 style="text-align: center">SOLVE YOUR PROBLEM</h5>

              </div>
            </div>
            <div class="col-md-4 services-2 w-100 d-flex">

              <div class="text pl-3">
                <img src="{{asset('main/images/new_icon/bookagain-buttonsvg.svg')}}" alt="" height="100px">
                <h5 style="text-align: center">BOOK AGAIN</h5>

              </div>
            </div>
          </div>
        </div>
        <div id="hero_choosebtn" style="display: none;">
          <div class="row">
            <div class="col-md-4 services-2 w-100 d-flex">

              <div class="text pl-3">
                <img src="{{asset('main/images/green/bossher.svg')}}" alt="" height="100px">
                <h4 style="text-align: center">Be your own Boss</h4>

              </div>
            </div>
            <div class="col-md-4 services-2 w-100 d-flex">

              <div class="text pl-3">
                <img src="{{asset('main/images/green/money.svg')}}" alt="" height="100px">
                <h4 style="text-align: center">Make money with your skills</h4>

              </div>
            </div>
            <div class="col-md-4 services-2 w-100 d-flex">

              <div class="text pl-3">
                <img src="{{asset('main/images/green/office.svg')}}" alt="" height="100px">
                <h4 style="text-align: center">No office needed</h4>

              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 services-2 w-100 d-flex">

              <div class="text pl-3">
                <img src="{{asset('main/images/green/recognizedher.svg')}}" alt="" height="100px">
                <h4 style="text-align: center">Get recognized</h4>

              </div>
            </div>
            <div class="col-md-4 services-2 w-100 d-flex">

              <div class="text pl-3">
                <img src="{{asset('main/images/green/viewhigh.svg')}}" alt="" height="100px">
                <h4 style="text-align: center">Increased exposure</h4>

              </div>
            </div>
            <div class="col-md-4 services-2 w-100 d-flex">

              <div class="text pl-3">
                <img src="{{asset('main/images/green/timesaver.svg')}}" alt="" height="100px">
                <h4 style="text-align: center">Save Time</h4>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="container">

</div>


<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center pb-5 mb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <h2>Got Super Hero Skills?</h2>
      </div>
    </div>
    <div class="row">
      <div class="brand-carousel  owl-carousel">

        <div class="single-logo">
          <img src="{{asset('main/icons/1.PNG')}}" alt="">
        </div>
        <div class="single-logo">
          <img src="{{asset('main/icons/2.PNG')}}" alt="">
        </div>
        <div class="single-logo">
          <img src="{{asset('main/icons/3.PNG')}}" alt="">
        </div>
        <div class="single-logo">
          <img src="{{asset('main/icons/4.PNG')}}" alt="">
        </div>
        <div class="single-logo">
          <img src="{{asset('main/icons/5.PNG')}}" alt="">
        </div>
        <div class="single-logo">
          <img src="{{asset('main/icons/6.PNG')}}" alt="">
        </div>
        <div class="single-logo">
          <img src="{{asset('main/icons/7.PNG')}}" alt="">
        </div>
        <div class="single-logo">
          <img src="{{asset('main/icons/8.PNG')}}" alt="">
        </div>
        <div class="single-logo">
          <img src="{{asset('main/icons/9.PNG')}}" alt="">
        </div>
        <div class="single-logo">
          <img src="{{asset('main/icons/10.PNG')}}" alt="">
        </div>
        <div class="single-logo">
          <img src="{{asset('main/icons/11.PNG')}}" alt="">
        </div>
        <div class="single-logo">
          <img src="{{asset('main/icons/12.PNG')}}" alt="">
        </div>
        <div class="single-logo">
          <img src="{{asset('main/icons/13.PNG')}}" alt="">
        </div>
        <div class="single-logo">
          <img src="{{asset('main/icons/14.PNG')}}" alt="">
        </div>
      </div>
    </div>
  </div>
</section>


<section class="ftco-counter" id="section-counter" style="background-color: #0572a4 !important">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
        <div class="block-18 text-center">
          <img src="{{asset('main/images/1.svg')}}" alt="" height="70px" style="margin-bottom: 5px ">
          <div class="text">
            <strong class="number" data-number="20.000">20.000</strong>
          </div>
          <div class="text">
            <span>USERS</span>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
        <div class="block-18 text-center">
          <img src="{{asset('main/images/4.svg')}}" alt="" height="50px" style="margin-bottom: 25px ">
          <div class="text">
            <strong class="number" data-number="45.000">0</strong>
          </div>
          <div class="text">
            <span>SUPER HEROES</span>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
        <div class="block-18 text-center">
          <img src="{{asset('main/images/2.svg')}}" alt="" height="63px" style="margin-bottom: 10px ">
          <div class="text">
            <strong class="number" data-number="43.000">0</strong>
          </div>
          <div class="text">
            <span>PROBLEMS REQUESTED
            </span>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
        <div class="block-18 text-center">
          <img src="{{asset('main/images/3.svg')}}" alt="" height="50px" style="margin-bottom: 25px ">

          <div class="text">
            <strong class="number" data-number="20.000">0</strong>
          </div>
          <div class="text">
            <span>PROBLEMS SOLVED
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- style="background-image: url('main/images/bg_2.jpg');" -->
<section class="ftco-section testimony-section">
  <div class="overlay"></div>
  <div class="container">
    <div class="row justify-content-center pb-5 mb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <h2>Happy Users and Super Heroes</h2>
      </div>
    </div>
    <div class="row ftco-animate">
      <div class="col-md-12">
        <div class="carousel-testimony owl-carousel ftco-owl">
          <div class="item">
            <div class="testimony-wrap py-4">
              <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
              <div class="text">
                <p class="mb-4">Finally a platform where I can find people to solve my problems at a fair price.
                </p>
                <div class="d-flex align-items-center">
                  <div class="user-img" style="background-image: url(main/images/persontest1.png)"></div>
                  <div class="pl-3">
                    <p class="name">Hugo Castro</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap py-4">
              <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
              <div class="text">
                <p class="mb-4"> I loved the possibility of compare service providers and chat before making my decision.</p>
                <div class="d-flex align-items-center">
                  <div class="user-img" style="background-image: url(main/images/persontest2.png)"></div>
                  <div class="pl-3">
                    <p class="name">Renta Rios</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap py-4">
              <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
              <div class="text">
                <p class="mb-4">Super easy to use and find a fast solution.</p>
                <div class="d-flex align-items-center">
                  <div class="user-img" style="background-image: url(main/images/persontest1.png)"></div>
                  <div class="pl-3">
                    <p class="name"> Sara Cuevas</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap py-4">
              <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
              <div class="text">
                <p class="mb-4">I love the possibility of making some extra Money with this app.</p>
                <div class="d-flex align-items-center">
                  <div class="user-img" style="background-image: url(main/images/persontest2.png)"></div>
                  <div class="pl-3">
                    <p class="name">Armando Vazquez</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap py-4">
              <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
              <div class="text">
                <p class="mb-4"> I have been offering laundry services from my own home, now I am saving money and making extra cash.</p>
                <div class="d-flex align-items-center">
                  <div class="user-img" style="background-image: url(main/images/persontest1.png)"></div>
                  <div class="pl-3">
                    <p class="name">Raul Gonzales</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap py-4">
              <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
              <div class="text">
                <p class="mb-4">I found many job opportunties for me during the weekends, this platform is fantastic.</p>
                <div class="d-flex align-items-center">
                  <div class="user-img" style="background-image: url(main/images/persontest1.png)"></div>
                  <div class="pl-3">
                    <p class="name">Alejandro Ortiz</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

    @if(!isset(auth()->user()->id) || auth()->user()->role=='freelancer')
<section class="ftco-section bg-light" id="membership">
  <div class="container">
    <div class="row justify-content-center pb-5 mb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <h2>MEMBERSHIPS </h2>
        <h4>CONVERT YOURSELF IN A SUPER HERO</h4>
      </div>
    </div>
    <div class="">
      <div class="row">
        <img height="50px" src="{{asset('main/logo/freelancer.png')}}">
        <h2>FREELANCER</h2>
      </div>
    </div>
    <div class="row">

      <div class="col-md-3 ftco-animate">
        <div class="block-7">
          {{-- <div class="img" style="background-image: url(main/images/bg_1.png);"></div> --}}
          <div class="text-center p-4">
            <span class="price"><sup>$</sup> <span class="number">399</span></span>
            <ul class="pricing-text mb-5">
              <li><span class="fa fa-check mr-2"></span>1 Month</li>
              <li> <br></li>
            </ul>
              @if(isset(auth()->user()->id))
                  <button id="freelancer1" onclick="openSubsriptionModel(399,1)" class="btn btn-primary d-block px-2 py-3" style="background-color:#00bc58 !important ; border: 2px solid white;">Get Started</button>
              @else
                  <a href="{{route('login')}}" class="btn btn-primary d-block px-2 py-3" style="background-color:#00bc58 !important ; border: 2px solid white;">Get Started</a>
              @endif
          </div>
        </div>
      </div>
      <div class="col-md-3 ftco-animate">
        <div class="block-7">
          {{-- <div class="img" style="background-image: url(main/images/bg_1.png);"></div> --}}
          <div class="text-center p-4">
            <span class="price"><sup>$</sup><span class="number">1047</span><sub style=" text-decoration: line-through;">$1197</sub></span>
            <ul class="pricing-text mb-5">
              <li><span class="fa fa-check mr-2"></span>3 Months</li>
              <li><span class="fa fa-check mr-2"></span>YOU SAVED UP $150</li>
            </ul>
              @if(isset(auth()->user()->id))
            <button id="freelancer2" onclick="openSubsriptionModel(1047,3)" class="btn btn-primary d-block px-2 py-3" style="background-color:#00bc58 !important ; border: 2px solid white;">Get Started</button>
              @else
                  <a href="{{route('login')}}" class="btn btn-primary d-block px-2 py-3" style="background-color:#00bc58 !important ; border: 2px solid white;">Get Started</a>
              @endif
          </div>
        </div>
      </div>
      <div class="col-md-3 ftco-animate">
        <div class="block-7">
          {{-- <div class="img" style="background-image: url(main/images/bg_1.png);"></div> --}}
          <div class="text-center p-4">
            <span class="price"><sup>$</sup><span class="number">2034</span><sub style=" text-decoration: line-through;">$2394</sub></span>
            <ul class="pricing-text mb-5">
              <li><span class="fa fa-check mr-2"></span>6 Months</li>
              <li><span class="fa fa-check mr-2"></span>YOU SAVED UP $360</li>
            </ul>
              @if(isset(auth()->user()->id))
            <button id="freelancer3"  onclick="openSubsriptionModel(2034,6)" class="btn btn-primary d-block px-2 py-3" style="background-color:#00bc58 !important ; border: 2px solid white;">Get Started</button>
              @else
                  <a href="{{route('login')}}" class="btn btn-primary d-block px-2 py-3" style="background-color:#00bc58 !important ; border: 2px solid white;">Get Started</a>
              @endif
          </div>
        </div>
      </div>
      <div class="col-md-3 ftco-animate">
        <div class="block-7">
          {{-- <div class="img" style="background-image: url(main/images/bg_1.png);"></div> --}}
          <div class="text-center p-4">
            <span class="price"><sup>$</sup><span class="number">3948</span><sub style=" text-decoration: line-through;">$4788</sub></span>
            <ul class="pricing-text mb-5">
              <li><span class="fa fa-check mr-2"></span>12 Months</li>
              <li><span class="fa fa-check mr-2"></span>YOU SAVED UP $840</li>
            </ul>
              @if(isset(auth()->user()->id))
                    <button id="freelancer4" onclick="openSubsriptionModel(3948,12)" class="btn btn-primary d-block px-2 py-3" style="background-color:#00bc58 !important ; border: 2px solid white;">Get Started</button>
              @else
                  <a href="{{route('login')}}" class="btn btn-primary d-block px-2 py-3" style="background-color:#00bc58 !important ; border: 2px solid white;">Get Started</a>
              @endif
          </div>
        </div>
      </div>

    </div>
  </div>

</section>
    @endif
    @if(!isset(auth()->user()->id) || auth()->user()->role=='company')
<section class="ftco-section bg-light" id="subscription-section">
  <div class="container">

    <div class="">
      <div class="row">
        <img height="50px" src="{{asset('main/logo/company.png')}}">
        <h2>SUPER COMPANY</h2>
      </div>
    </div>
    <div class="row">

      <div class="col-md-3 ftco-animate">
        <div class="block-7">
          {{-- <div class="img" style="background-image: url(main/images/bg_1.png);"></div> --}}
          <div class="text-center p-4">
            <span class="price"><sup>$</sup> <span class="number">799</span></span>
            <ul class="pricing-text mb-5">
              <li><span class="fa fa-check mr-2"></span>1 Month</li>
              <li> <br></li>
            </ul>
              @if(isset(auth()->user()->id))
            <button id="company1" onclick="openSubsriptionModel(799,1)" class="btn btn-primary d-block px-2 py-3" style="background-color:darkgreen !important ; border: 2px solid white;">Get Started</button>
              @else
                  <a href="{{route('login')}}" class="btn btn-primary d-block px-2 py-3" style="background-color:#00bc58 !important ; border: 2px solid white;">Get Started</a>
              @endif
          </div>
        </div>
      </div>
      <div class="col-md-3 ftco-animate">
        <div class="block-7">
          {{-- <div class="img" style="background-image: url(main/images/bg_1.png);"></div> --}}
          <div class="text-center p-4">
            <span class="price"><sup>$</sup><span class="number">2097</span><sub style=" text-decoration: line-through;">$2397</sub></span>
            <ul class="pricing-text mb-5">
              <li><span class="fa fa-check mr-2"></span>3 Months</li>
              <li><span class="fa fa-check mr-2"></span>YOU SAVED UP $300</li>
            </ul>
              @if(isset(auth()->user()->id))
                <button id="company2" onclick="openSubsriptionModel(2097,3)" class="btn btn-primary d-block px-2 py-3" style="background-color:darkgreen !important ; border: 2px solid white;">Get Started</button>
              @else
                  <a href="{{route('login')}}" class="btn btn-primary d-block px-2 py-3" style="background-color:#00bc58 !important ; border: 2px solid white;">Get Started</a>
              @endif
          </div>
        </div>
      </div>
      <div class="col-md-3 ftco-animate">
        <div class="block-7">
          {{-- <div class="img" style="background-image: url(main/images/bg_1.png);"></div> --}}
          <div class="text-center p-4">
            <span class="price"><sup>$</sup><span class="number">4074</span><sub style=" text-decoration: line-through;">$4794</sub></span>
            <ul class="pricing-text mb-5">
              <li><span class="fa fa-check mr-2"></span>6 Months</li>
              <li><span class="fa fa-check mr-2"></span>YOU SAVED UP $720</li>
            </ul>
              @if(isset(auth()->user()->id))
                <button id="company3" onclick="openSubsriptionModel(4074,6)" class="btn btn-primary d-block px-2 py-3" style="background-color:darkgreen !important ; border: 2px solid white;">Get Started</button>
              @else
                  <a href="{{route('login')}}" class="btn btn-primary d-block px-2 py-3" style="background-color:#00bc58 !important ; border: 2px solid white;">Get Started</a>
              @endif
          </div>
        </div>
      </div>
      <div class="col-md-3 ftco-animate">
        <div class="block-7">
          {{-- <div class="img" style="background-image: url(main/images/bg_1.png);"></div> --}}
          <div class="text-center p-4">
            <span class="price"><sup>$</sup><span class="number">7908</span><sub style=" text-decoration: line-through;">$9588</sub></span>
            <ul class="pricing-text mb-5">
              <li><span class="fa fa-check mr-2"></span>12 Months</li>
              <li><span class="fa fa-check mr-2"></span>YOU SAVED UP $1680</li>
            </ul>
              @if(isset(auth()->user()->id))
                <button id="company4" onclick="openSubsriptionModel(7908,12)" class="btn btn-primary d-block px-2 py-3" style="background-color:darkgreen !important ; border: 2px solid white;">Get Started</button>
              @else
                  <a href="{{route('login')}}" class="btn btn-primary d-block px-2 py-3" style="background-color:#00bc58 !important ; border: 2px solid white;">Get Started</a>
              @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    @endif
    @if(isset(auth()->user()->id))
<div class="modal fade" id="freelancer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="margin-left: 25%;margin-right: 25%;max-width: 100%;">
    <div class="modal-content">
      <div class="modal-body">
          <form id="frm_subsription" action="{{ route('stripe.post') }}" method="post" class="require-validation"
                data-cc-on-file="false"
                data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                id="payment-form-1">
          @csrf
              <input type="hidden" name="subscription_amount" id="subscription_amount">
              <input type="hidden" name="subscription_duration" id="subscription_duration">
          <div class="input-group" style="padding-bottom: 15px;">
            <input type="text" required class="form-control" value="{{ auth()->user()->name }}" name="name" placeholder="Your Name">
          </div>
          <div class="input-group" style="padding-bottom: 15px;">
            <input type="email" required class="form-control" value="{{ auth()->user()->email }}" name="email" placeholder="Your Email">
          </div>
          <div class="input-group" style="padding-bottom: 15px;">
            <input type="text" maxlength="16" required class="form-control card-number" placeholder="Card Numebr">
          </div>
          <div class="input-group" style="padding-bottom: 15px;">
            <input type="text" maxlength="3" required class="form-control card-cvc" placeholder="CVC">
          </div>
          <div class="input-group" style="padding-bottom: 15px;">
            <select class="form-control card-expiry-month" required>
              <option selected disabled>Select Expiry Month</option>
              <option value="01">January</option>
              <option value="02">Febuary</option>
              <option value="03">March</option>
              <option value="04">April</option>
              <option value="05">May</option>
              <option value="06">June</option>
              <option value="07">July</option>
              <option value="08">August</option>
              <option value="09">September</option>
              <option value="10">October</option>
              <option value="11">November</option>
              <option value="12">December</option>
            </select>
          </div>
	<div class="input-group" style="padding-bottom: 15px;">
            <select name="payment_type" class="form-control payment-method-type" required>
              <option value="card" selected>Pay With Stripe</option>
              <option value="oxxo">Pay With OXXO</option>
             </select>
          </div>

          <div class="input-group card-expiry-year" style="padding-bottom: 15px;">
            <select class="form-control" required>
              <?php $year = date('Y'); ?>
              @for($i= $year; $i < $year +5; $i++) <option value="{{$i}}">{{$i}}</option>
                @endfor
            </select>
          </div>

      </div>
        <div class='form-row row'>
            <div class='col-md-12 error form-group' style="display: none">
                <div class='alert-danger alert'>Please correct the errors and try
                    again.</div>
            </div>
        </div>
        <div class="modal-footer">
        <button id="submits" type="submit" class="btn btn-primary d-block px-2 py-3" style="background-color:#00bc58 !important ;">Submit </button>
        <button type="button" class="btn btn-secondary d-block px-2 py-3" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>
    @endif
<style>
  .owl-carousel .owl-item img {
    width: 50% !important;
  }
</style>

<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script type="text/javascript">
    $(function() {
$('#due_date').datepicker('setStartDate', new Date())


        var $form         = $(".require-validation");
        $('form.require-validation').bind('submit', function(e) {
            var $form         = $(".require-validation"),
                inputSelector = ['input[type=email]', 'input[type=password]',
                    'input[type=text]', 'input[type=file]',
                    'textarea'].join(', '),
                $inputs       = $form.find('.required').find(inputSelector),
                $errorMessage = $form.find('div.error'),
                valid         = true;
            $errorMessage.hide();

            $('.has-error').removeClass('has-error');
            $inputs.each(function(i, el) {
                var $input = $(el);
                if ($input.val() === '') {
                    $input.parent().addClass('has-error');
                    $errorMessage.show();
                    e.preventDefault();
                }
            });

            if (!$form.data('cc-on-file')) {
                e.preventDefault();
                Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                Stripe.createToken({
                    number: $('.card-number').val(),
                    cvc: $('.card-cvc').val(),
                    exp_month: $('.card-expiry-month option:selected').val(),
                    exp_year: $('.card-expiry-year option:selected').val()
                }, stripeResponseHandler);
            }

        });

        function stripeResponseHandler(status, response) {
            if (response.error) {
                $('.error')
                    .show()
                    .find('.alert')
                    .text(response.error.message);
            } else {
                // token contains id, last4, and card type
                var token = response['id'];
                // insert the token into the form so it gets submitted to the server
                //$form.find('input[type=text]').empty();
                $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                myFunction()

            }
        }

    });
</script>

<script>
  $("#how_user_work").click(function() {
    $("#user_work").show();
    $("#hero_work").hide();
  });
  $("#how_hero_work").click(function() {
    $("#user_work").hide();
    $("#hero_work").show();
  });

function openSubsriptionModel(amnt,duration){
    $('#subscription_amount').val(amnt)
    $('#subscription_duration').val(duration)
    $("#freelancer").modal('toggle');
}
  /*$("#freelancer1, #freelancer2, #freelancer3, #freelancer4").click(function() {
    $("#freelancer").modal('toggle');
  });
  $("#company1, #company2, #company3, #company4").click(function() {
    $("#company").modal('toggle');
  });*/
  $("#why_user_btn").click(function() {
    $("#user_choosebtn").show();
    $("#hero_choosebtn").hide();
  });
  $("#why_hero_work_btn").click(function() {
    $("#user_choosebtn").hide();
    $("#hero_choosebtn").show();
  });
  function myFunction() {
      document.getElementById("frm_subsription").submit();
  }
</script>

@endsection
