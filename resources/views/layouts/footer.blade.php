<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light">
    <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">
            COPYRIGHT &copy; <?= date('Y'); ?><a class="text-bold-800 grey darken-2" href="#" target="_blank">
                Kii-wik,</a>All rights Reserved</span><span class="float-md-right d-none d-md-block">
            Hand-crafted & Made with<i class="feather icon-heart pink"></i></span>
        <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
    </p>
</footer>
<!-- END: Footer-->


<!-- BEGIN: Vendor JS-->
<script src="{{asset('theme/app-assets/vendors/js/vendors.min.js')}}"></script>
<script src="{{asset('theme/app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
<script src="{{asset('theme/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js')}}"></script>
<script src="{{asset('theme/app-assets/vendors/js/pickers/pickadate/picker.js')}}"></script>
<script src="{{asset('theme/app-assets/vendors/js/pickers/pickadate/picker.date.js')}}"></script>
<!-- <script src="{{asset('../theme/app-assets/vendors/js/pickers/pickadate/extensions/dropzone.min.js')}}"></script> -->
<script src="{{asset('theme/app-assets/js/scripts/extensions/dropzone.min.js')}}"></script>
<script src="{{asset('theme/app-assets/vendors/js/editors/quill/katex.min.js')}}"></script>
<script src="{{asset('theme/app-assets/vendors/js/ui/prism.min.js')}}"></script>
<script src="{{asset('theme/app-assets/vendors/js/editors/quill/highlight.min.js')}}"></script>
<script src="{{asset('theme/app-assets/vendors/js/editors/quill/quill.min.js')}}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('theme/app-assets/vendors/js/ui/jquery.sticky.js')}}"></script>
<script src="{{asset('theme/app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>

<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{asset('theme/app-assets/js/core/app-menu.js')}}"></script>
<script src="{{asset('theme/app-assets/js/core/app.js')}}"></script>
<script src="{{asset('theme/app-assets/js/scripts/components.js')}}"></script>
<!-- END: Theme JS-->


<script src="{{asset('theme/app-assets/js/scripts/pages/app-chat.js')}}"></script>
<script src="{{asset('theme/app-assets/js/scripts/pages/account-setting.js')}}"></script>
<script src="{{asset('theme/app-assets/js/scripts/pages/user-profile.js')}}"></script>
<script src="{{asset('theme/app-assets/js/scripts/pages/app-user.js')}}"></script>
<script src="{{asset('theme/app-assets/js/scripts/pages/app-email.js')}}"></script>
<script src="{{asset('theme/app-assets/js/scripts/pages/app-todo.js')}}"></script>
<script src="{{asset('theme/app-assets/js/scripts/modal/components-modal.js')}}"></script>
<script src="{{asset('theme/app-assets/js/scripts/extensions/dropzone.js')}}"></script>
<script src="{{asset('theme/app-assets/js/scripts/cards/card-statistics.js')}}"></script>




@yield('footer_scripts')
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">

        <div class="modal-content">
            <div class="modal-header" style="background-color: #28b6f6 !important;">
                <h4 class="modal-title" id="myModalLabel4" style="color: white">Kia Kaam Krwana Chaty Hain?</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="padding: 26px;">
                <form enctype="multipart/form-data" method="POST" action="{{route('user.task.submit')}}">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <div class="controls">
                                    <label for="account-username">Task title</label>
                                    <input type="text" name="title" class="form-control" id="account-username"
                                           placeholder="Username" required
                                           data-validation-required-message="This username field is required">
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="accountTextarea">Describe your task in more detail</label>
                                <textarea class="form-control" name="description" id="accountTextarea" rows="3"
                                          placeholder="Description."></textarea>
                            </div>
                        </div>
                        <!-- limit file upload starts -->
                        <div class="row" style="display: contents;">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
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
                                            <input type="radio" name="type" value="physical">
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
                                    <input type="text" name="loc" class="form-control" id="address"
                                           placeholder="Location" required
                                           data-validation-required-message="This username field is required">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <div class="controls">
                                    <label for="account-username">Date</label>
                                    <input type="date" name="due_date" class="form-control"
                                           placeholder="Date" required
                                           data-validation-required-message="This username field is required">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <div class="controls">
                                    <label for="account-username">How many people do you need for your task?</label>
                                    <input type="number" name="people" class="form-control"
                                           placeholder="Taskers" required
                                           data-validation-required-message="This username field is required">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <div class="controls">
                                    <label for="account-username">What's your budget estimate?</label>
                                    <input type="number" name="budget" class="form-control"
                                           placeholder="Amount" required
                                           data-validation-required-message="This username field is required">
                                    <input type="hidden" value="" name="latitude" id="latitude">
                                    <input type="hidden" value="" name="longitude" id="longitude">
                                </div>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0" value="Get Quotes">
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
<script>
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
            document.getElementById('latitude').value= place.geometry.location.lat()
            document.getElementById('longitude').value= place.geometry.location.lng()
        });
    }
</script>


</body>
<!-- END: Body-->
</html>
