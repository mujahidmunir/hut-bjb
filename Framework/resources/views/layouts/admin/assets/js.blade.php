<script src="{{URL::to('admin/app-assets/vendors/js/vendors.min.js')}}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{URL::to('admin/app-assets/js/core/app-menu.min.js')}}"></script>
<script src="{{URL::to('admin/app-assets/js/core/app.min.js')}}"></script>
<script src="{{URL::to('admin/app-assets/js/scripts/customizer.min.js')}}"></script>
<script src="{{URL::to('admin/app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
<script src="{{URL::to('admin/app-assets/js/scripts/forms/form-select2.min.js')}}"></script>
<!-- END: Theme JS-->
<script>
    $(window).on('load',  function(){
        if (feather) {
            feather.replace({ width: 14, height: 14 });
        }
    })
</script>
@yield('js')
