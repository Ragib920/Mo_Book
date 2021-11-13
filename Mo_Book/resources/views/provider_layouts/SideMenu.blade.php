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
                <li class=" @yield('details_select') ">
                    <a href="{{url('provider/details')}}">
                        <i class="far fa-circle"></i>Company Details
                    </a>
                </li>
                <li class=" @yield('category_select') ">
                    <a href="{{url('admin/dashboard')}}">
                        <i class="far fa-circle"></i>Category
                    </a>
                </li>
                <li class=" @yield('service_select') ">
                    <a href="{{url('admin/dashboard')}}">
                        <i class="far fa-circle"></i> Service
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->
