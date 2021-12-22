<footer class="footer footer-static footer-light">
    <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">
            COPYRIGHT &copy; 2020<a class="text-bold-800 grey darken-2" href="#" target="_blank">
                Kii-wik,</a>All rights Reserved</span><span class="float-md-right d-none d-md-block">
            Hand-crafted & Made with<i class="feather icon-heart pink"></i></span>
        <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
    </p>
</footer>
<!-- END: Footer-->


<!-- BEGIN: Vendor JS-->
@yield('footer_scripts')

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
<script src="{{asset('theme/app-assets/vendors/js/vendors.min.js')}}"></script>
<script src="{{asset('theme/app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
<script src="{{asset('theme/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js')}}"></script>
<script src="{{asset('theme/app-assets/vendors/js/pickers/pickadate/picker.js')}}"></script>
<script src="{{asset('theme/app-assets/vendors/js/pickers/pickadate/picker.date.js')}}"></script>
<!-- <script src="{{asset('theme/app-assets/vendors/js/pickers/pickadate/extensions/dropzone.min.js')}}"></script> -->
<script src="{{asset('theme/app-assets/vendors/js/extensions/dropzone.min.js')}}"></script>
<script src="{{asset('theme/app-assets/vendors/js/editors/quill/katex.min.js')}}"></script>
<script src="{{asset('theme/app-assets/vendors/js/ui/prism.min.js')}}"></script>
<script src="{{asset('theme/app-assets/vendors/js/editors/quill/highlight.min.js')}}"></script>
<script src="{{asset('theme/app-assets/vendors/js/editors/quill/quill.min.js')}}"></script>




<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{asset('theme/app-assets/js/core/app-menu.js')}}"></script>
<script src="{{asset('theme/app-assets/js/core/app.js')}}"></script>
<script src="{{asset('theme/app-assets/js/scripts/components.js')}}"></script>

<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{asset('theme/app-assets/js/scripts/pages/app-chat.js')}}"></script>
<script src="{{asset('theme/app-assets/js/scripts/pages/account-setting.js')}}"></script>
<script src="{{asset('theme/app-assets/js/scripts/pages/user-profile.js')}}"></script>
<script src="{{asset('theme/app-assets/js/scripts/pages/app-user.js')}}"></script>
<script src="{{asset('theme/app-assets/js/scripts/pages/app-email.js')}}"></script>
<script src="{{asset('theme/app-assets/js/scripts/pages/app-todo.js')}}"></script>
<script src="{{asset('theme/app-assets/js/scripts/modal/components-modal.js')}}"></script>
<script src="{{asset('theme/app-assets/js/scripts/extensions/dropzone.js')}}"></script>

<!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>
