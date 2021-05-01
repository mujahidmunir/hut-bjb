<!doctype html>
<html lang="en">

@include('layouts.assets.head')
@section('head')

@endsection
<body class="body-login">

<div id="loading">
    <div id="loading-center">

    </div>
</div>
<!-- loader END -->
<!-- Wrapper Start -->
<div class="wrapper">
    <section class="login-content">
        <div class="container h-100">
            <div class="row align-items-center justify-content-center h-100">
                <div class="col-12">
                    <div class="card bg-primary p-3 m-4">
                        <p style="font-size: 2vh;">Mau Iphone 12 ??</p>
                        <p style="font-size: 2vh;">Regisrasi dan ikuti undiannya, dan akan berkesempatan mendapatakan iphone 12</p>
                    </div>
                    @error('email')
                    <div class="alert text-white bg-danger p-3 m-4" role="alert">
                        <div class="iq-alert-icon">
                            <i class="fa fa-remove"></i>
                        </div>
                        <div class="iq-alert-text">E-mail dan password yang anda masukan tidak tersedia</div>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="fa fa-remove"></i>
                        </button>
                    </div>
                    @enderror
                    @error('phone')
                    <div class="alert text-white bg-danger p-3 m-4" role="alert">
                        <div class="iq-alert-icon">
                            <i class="fa fa-remove"></i>
                        </div>
                        <div class="iq-alert-text">Gagal, No Hp Sudah Tersedia</div>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="fa fa-remove"></i>
                        </button>
                    </div>
                    @enderror

                    <div class="row align-items-top">

                        <div class="col-lg-6 p-5">
                            <div class="title-product mb-2">
                                <div class="text-product">
                                    <div class="text-left">
                                        Pengguna Baru, Registrasi Disini
                                    </div>
                                </div>
                            </div>
                            <form action="{{route('register')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="floating-label form-group">
                                            <input type="text"
                                                   class="floating-input form-control @error('name') is-invalid @enderror"
                                                   name="name" value="{{ old('name') }}" required autocomplete="name"
                                                   autofocus placeholder="Nama">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="floating-label form-group">
                                            <input type="email"
                                                   class="floating-input form-control @error('email') is-invalid @enderror"
                                                   name="email" value="{{ old('email') }}" required autocomplete="email"
                                                   autofocus placeholder="E-Mail">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="floating-label form-group">
                                            <input type="number"
                                                   class="floating-input form-control @error('phone') is-invalid @enderror"
                                                   name="phone" value="{{ old('phone') }}" required autocomplete="phone"
                                                   autofocus placeholder="No Hp">
                                        </div>
                                    </div>


                                    <div class="col-lg-12">
                                        <div class="floating-label form-group">
                                            <input type="password"
                                                   class="floating-input form-control"
                                                   name="password" value="{{ old('password') }}" required autocomplete="password"
                                                   autofocus placeholder="Password">

                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="floating-label form-group">
                                        <input type="password" class="floating-input form-control" name="password_confirmation" placeholder="Konfrimasi Password">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="floating-label form-group">
                                            <input class="floating-input form-control" id="city" type="text" name="city_id" placeholder="Kota">
                                            <div id="cityList"></div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mt-2 btn-block" style="height: 50px;">Daftar</button>
                            </form>
                        </div>
                        <div class="col-lg-6 p-5">
                            <div class="title-product mb-2">
                                <div class="text-product">
                                    <div class="text-left">
                                        Sudah Punya Akun ? Login disini

                                    </div>
                                </div>
                            </div>
                            <form action="{{route('login')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="floating-label form-group">
                                            <input type="email"
                                                   class="floating-input form-control @error('email') is-invalid @enderror"
                                                   name="email" value="{{ old('email') }}" required autocomplete="email"
                                                   autofocus placeholder="E-mail">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="floating-label form-group">
                                            <input type="password"
                                                   class="floating-input form-control @error('password') is-invalid @enderror"
                                                   name="password" value="{{ old('password') }}" required autocomplete="password"
                                                   autofocus placeholder="Password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                                <button type="submit" class="btn btn-primary mt-2 btn-block" style="height: 50px;">Masuk</button>
                                <div class="float-right">

                                </div>
                            </form>
                            <div class="row">
                                <img src="{{URL::to('images/iphone12.png')}}" class="img-iphone">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@include('sweetalert::alert')
@include('layouts.assets.js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script>
    $(document).ready(function () {
        $('#city').keyup(function () {
            var city_name = $(this).val();
            if(city !== ''){
                console.log(city);
                $.ajax({
                    url:"{{url('api/city')}}",
                    method: "POST",
                    data: {
                        city:city_name
                    },
                    success: function (data) {
                        $('#cityList').fadeIn();
                        $('#cityList').html(data);
                    }
                })
            }
        });
    });
    $(document).on('click', 'li', function () {
        $('#city').val($(this).text());
        $('#cityList').fadeOut();
    });
</script>

</body>

</html>

