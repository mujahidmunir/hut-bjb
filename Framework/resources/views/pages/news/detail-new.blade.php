@extends('master.master')
@section('slider')
    @include('layouts.assets.banner')
@endsection
@section('content')
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-block card-stretch card-height blog blog-detail">
                    <div class="card-header">
                        <h3>{{$data->title}}</h3>
                    </div>
                    <div class="card-body">

                        <div class="image-block">
                            <img src="{{URL::to('images/news/origin', $data->thumb)}}" class="img-fluid rounded w-100"
                                 alt="blog-img">
                        </div>
                        <div class="blog-description mt-3">
                            <div class="blog-meta d-flex align-items-center mb-3">
                                <div class="float-left">
                                    <div class="date mr-4"><i
                                            class="ri-calendar-2-fill pr-2"></i>{{date('d M Y', strtotime($data->updated_at))}}
                                    </div>
                                </div>
                                <div class="float-right">
                                    <div class="author mr-4 d-none d-lg-flex d-sm-flex d-xl-flex"><i
                                            class="ri-user-fill pr-2"></i>By: Admin
                                    </div>
                                </div>

                            </div>
                            <h4 class="mb-2">{{$data->title}}</h4>
                            <p>
                                {!! $data->description !!}
                            </p>
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive-item"
                                        src="https://www.youtube.com/embed/{{$data->video_url}}"
                                        allowfullscreen></iframe>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

