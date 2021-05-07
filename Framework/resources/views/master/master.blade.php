<!doctype html>
<html lang="en">

@include('layouts.assets.head')

<body>

<!-- loader Start -->
<div id="loading">
    <div id="loading-center">

    </div>
</div>
<!-- loader END -->
<!-- Wrapper Start -->
<div class="wrapper">
    @include('layouts.assets.header')
    @yield('slider')
    <div class="" style="overflow: scroll">
    <div class="content-page c-payment-block">
        <div class="container">
            @yield('content')
        </div>
    </div>
    </div>
</div>
<!-- Wrapper End-->

@include('layouts.assets.footer')
@include('sweetalert::alert')
<!-- Backend Bundle JavaScript -->
@include('layouts.assets.js')

</body>

</html>
