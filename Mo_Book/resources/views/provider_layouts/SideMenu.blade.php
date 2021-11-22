<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
{{--        <a href="{{url('admin/dashboard')}}">--}}
{{--            <img src="{{asset('images/icon/logo.png')}}" alt="Cool Admin" />--}}
{{--        </a>--}}
        <a class="mt-4 mb-4" style="text-decoration: none;font-size:26px; color:#14BF98 " href="{{ '/dashboard' }}"><i class="fab fa-meetup"></i> M o   B o o k</a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class=" @yield('dashboard_select') ">
                    <a href="{{url('provider/dashboard')}}">
                        <i class="fas fa-home"></i>Dashboard
                    </a>
                </li>

                <li class="has-sub">
                    <a class="js-arrow" href="#">
                    <i class="fas fa-chevron-circle-right"></i>Services
                    <span class="arrow">
                    <i class="fas fa-angle-down"></i>
                    </span>
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li class=" @yield('catering_select') ">
                            <a href="{{url('provider/details')}}">
                            <i class="far fa-circle"></i>Catering
                            </a>
                        </li>
                        <li class=" @yield('photography_select') ">
                            <a href="{{url('provider/photography')}}">
                            <i class="far fa-circle"></i>Photography
                            </a>
                        </li>
                        <li class=" @yield('catering_select') ">
                            <a href="{{url('provider/details')}}">
                            <i class="far fa-circle"></i>Decoration
                            </a>
                        </li>
                        <li class=" @yield('catering_select') ">
                            <a href="{{url('provider/details')}}">
                            <i class="far fa-circle"></i>Lighting
                            </a>
                        </li>
                        <li class=" @yield('catering_select') ">
                            <a href="{{url('provider/details')}}">
                            <i class="far fa-circle"></i>Sound System
                            </a>
                        </li>
                    </ul>
                </li>

                <li class=" @yield('details_select') ">
                    <a href="{{url('provider/details')}}">
                    <i class="fas fa-chevron-circle-right"></i>Order List
                    </a>
                </li>
                <li class=" @yield('details_select') ">
                    <a href="{{url('provider/details')}}">
                    <i class="fas fa-chevron-circle-right"></i>Company Details
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->
