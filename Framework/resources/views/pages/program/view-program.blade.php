@extends('master.master')
@section('slider')
    @include('layouts.assets.banner')
@endsection
@section('content')

    <div class="col-12 container mt-3 mb-3">
        <div class="title-product">
            <div class="text-product text-center">
                bjb Lucky Birthday 60
            </div>
        </div>
    </div>
{{--    <div class="row">--}}
{{--        <div class="col-12 container mt-3 mb-3">--}}
{{--            <form method="post" id="search">--}}
{{--                @csrf--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-4 col-sm-4">--}}
{{--                        <div class="form-group">--}}
{{--                            <select id="Category" name="category" class=" form-control"></select>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                    <div class="col-lg-4 col-sm-4">--}}
{{--                        <div class="form-group">--}}
{{--                            <select id="City" name="city" class="form-control"></select>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-4 col-sm-4">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-6">--}}
{{--                                <div class="form-group">--}}
{{--                                    <input type="submit" value="Filter" class="btn btn-primary btn-block">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-6">--}}
{{--                                <div class="form-group">--}}
{{--                                    <button type="button" id="reset" value="Filter" class="btn btn-danger btn-block">--}}
{{--                                        Reset--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
    <div class=" col-12 showAlert">

    </div>
    <div class="Promo row col-12">

    </div>


@endsection

@section('js')
    <script>
        $('.select2').select2();
    </script>
    <script>
        $(document).ready(function () {
            $.get("{{url('api/get-program/all')}}", function (data) {
                data.map(function (v) {
                    $('.Promo').append('<div class="col-sm-6 col-md-4 col-lg-3 col-xl-3">\n' +
                        '                <div class="card" style="border-radius: 30px;"> ' +
                        '                  <a href="{{url('promo-bank-bjb')}}/' + v.news_slug + ' "> \n' +
                        '                    <div class="card-body">\n' +
                        '                        <img src="{{URL::to('images/news/icon')}}/' + v.thumb + '" class="card-img-top" alt="#">\n' +
                        '                    </div>\n' +
                        '                    <div class="card-footer" style="min-height: 100px; background-color: rgb(214 238 251);">\n' +
                        '                        <div class="row container">\n' +
                        '                            <h6 class="font-weight-bold" style="font-size: 1.5vh;">' + v.title + '</h6>\n' +
                        '                        </div>\n' +
                        '                       </a>'+
                        '                    </div>\n' +
                        '                </div>\n' +
                        '            </div></a>')
                });
            });


            $.get("{{url('api/get-city')}}", function (data) {
                $('#City').html('<option value="">Semua Kota</option>');
                data.map(function (v) {
                    $('#City').append('<option value="' + v.location + '">' + v.location + '</option>')
                })
            })

            $.get("{{url('api/get-categories')}}", function (data) {
                $('#Category').html('<option value="">Semua Kategori</option>');
                data.map(function (v) {
                    $('#Category').append('<option value="' + v.id + '">' + v.cat_name + '</option>')
                })
            })
        });
    </script>

    <script>
        $('#search').on('submit', function () {
            event.preventDefault();
            $.ajax({
                data: $('#search').serialize(),
                url: "{{ URL::to('/api/search') }}",
                method: "post",
                success: function (data) {
                    if (data[1] == 0) {
                        $('.showAlert').html(' <div class="alert alert-primary col-12 text-center" role="alert">\n' +
                            '                <div class="iq-alert-text">Tidak ada data ditemukan</div>\n' +
                                            '<button type="button" class="close" data-dismiss="alert" aria-label="Close">\n' +
                                            '<i class="ri-close-line"></i>\n'+
                            '        </div>');
                    } else {
                        $('.showAlert').html(' <div class="alert alert-primary col-12 text-center" role="alert">\n' +
                                            '<div class="iq-alert-text">' + data[1] + '  Data ditemukan</div>\n' +
                                            '<button type="button" class="close" data-dismiss="alert" aria-label="Close">\n' +
                                            '<i class="ri-close-line"></i>\n'+
                                            '        </div>');
                    }
                    $('.Promo').html('');
                    data[0].map(function (v) {
                        $('.Promo').append('<div class="col-sm-6 col-md-4 col-lg-3 col-xl-3">\n' +
                            '                <div class="card" style="border-radius: 30px;"> ' +
                            '                  <a href="{{url('promo-bank-bjb')}}/' + v.news_slug + ' "> \n' +
                            '                    <div class="card-body">\n' +
                            '                        <img src="{{URL::to('images/news/thumb')}}/' + v.thumb + '" class="card-img-top" alt="#">\n' +
                            '                    </div>\n' +
                            '                    <div class="card-footer" style="min-height: 100px; background-color: rgb(214 238 251);">\n' +
                            '                        <div class="row container">\n' +
                            '                            <h6 class="font-weight-bold" style="font-size: 1.5vh;">' + v.title + '</h6>\n' +
                            '                        </div>\n' +
                            '                       </a>'+
                            '                    </div>\n' +
                            '                </div>\n' +
                            '            </div></a>')
                    });
                }
            });
        });
    </script>

    <script>
        $('#reset').on('click', function () {
            $.get("{{url('api/get-promo/all')}}", function (data) {
                $('.Promo').html('');
                $('.showAlert').html('');
                data.map(function (v) {
                    $('.Promo').append('<div class="col-sm-6 col-md-4 col-lg-3 col-xl-3">\n' +
                        '                <div class="card" style="border-radius: 30px;"> ' +
                        '                  <a href="{{url('promo-bank-bjb')}}/' + v.news_slug + ' "> \n' +
                        '                    <div class="card-body">\n' +
                        '                        <img src="{{URL::to('images/news/thumb')}}/' + v.thumb + '" class="card-img-top" alt="#">\n' +
                        '                    </div>\n' +
                        '                    <div class="card-footer" style="min-height: 100px; background-color: rgb(214 238 251);">\n' +
                        '                        <div class="row container">\n' +
                        '                            <h6 class="font-weight-bold" style="font-size: 1.5vh;">' + v.title + '</h6>\n' +
                        '                        </div>\n' +
                        '                       </a>'+
                        '                    </div>\n' +
                        '                </div>\n' +
                        '            </div></a>')
                });
            });
        })
    </script>
@endsection
