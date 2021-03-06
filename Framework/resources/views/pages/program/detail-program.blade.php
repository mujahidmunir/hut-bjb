@extends('master.master')
@section('content')
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-block p-card">
                <div class="profile-box">
                    <div class="profile-card rounded">
                        <img src="{{URL::to('images/news/thumb', $data->thumb)}}" alt="profile-bg"
                             class="rounded d-block mx-auto img-fluid mb-3">
                        <h5 class="font-100 text-white text-center mb-0">bank bjb</h5>
                        <p class="text-white text-center mb-5">{{$data->title}}</p>
                    </div>
                    <div class="pro-content rounded">
                        <div class="d-flex align-items-center mb-3">
                            <div class="p-icon mr-3">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <p class="mb-0">{{$data->location}}</p>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="p-icon mr-3">
                                <i class="fa fa-bars"></i>
                            </div>
                            <p class="mb-0">{{$data->cat_name}}</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card card-block mb-3">
                <div class="card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title mb-0">{{$data->title}}</h4>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="mb-2 container"><u>Keterangan</u></h5>
                    <p>
                        {!! $data->description !!}
                    </p>

                    <h5 class="mt-5 container"><u>Masa Berlaku Promo</u></h5>
                    <p class="container">{{$data->duration_promo}}</p>

                </div>
            </div>
        </div>
    </div>


    <div class="card">
        <div class="card-header">
            <h4>Promo Lainnya</h4>
        </div>
        <div class="card-body">
            <div class="row">
                @foreach(\App\Helpers\Program::MoreProgram() as $data)
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3">
                        <div class="card" style="border-radius: 30px;">
                            <a href="{{url('program-bank-bjb', $data->news_slug)}} ">
                                <div class="card-body">
                                    <img src="{{URL::to('images/news/icon', $data->thumb)}}" class="card-img-top"
                                         alt="#">
                                </div>
                                <div class="card-footer" style="min-height: 100px; background-color: rgb(214 238 251);">
                                    <div class="row container">
                                        <h6 class="font-weight-bold" style="font-size: 1.5vh;">{{$data->title}}</h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
            @endforeach
        </div>
    </div>
    </div>

@endsection
