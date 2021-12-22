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
                                <form method="POST" id="contactForm">
                                    <div class="contact_msg"></div>
                                    <div class="row" style="padding-bottom: 15px;">
                                        <div class="col-lg-6 pull-right">
                                            <input id="name" type="text" class="form-control " name="name" placeholder="Your Name" required>
                                            <span class="text-danger" id="name-error"></span>
                                        </div>
                                        <div class="col-lg-6">
                                            <input id="email" type="email" placeholder="Your Email" class="form-control" name="" value="" required>
                                            <span class="text-danger" id="email-error"></span>
                                        </div>
                                    </div>
                                    <div class="row" style="padding-bottom: 15px;">
                                        <div class="col-lg-6 pull-right">
                                            <input id="phone" type="text" class="form-control col-lg-12" name="phone" placeholder="Phone" required>
                                            <span class="text-danger" id="phone-error"></span>
                                        </div>
                                        <div class="col-lg-6">
                                            <input id="job_position" type="text" class="form-control col-lg-12" name="job_position" placeholder="Job Position" required>
                                        <span class="text-danger" id="job_position-error"></span>
                                        </div>
                                    </div>

                                    <div class="row m-0" style="padding-bottom: 20px;">
                                        <textarea name="message" class="form-control col-lg-12" id="message" rows="8" placeholder="Message"></textarea>
                                        <span class="text-danger" id="message-error"></span>
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

<!--
<div class="row">
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <img src="./main/logo/logo1.png" class="img-logos">
            </div>
            <div class="col-md-4 col-sm-4">
                <img src="./main/logo/logo2.jpg" class="img-logos">
            </div>
            <div class="col-md-4 col-sm-4">
                <img src="./main/logo/logo1.png" class="img-logos">
            </div>

        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <img src="./main/logo/logo1.png" class="img-logos">
            </div>
            <div class="col-md-4 col-sm-4">
                <img src="./main/logo/logo2.jpg" class="img-logos">
            </div>
            <div class="col-md-4 col-sm-4">
                <img src="./main/logo/logo1.png" class="img-logos">
            </div>

        </div>
    </div>
    <div class="col-md-6 col-sm-6 bg-color">
        <div class="contact-form txt-align">
            <h2>Free consultation</h2>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <input type="text" name="myname" placeholder="Name" class="name-field">
                </div>
                <div class="col-md-6 col-sm-6">
                     <input type="email" name="myemail" placeholder="Email" class="email-field">
                </div>
            </div>
            <input type="text" name="mysubject" placeholder="Subject" class="subject-field"><br/>
            <textarea placeholder="Message" class="w-70"></textarea><br/>
            <button class="send-btn" type="button">Send</button>
        </div>
    </div>
</div>
 -->
<footer class="footer" style="padding: 2em 0 !important;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-2 pl-lg-5 mb-4 mb-md-0">
                <a href="{{route('about')}}"><h2 class="footer-heading">Kii-Wik</h2></a>
                <ul class="list-unstyled">
                    <li>About Us</li>
                    <li>Terms & Conditions</li>
                    <li>Privacy Policy</li>
                    <li>Blog</li>
                    <li>Contact Us</li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-2 pl-lg-5 mb-4 mb-md-0">
                <a href="{{route('faqs')}}"><h2 class="footer-heading">FAQs</h2></a>
                <ul class="list-unstyled">
                    <li>FAQs</li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-3 pl-lg-5 mb-4 mb-md-0">
                <a href="{{route('howitworks')}}"><h2 class="footer-heading">How It Works</h2></a>
                <ul class="list-unstyled">
                    <li>As Customer</li>
                    <li>As A Service Provider</li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-2 pl-lg-5 mb-4 mb-md-0">
                <a href="{{route('home', '#membership')}}"><h2 class="footer-heading">Memberships</h2></a>
                <ul class="list-unstyled">
                    <li> Freelancers</li>
                    <li>Companies</li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-2 pl-lg-5 mb-4 mb-md-0">
                <a href="{{route('categories')}}">
                <h2 class="footer-heading">Categories</h2>
                </a>
                <ul class="list-unstyled">
                    <li>Services</li>

                </ul>
            </div>
            {{-- <div class="col-md-6 col-lg-2 pl-lg-5 mb-4 mb-md-0">
                <h2 class="footer-heading">Make Money With Us</h2>
                <ul class="list-unstyled">
                    <li>Careers</li>
                </ul>
            </div> --}}
        </div>
    </div>
</footer>

<div class="modal fade" id="myModal" role="dialog">
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
</div>
<!-- loader -->
<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00"/>
    </svg>
</div>
<script>

    // cotact us form
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#contactForm').on('submit',function(event){
        event.preventDefault();
        $('#name-error').text('');
        $('#email-error').text('');
        // $('#subject-error').text('');
        $('#phone-error').text('');
        $('#job_position-error').text('');
        $('#message-error').text('');

        name = $('#name').val();
        email = $('#email').val();
        // subject = $('#subject').val();
        phone = $('#phone').val();
        job_position = $('#job_position').val();
        message = $('#message').val();

        $.ajax({
            url: "contact-form",
            type: "POST",
            data:{
                "_token": "{{ csrf_token() }}",
                name:name,
                email:email,
                // subject:subject,
                phone:phone,
                job_position:job_position,
                message:message,
            },
            success:function(response){
                if (response) {
                    $('.contact_msg').text(response.success).addClass('alert alert-success');
                    $("#contactForm")[0].reset();
                }
            },
            error: function(response) {
                // console.log(response)
                $('#name-error').text(response.responseJSON.errors.name);
                $('#email-error').text(response.responseJSON.errors.email);
                // $('#subject-error').text(response.responseJSON.errors.subject);
                $('#phone-error').text(response.responseJSON.errors.phone);
                $('#job_position-error').text(response.responseJSON.errors.job_position);
                $('#message-error').text(response.responseJSON.errors.message);
            }
        });
    });
    // end contact us form



    function initMap() {
        const input = document.getElementById("address");
        const autocomplete = new google.maps.places.Autocomplete(input);
        autocomplete.setFields(["address_components", "geometry", "icon", "name"]);
        autocomplete.addListener("place_changed", () => {
            const place = autocomplete.getPlace();
            if (!place.geometry) {
                window.alert("No details available for input: '" + place.name + "'");
                return;
            }
            $('#latitude').val(place.geometry.location.lat())
            $('#longitude').val(place.geometry.location.lng())
            console.log([$('#longitude'),$('#latitude')])
        });
    }

    $('.brand-carousel').owlCarousel({
  loop:true,
  margin:10,
  autoplay:true,
  responsive:{
    0:{
      items:1
    },
    600:{
      items:3
    },
    1000:{
      items:5
    }
  }
})
</script>
<script src="{{asset('main/js/jquery.min.js')}}"></script>
<script src="{{asset('main/js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('main/js/popper.min.js')}}"></script>
<script src="{{asset('main/js/bootstrap.min.js')}}"></script>
<script src="{{asset('main/js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('main/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('main/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('main/js/jquery.animateNumber.min.js')}}"></script>
<script src="{{asset('main/js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('main/js/jquery.timepicker.min.js')}}"></script>
<script src="{{asset('main/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('main/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('main/js/scrollax.min.js')}}"></script>
<script src="{{asset('main/js/main.js')}}"></script>
</body>
</html>
