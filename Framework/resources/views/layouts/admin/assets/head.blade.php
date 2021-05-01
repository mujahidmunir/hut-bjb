<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description"
          content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
          content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{URL::to('images/logo/HUT-BJB.png')}}" />
    <title>hut bjb</title>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{URL::to('admin/app-assets/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('admin/app-assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('admin/app-assets/css/bootstrap-extended.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('admin/app-assets/css/colors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('admin/app-assets/css/components.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('admin/app-assets/css/themes/dark-layout.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('admin/app-assets/css/themes/bordered-layout.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('admin/app-assets/css/themes/semi-dark-layout.min.css')}}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::to('admin/app-assets/css/core/menu/menu-types/vertical-menu.min.css')}}">
    <!-- END: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::to('admin/app-assets/vendors/css/forms/select/select2.min.css')}}">


    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::to('admin/assets/css/style.css')}}">
    <!-- END: Custom CSS-->
    @yield('head')
</head>
