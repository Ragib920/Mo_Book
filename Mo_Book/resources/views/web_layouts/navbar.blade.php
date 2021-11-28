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
                <a class="nav-link page-scroll @yield('home_select')" href="{{ '/' }}">HOME <span class="sr-only">(current)</span></a>
            </li>
            <!-- Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle page-scroll" href="#about" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">CATEGORIES</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{'/allcatering'}}"><span class="item-text">CATERING</span></a>
                    <div class="dropdown-items-divide-hr"></div>
                    <a class="dropdown-item" href="{{'/allphotography'}}"><span class="item-text">PHOTOGRAPHY</span></a>
                    <div class="dropdown-items-divide-hr"></div>
                    <a class="dropdown-item" href="{{'/alldecoration'}}"><span class="item-text">DECORATION</span></a>
                    <div class="dropdown-items-divide-hr"></div>
                    <a class="dropdown-item" href="{{'/alllighting'}}"><span class="item-text">LIGHTING</span></a>
                    <div class="dropdown-items-divide-hr"></div>
                    <a class="dropdown-item" href="{{'/allsoundsystem'}}"><span class="item-text">SOUND SYSTEM</span></a>
                </div>
            </li>
            <!-- end of dropdown menu -->
            <li class="nav-item">
                <a class="nav-link page-scroll @yield('companies_select')" href="{{ '/allcompanies' }}">COMPANIES <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link page-scroll" href="#callMe"> | </a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="#callMe">LOG IN</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="#callMe">SIGN IN</a>
            </li>

        </ul>
    </div>
</nav> <!-- end of navbar -->
