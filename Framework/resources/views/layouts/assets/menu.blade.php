<div class="bg-analytic-horizontal">
    <div class="">
        <div class="white-bg-menu">
            <div class="iq-menu-horizontal">
                <nav class="iq-sidebar-menu text-center ">

                        <div class="iq-sidebar-logo">
                            <div class="row">
                                <div class="col-9">
                                    <a href="{{url('/')}}" class="header-logo">
                                        <img src="{{URL::to('images/logo/logo.png')}}" style="width: 100%; height: auto; padding: 5px;" class="img-fluid rounded-normal"
                                             alt="logo">
                                    </a>

                                </div>
                                <div class="col-3">
                                    <div class="iq-menu-bt-sidebar justify-content-center justify-content-between">

                                        <i class="fa fa-close wrapper-menu" style="font-size: 28px;"></i>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <ul id="iq-sidebar-toggle" class="iq-menu d-flex mn-center">
                            <li class="{{'/' == request()->path() ? 'active-menu' : ''}}">
                                <a href="{{url('/')}}" aria-expanded="false" class="font-size-20 align-items-center ">Home</a>
                            </li>
                            <li class="{{'news' == request()->path() ? 'active-menu' : ''}}">
                                <a href="{{url('news')}}" aria-expanded="false" class="font-size-20 ">
                                    <span>Informasi</span>
                                </a>
                            </li>

                            <li class="{{'promo-bank-bjb' == request()->path() ? 'active-menu' : ''}}">
                                <a href="{{url('promo-bank-bjb')}}" aria-expanded="false" class="font-size-20 ">
                                    <span>Promo</span>
                                </a>
                            </li>



                            <li class="{{'program-bank-bjb' == request()->path() ? 'active-menu' : ''}}">
                                <a href="{{url('program-bank-bjb')}}" aria-expanded="false" class="font-size-20 ">
                                    <span>Program</span>
                                </a>
                            </li>



                            {{--                        @guest()--}}
                            {{--                            <li class="">--}}
                            {{--                                <a href="{{url('login')}}" aria-expanded="false" class="font-size-20 btn btn-sm btn-warning">--}}
                            {{--                                    <i class="fa fa-sign-in iq-arrow-left"></i><span>Masuk Sebagai ?</span>--}}
                            {{--                                </a>--}}
                            {{--                            </li>--}}

                            {{--                        @else--}}
                            {{--                            <li class="">--}}
                            {{--                                <a href="#UserAccount" class="collapsed" data-toggle="collapse" aria-expanded="false"--}}
                            {{--                                   class="font-size-20">--}}
                            {{--                                    <i class="fa fa-user iq-arrow-left"></i>{{Auth::user()->name}}--}}
                            {{--                                    <i class="fa fa-arrow-circle-right iq-arrow-right arrow-active"></i>--}}
                            {{--                                    <i class="fa fa-arrow-circle-down iq-arrow-right arrow-hover"></i>--}}
                            {{--                                </a>--}}
                            {{--                                <ul id="UserAccount" class="iq-submenu sub-scrll collapse"--}}
                            {{--                                    data-parent="#iq-sidebar-toggle">--}}
                            {{--                                    @if(Auth::user()->hasRole('admin'))--}}
                            {{--                                        <li class="">--}}
                            {{--                                            <a href="{{url('/')}}">--}}
                            {{--                                                <i class="fa fa-fa fa-user-circle-o"></i><span>My Account</span>--}}
                            {{--                                            </a>--}}
                            {{--                                        </li>--}}
                            {{--                                    @endif--}}
                            {{--                                </ul>--}}
                            {{--                            </li>--}}
                            {{--                        @endguest--}}
                        </ul>

                </nav>
            </div>
        </div>
    </div>
</div>
