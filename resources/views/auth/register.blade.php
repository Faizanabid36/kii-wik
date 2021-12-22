<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Register Page </title>
    <link rel="apple-touch-icon" href="{{ asset('../../../theme/app-assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon"
        href="{{ asset('../../../theme/app-assets/images/ico/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('../../../theme/app-assets/vendors/css/vendors.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('../../../theme/app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('../../../theme/app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('../../../theme/app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('../../../theme/app-assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('../../../theme/app-assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('../../../theme/app-assets/css/themes/semi-dark-layout.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('../../../theme/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('../../../theme/app-assets/css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('../../../theme/app-assets/css/pages/authentication.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('../../../theme/assets/css/style.css') }}">
</head>

<body
    class="vertical-layout vertical-menu-modern semi-dark-layout 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page"
    data-open="click" data-menu="vertical-menu-modern" data-col="1-column" data-layout="semi-dark-layout">
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="row flexbox-container">
                    <div class="col-xl-8 col-10 d-flex justify-content-center">
                        <div class="card bg-authentication rounded-0 mb-0">
                            <div class="row m-0">
                                <div class="col-lg-6 d-lg-block d-none text-center align-self-center pl-0 pr-3 py-0">
                                    <a href="/" style="width: inherit;">
                                        <img src="{{ asset('../../../theme/app-assets/images/pages/log.jpg') }}"
                                            alt="branding logo" style="width: inherit;">
                                    </a>
                                </div>
                                <div class="col-lg-6 col-12 p-0">
                                    <div class="card rounded-0 mb-0 p-2">
                                        <div class="card-header pt-50 pb-1">
                                            <div class="card-title">
                                                <h4 class="mb-0">Create Account</h4>
                                            </div>
                                        </div>
                                        <p class="px-2">Fill the below form to create a new account.</p><br>
                                        <div class="card-content">
                                            <div class="card-body pt-0">
                                                <form method="POST" action="{{ route('register') }}">
                                                    @csrf
                                                    <fieldset
                                                        class="form-label-group form-group position-relative has-icon-left">
                                                        <input id="name" type="text"
                                                            class="form-control @error('name') is-invalid @enderror"
                                                            name="name" value="{{ old('name') }}" required
                                                            autocomplete="name" autofocus>
                                                        @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                        <label for="name"
                                                            class="col-md-4 col-form-label">{{ __('Full Name') }}</label>
                                                    </fieldset>
                                                    <fieldset
                                                        class="form-label-group form-group position-relative has-icon-left">
                                                        <input id="phone" maxlength="16" type="text"
                                                            class=" allownumericwithoutdecimal form-control"
                                                            name="phone" value="{{ old('phone') }}" required>

                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                        <label for="role"
                                                            class="col-md-4 col-form-label">{{ __('Phone Number') }}</label>
                                                    </fieldset>
                                                    <fieldset
                                                        class="form-label-group form-group position-relative has-icon-left">
                                                        <select class="form-control" name="role" id="role">
                                                            <option value="user">User</option>
                                                            <option value="company">Company</option>
                                                            <option value="freelancer">Freelancer</option>
                                                        </select>

                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                        <label for="role"
                                                            class="col-md-4 col-form-label">{{ __('Select Role') }}</label>
                                                    </fieldset>
                                                    <fieldset
                                                        class="form-label-group form-group position-relative has-icon-left">
                                                        <input id="email" type="email" placeholder="Email"
                                                            class="form-control @error('email') is-invalid @enderror"
                                                            name="email" value="{{ old('email') }}" required
                                                            autocomplete="email">

                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                        <label for="email"
                                                            class="col-md-4 col-form-label">{{ __('E-Mail Address') }}</label>
                                                    </fieldset>
                                                    <fieldset
                                                        class="form-label-group form-group position-relative has-icon-left">
                                                        <input id="address" type="text" autocomplete="off"
                                                            class="form-control @error('address') is-invalid @enderror"
                                                            name="address" value="{{ old('address') }}" required>

                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                        <label for="address"
                                                            class="col-md-4 col-form-label">{{ __('Address') }}</label>
                                                    </fieldset>

                                                    <fieldset
                                                        class="form-label-group form-group position-relative has-icon-left">
                                                        <input id="password" type="password"
                                                            class="form-control @error('password') is-invalid @enderror"
                                                            name="password" required autocomplete="new-password">

                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                        <label for="password"
                                                            class="col-md-4 col-form-label">{{ __('Password') }}</label>
                                                    </fieldset>

                                                    <fieldset
                                                        class="form-label-group form-group position-relative has-icon-left">
                                                        <input id="password-confirm" type="password"
                                                            class="form-control" name="password_confirmation" required
                                                            autocomplete="new-password">

                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                        <label for="password-confirm"
                                                            class="col-md-4 col-form-label">{{ __('Confirm Password') }}</label>
                                                    </fieldset>
                                                    <input type="hidden" value="" name="latitude" id="latitude">
                                                    <input type="hidden" value="" name="longitude" id="longitude">
                                                    <a href="{{ route('login') }}"
                                                        class="btn btn-outline-primary float-left btn-inline mb-50">Login</a>
                                                    <button type="submit"
                                                        class="btn btn-primary float-right btn-inline mb-50">Register
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
    <!-- END: Content-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu17qERWXajr4_OudOEpuH73yHd92KYI8&callback=initMap&libraries=places&v=weekly" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{ asset('../../../theme/app-assets/vendors/js/vendors.min.js') }}"></script>
    <script src="{{ asset('../../../theme/app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('../../../theme/app-assets/js/core/app.js') }}"></script>
    <script src="{{ asset('../../../theme/app-assets/js/scripts/components.js') }}"></script>
    <script>
        function initMap() {
            const input = document.getElementById("address");
            const autocomplete = new google.maps.places.Autocomplete(input);
            autocomplete.setFields(["address_components", "geometry", "icon", "name"]);
            autocomplete.addListener("place_changed", () => {
                console.log('clicked')
                const place = autocomplete.getPlace();
                if (!place.geometry) {
                    window.alert("No details available for input: '" + place.name + "'");
                    return;
                }
                document.getElementById('latitude').value = place.geometry.location.lat()
                document.getElementById('longitude').value = place.geometry.location.lng()
            });
        }
        $(".allownumericwithoutdecimal").on("keypress keyup blur", function(event) {
            $(this).val($(this).val().replace(/[^\d].+/, ""));
            if ((event.which < 48 || event.which > 57)) {
                event.preventDefault();
            }
        });

    </script>
</body>

</html>
