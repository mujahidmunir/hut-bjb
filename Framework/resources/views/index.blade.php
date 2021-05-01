@extends('master.master')
@section('head')
    <link rel="stylesheet" href="{{URL::to('assets/css/style.css')}}">
@endsection
@section('slider')
    @if($agent->isPhone())
        @include('layouts.assets.slider-mobile')
    @else
        @include('layouts.assets.slider')
    @endif

@endsection
@section('content')
    @include('layouts.assets.home')
@endsection

@section('js')
    <script src="{{URL::to('assets/js/style.js')}}"></script>
@endsection
