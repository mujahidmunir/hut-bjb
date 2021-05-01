<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{URL::to('images/logo/logo-bjb.png')}}" />
    <title>{{(Request::segment(1))}}
        <?php
        if (Request::segment(2) ==  true){
            $text = Request::segment(2);
            $title = str_replace('-', ' ', $text);
            echo ' '.'-'.' '.$title;
        }
        ?>
    </title>
    <link rel="stylesheet" href="{{URL::to('assets/css/backend.min0ff5.css?v=1.0.2')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{URL::to('assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css')}}">

    <link rel="stylesheet" href="{{URL::to('assets/vendor/remixicon/fonts/remixicon.css')}}">
    <link rel="stylesheet" href="{{URL::to('assets/vendor/@icon/dripicons/dripicons.css')}}">


</head>
@yield('head')
