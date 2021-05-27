@extends('master.master')
@section('content')
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-block p-card">
                <div class="profile-box">
                    <div class="profile-card rounded">
                        <img src="{{URL::to('images/news/thumb', $data->thumb)}}" alt="profile-bg"
                             class="rounded d-block mx-auto img-fluid mb-3">
                        <h3 class="font-600 text-white text-center mb-0">bank bjb</h3>
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
                    @if($data->description != null)
                        {!! $data->description !!}
                    @else
                    <h5 class="mb-2"><u>Syarat dan Ketentuan</u></h5>
                    <p>Mendapatkan Diskon 60% dengan maksimum transaksi sebesar Rp.60.000
                        Dengan Ketentuan :</p>
                    <ul>
                        <li>Untuk 60 Orang pertama per-hari&nbsp;</li>
                        <li>Berlaku untuk 1 kali Transaksi/hari/outlet&nbsp;</li>
                        <li>Bertransaksi menggunakan bjb Digi & bjb DIgi Cash&nbsp;</li>
                    </ul>
                    <h5 class="mb-2"><u>Masa Berlaku Promo</u></h5>
                    @endif
                    <p>{{$data->duration_promo}}</p>

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
                @foreach(\App\Helpers\Promo::Promo() as $data)
                    <div class="col-sm-3 col-md-2 col-lg-2 col-xl-2 col-4">
                        <a href="{{url('promo-bank-bjb', $data->news_slug)}}">
                            <div class="card" style="border-radius: 60px;">
                                <img src="{{URL::to('images/news/thumb', $data->thumb)}}" class="card-img-top" alt="#">
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
