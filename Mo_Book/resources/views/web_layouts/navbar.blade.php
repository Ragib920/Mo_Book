<nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
    <!-- Text Logo - Use this if you don't have a graphic logo -->
    <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Aria</a> -->

    <!-- Image Logo -->
    <a class="" style="text-decoration: none;font-size:26px; color:#14BF98 " href="{{ '/' }}"><i class="fab fa-meetup"></i> M o   B o o k</a>



    <!-- Mobile Menu Toggle Button -->

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-awesome fas fa-bars"></span>
        <span class="navbar-toggler-awesome fas fa-times"></span>
    </button>
    <!-- end of mobile menu toggle button -->

    <li class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll @yield('home_select')" href="{{ url('/') }}">HOME <span class="sr-only">(current)</span></a>
                </li>
                <!-- Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="#about" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">CATEGORIES</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{url('/allcatering')}}"><span class="item-text">CATERING</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="{{url('/allphotography')}}"><span class="item-text">PHOTOGRAPHY</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="{{url('/alldecoration')}}"><span class="item-text">DECORATION</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="{{url('/alllighting')}}"><span class="item-text">LIGHTING</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="{{url('/allsoundsystem')}}"><span class="item-text">SOUND SYSTEM</span></a>
                    </div>
                </li>
                <!-- end of dropdown menu -->
                <li class="nav-item">
                    <a class="nav-link page-scroll @yield('companies_select')" href="{{ '/allcompanies' }}">COMPANIES <span class="sr-only">(current)</span></a>
                </li>

                @if(!empty(session()->get('USER_ID')))
                    <li class="nav-item">
                        <a class="nav-link page-scroll @yield('order_select')" href="{{url('/my_order' ) }}">MY ORDER <span class="sr-only">(current)</span></a>
                    </li>
                @endif


                <li class="nav-item">
                    <a class="nav-link page-scroll" href=""> | </a>
                </li>

                @if(empty(session()->get('USER_ID')))
                    <li class="nav-item">
                        <a class="nav-link page-scroll " href="{{url('user/login')}}"> LOG IN </a>
                    </li>
                @endif

                @if(!empty(session()->get('USER_ID')))
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href=""> <i class="far fa-user-circle"></i> {{session()->get('USER_NAME')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll text-danger" href="{{url('user/logout')}}">LOG OUT</a>
                    </li>
                @endif

        </ul>
    </div>
</nav> <!-- end of navbar -->
