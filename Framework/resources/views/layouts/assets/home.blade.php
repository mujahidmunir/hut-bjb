@guest()
    <?php  $id = 'null'; ?>
@else
    <?php $id = \Illuminate\Support\Facades\Auth::user()->id; ?>
@endif
<div class="row" style="">

    <div class="col-lg-12">
        <div class="card-body">
            <div class="text-product">
                <div class="text-center">
                    Program bank bjb
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div
            class="container products-slider custom-products owl-carousel owl-theme nav-outer show-nav-hover nav-image-center"
            data-owl-options="{
    						'dots': false,
    						'nav': true
    					}">
            @foreach(\App\Helpers\Program::Program() as $data)
                <div class="container">
                    <div class="card card-bordered program" style="border: 3px solid #02aeef;">
                        <div class="card-body">
                            <div class="row" style="margin: -1.5vh; margin-left: -25px;">
                                <div class="col-6">
                                    <div class="image-block position-relative">
                                        <a href="{{url('program-bank-bjb/'.$data->news_slug)}}">
                                        <img src="{{URL::to('images/news/icon/'.$data->thumb)}}" class="img-fluid" style="border-radius: 10px"
                                             alt="blog-img">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="blog-description mt-3">
                                        <div class="font-weight-bold mb-3"
                                             style="font-size: 1.2vh;">{{$data->title}}</div>
                                        <div class="mb-3"
                                             style="font-size: 1.1vh; text-align: justify;">{{$data->thumb_desc}}</div>

{{--                                        @if($agent->isPhone())--}}

{{--                                        @else--}}
{{--                                            <div class="blog-meta d-flex align-items-center justify-content-between mb-2 d-none d-lg-flex d-xl-flex d-sm-flex">--}}
{{--                                                <div class="author">{{$data->thumb_desc}}</div>--}}
{{--                                            </div>--}}
{{--                                        @endif--}}

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="{{url('program-bank-bjb', $data->news_slug)}}" style="font-size: 1.2vh" class="btn btn-primary btn-block">Lihat</a>
                        </div>
                    </div>
                </div>

            @endforeach
        </div><!-- End .featured-proucts -->
    </div>
    <div class="col-lg-12">
        <div class="card-body" style="margin-top: -20px; margin-right: -30px; ">
            <div class="text-product-right">
                <a href="{{url('program-bank-bjb')}}"
                   style="padding: 7px 20px 7px 20px;">Lihat Lainnya</a>
            </div>
        </div>
    </div>


    <div class="col-lg-12 mt-5">
        <div class="card-body">
            <div class="text-product">
                <div class="text-center">
                    Promo bank bjb
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach(\App\Helpers\Promo::Promo() as $data)
        <div class="col-sm-3 col-md-2 col-lg-2 col-xl-2 col-4">
            <div class="card" style="border-radius: 60px;">
                <a href="{{url('promo-bank-bjb', $data->news_slug)}}">
                <img src="{{URL::to('images/news/thumb', $data->thumb)}}" class="card-img-top" alt="#">
                </a>
            </div>
        </div>
        @endforeach
    </div>

    <div class="col-lg-12">
        <div class="card-body" style="margin-top: -20px; margin-right: -30px; ">
            <div class="text-product-right">
                <a href="{{url('promo-bank-bjb')}}" style="padding: 7px 20px 7px 20px;">Lihat Lainnya</a>
            </div>
        </div>
    </div>


    <div style="margin-top: 50px; padding: 20px;">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-body">
                    <div class="title-product">
                        <div class="text-product">
                            <div class="text-left">
                                Informasi Terkini bank bjb
                            </div>
                        </div>
                    </div>
                    <div class="text-product-right mt-4">
                        <a href="{{url('news')}}" class="btn btn-primary btn-xl"
                           style="padding: 7px 20px 7px 20px; border-radius: 2vh 0 2vh 0;">Lihat Semua</a>
                    </div>
                </div>
            </div>
            @foreach($news as $key => $data)
                @if($key % 2 == !0)
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-block card-stretch card-height blog blog-date">
                            <div class="card-body" style="border: none">
                                <div class="blog-description mt-3">
                                    <h5 class="mb-2">{{$data->title}}</h5>
                                    <div class="blog-meta d-flex align-items-center justify-content-between mb-2">
                                        <div class="author">bank bjb</div>
                                    </div>
                                    <p>{!!$data->thumb_desc!!}</p>
                                    <a href="{{url('news/'.$data->news_slug)}}" tabindex="-1">Read More <i
                                            class="ri-arrow-right-s-line"></i></a>
                                </div>
                                <div class="image-block position-relative">
                                    <a href="{{url('news/'.$data->news_slug)}}">
                                        <img src="{{URL::to('images/news/thumb/'.$data->thumb)}}"
                                             class="img-fluid rounded w-100"
                                             alt="blog-img">
                                        <div class="blog-meta-date">
                                            <div class="date">{{date('d', strtotime($data->created_at))}}</div>
                                            <div class="month">{{date('M', strtotime($data->created_at))}}</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-block card-stretch card-height blog blog-date">
                            <div class="card-body">
                                <div class="image-block position-relative">
                                    <a href="{{url('news/'.$data->news_slug)}}">
                                        <img src="{{URL::to('images/news/thumb/'.$data->thumb)}}"
                                             class="img-fluid rounded w-100"
                                             alt="blog-img">
                                        <div class="blog-meta-date">
                                            <div class="date">{{date('d', strtotime($data->created_at))}}</div>
                                            <div class="month">{{date('M', strtotime($data->created_at))}}</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="blog-description mt-3">
                                    <div class="blog-meta d-flex align-items-center justify-content-between mb-2">
                                        <div class="author">bank bjb</div>
                                    </div>
                                    <h5 class="mb-2">{{$data->title}}</h5>
                                    <p>{!!$data->thumb_desc!!}</p>
                                    <a href="{{url('news/'.$data->news_slug)}}" tabindex="-1">Read More <i
                                            class="ri-arrow-right-s-line"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

</div>

<script>
    function Go(id, v) {
        $.get("{{url('api/get-url')}}/" + id + "/" + v, function (data) {
            data.url_origin
            window.open(data.url_origin);
        });


    }
</script>
