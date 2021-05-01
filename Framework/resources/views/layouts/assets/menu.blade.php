<div class="bg-analytic-horizontal">
    <div class="">
        <div class="white-bg-menu">
            <div class="iq-menu-horizontal">
                <nav class="iq-sidebar-menu text-center d-flex flex-row-reverse">

                    <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
                        <a href="index-2.html" class="header-logo">
                            <img src="{{URL::to('images/logo/logo-bjb.png')}}" class="img-fluid rounded-normal"
                                 alt="logo">
                        </a>
                        <div class="iq-menu-bt-sidebar">
                            <i class="fa fa-close wrapper-menu"></i>
                        </div>
                    </div>
                    <ul id="iq-sidebar-toggle" class="iq-menu d-flex mn-center">
                        <li class="{{'/' == request()->path() ? 'active-menu' : ''}}">
                            <a href="{{url('/')}}" aria-expanded="false" class="font-size-20 align-items-center "><i
                                    class="fa fa-home"></i>Home</a>
                        </li>
                        <li class="{{'news' == request()->path() ? 'active-menu' : ''}}">
                            <a href="{{url('news')}}" aria-expanded="false" class="font-size-20 ">
                                <i class="fa fa-newspaper-o iq-arrow-left"></i><span>Informasi</span>
                            </a>
                        </li>

                        <li class="{{'product' == request()->path() ? 'active-menu' : ''}}">
                            <a href="{{url('profile')}}" aria-expanded="false" class="font-size-20 ">
                                <i class="fa fa-newspaper-o iq-arrow-left"></i><span>bjb Point</span>
                            </a>
                        </li>


                        @guest()
                            <li class="">
                                <a href="{{url('login')}}" aria-expanded="false" class="font-size-20 ">
                                    <i class="fa fa-sign-in iq-arrow-left"></i><span>Login</span>
                                </a>
                            </li>

                        @else
                            <li class="">
                                <a href="#UserAccount" class="collapsed" data-toggle="collapse" aria-expanded="false"
                                   class="font-size-20">
                                    <i class="fa fa-user iq-arrow-left"></i>{{Auth::user()->name}}
                                    <i class="fa fa-arrow-circle-right iq-arrow-right arrow-active"></i>
                                    <i class="fa fa-arrow-circle-down iq-arrow-right arrow-hover"></i>
                                </a>
                                <ul id="UserAccount" class="iq-submenu sub-scrll collapse"
                                    data-parent="#iq-sidebar-toggle">
                                    @if(Auth::user()->hasRole('admin'))
                                        <li class="">
                                            <a href="{{url('/')}}">
                                                <i class="fa fa-fa fa-user-circle-o"></i><span>My Account</span>
                                            </a>
                                        </li>
                                    @endif
                                    <li class="">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              class="d-none">
                                            @csrf
                                        </form>
                                    </li>


                                </ul>
                            </li>
                        @endguest
                    </ul>

                </nav>
            </div>
        </div>
    </div>
</div>
