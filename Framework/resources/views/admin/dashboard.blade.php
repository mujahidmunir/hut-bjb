@extends('layouts.admin.master')
@section('content')
    <div class="col-xl-12 col-md-12 col-12">
        <div class="card card-statistics">
            <div class="card-header">
                <h4 class="card-title">Statistics</h4>
                <div class="d-flex align-items-center">
                    <p class="card-text font-small-2 mr-25 mb-0">Updated 1 month ago</p>
                </div>
            </div>
            <div class="card-body statistics-body">
                <div class="row">
                    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                        <div class="media">
                            <div class="avatar bg-light-primary mr-2">
                                <div class="avatar-content">

                                </div>
                            </div>
                            <div class="media-body my-auto">
                                <h4 class="font-weight-bolder mb-0 newsBjb"></h4>
                                <p class="card-text font-small-3 mb-0 ">News</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                        <div class="media">
                            <div class="avatar bg-light-info mr-2">
                                <div class="avatar-content">

                                </div>
                            </div>
                            <div class="media-body my-auto">
                                <h4 class="font-weight-bolder mb-0 programBjb"></h4>
                                <p class="card-text font-small-3 mb-0 ">Program bjb</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
                        <div class="media">
                            <div class="avatar bg-light-danger mr-2">
                                <div class="avatar-content">

                                </div>
                            </div>
                            <div class="media-body my-auto">
                                <h4 class="font-weight-bolder mb-0 promoBjb"></h4>
                                <p class="card-text font-small-3 mb-0">Promo bjb</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="row">
                            <div class="col-6">
                                <div class="media">
                                    <div class="avatar bg-light-success mr-2">
                                        <div class="avatar-content">
                                            <i class="fas fa-user"></i>
                                        </div>
                                    </div>
                                    <div class="media-body my-auto">
                                        <h4 class="font-weight-bolder mb-0 visitorBjb"></h4>
                                        <p class="card-text font-small-3 mb-0">Total Visitor</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="media">
                                    <div class="avatar bg-light-success mr-2">
                                        <div class="avatar-content">
                                            <i class="fas fa-user"></i>
                                        </div>
                                    </div>
                                    <div class="media-body my-auto">
                                        <h4 class="font-weight-bolder mb-0 visitorTodayBjb"></h4>
                                        <p class="card-text font-small-3 mb-0">Visitor Today</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="card">
            <div
                class="card-header d-flex flex-sm-row flex-column justify-content-md-between align-items-start justify-content-start"
            >
                <div>
                    <h4 class="card-title mb-25">Balance</h4>
                    <span class="card-subtitle text-muted">Commercial networks & enterprises</span>
                </div>
                <div class="d-flex align-items-center flex-wrap mt-sm-0 mt-1">
                    <h5 class="font-weight-bolder mb-0 mr-1">$ 100,000</h5>
                    <div class="badge badge-light-secondary">
                        <i class="text-danger font-small-3" data-feather="arrow-down"></i>
                        <span class="align-middle">20%</span>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div id="line-chart"></div>
            </div>
        </div>
    </div>
@endsection

@section('head')
    <link rel="stylesheet" type="text/css" href="{{URL::to('admin/app-assets/vendors/css/charts/apexcharts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('admin/app-assets/css/plugins/charts/chart-apex.min.css')}}">
@endsection

@section('js')
    <script src="{{URL::to('admin/app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>
    <script src="{{URL::to('admin/app-assets/js/scripts/charts/chart-apex.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            $.get("{{url('api/admin/get-dashboard')}}", function (data) {
                //console.log(data.totor);
                $('.promoBjb').html(data.promo);
                $('.programBjb').html(data.program);
                $('.newsBjb').html(data.news);
                $('.visitorBjb').html(data.total_visitor);
                $('.visitorTodayBjb').html(data.today_visitor);
            });
        })
    </script>
@endsection

