@extends('main_layouts.new_main')
@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end">
            <div class="col-md-9 ftco-animate pb-5">
                <h1 class="mb-0 bread">Blogs</h1>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2>Latest news from our blog</h2>
            </div>
        </div>
        <div class="row d-flex">
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="blog-single.html" class="block-20 rounded" style="background-image: url('images/image_1.jpg');">
                    </a>
                    <div class="text p-4">
                        <div class="meta mb-2">
                            <div><a href="#">April 07, 2020</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                        </div>
                        <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="blog-single.html" class="block-20 rounded" style="background-image: url('images/image_2.jpg');">
                    </a>
                    <div class="text p-4">
                        <div class="meta mb-2">
                            <div><a href="#">April 07, 2020</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                        </div>
                        <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="blog-single.html" class="block-20 rounded" style="background-image: url({{asset('main/images/image_3.jpg')}}');">
                    </a>
                    <div class="text p-4">
                        <div class="meta mb-2">
                            <div><a href="#">April 07, 2020</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                        </div>
                        <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="blog-single.html" class="block-20 rounded" style="background-image: url('images/image_1.jpg');">
                    </a>
                    <div class="text p-4">
                        <div class="meta mb-2">
                            <div><a href="#">April 07, 2020</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                        </div>
                        <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="blog-single.html" class="block-20 rounded" style="background-image: url('images/image_2.jpg');">
                    </a>
                    <div class="text p-4">
                        <div class="meta mb-2">
                            <div><a href="#">April 07, 2020</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                        </div>
                        <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="blog-single.html" class="block-20 rounded" style="background-image: url({{asset('main/images/image_3.jpg')}}');">
                    </a>
                    <div class="text p-4">
                        <div class="meta mb-2">
                            <div><a href="#">April 07, 2020</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                        </div>
                        <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection