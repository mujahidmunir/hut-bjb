


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Page Not Found</title>

    <!-- Favicon -->
    <link rel="stylesheet" href="{{URL::to('assets/css/backend.min0ff5.css?v=1.0.2')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{URL::to('assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css')}}">

    <link rel="stylesheet" href="{{URL::to('assets/vendor/remixicon/fonts/remixicon.css')}}">
    <link rel="stylesheet" href="{{URL::to('assets/vendor/@icon/dripicons/dripicons.css')}}">
</head>

<body class="">

<div class="wrapper">
    <div class="container">
        <div class="row no-gutters height-self-center">
            <div class="col-sm-12 text-center align-self-center">
                <div class="iq-error position-relative">
                    <img src="{{URL::to('assets/images/error/404.png')}}" class="img-fluid iq-error-img" alt="">
                    <h2 class="mb-0 mt-4">Oops! This Page is Not Found.</h2>
                    <p>The requested page dose not exist.</p>
                    <button onclick="goBack()" class="btn btn-primary d-inline-flex align-items-center mt-3"><i class="ri-back"></i>Back to Previous Page</button>
                    <a href="{{url('/')}}" class="btn btn-success d-inline-flex align-items-center mt-3"><i class="ri-home-4-line"></i>Back to Home</a>

                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function goBack() {
        window.history.back();
    }
</script>
</body>
</html>
