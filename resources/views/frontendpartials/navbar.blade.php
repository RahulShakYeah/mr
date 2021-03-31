<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{route('front.main')}}"><img src="{{asset('frontend/img/logo.png')}}" style="width:50px;height:50px;" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item @yield('statushome')">
                        <a class="nav-link" href="{{route('front.main')}}">Home
                        </a>
                    </li>

                    <li class="nav-item @yield('statusabout')"><a class="nav-link" href="{{route('front.about')}}">About</a></li>

                    <li class="nav-item @yield('statusservice')"><a class="nav-link" href="{{route('front.service')}}">Service</a></li>

                    <li class="nav-item @yield('statusproduct')"><a class="nav-link" href="about-us.html">Product</a></li>

                    <li class="nav-item @yield('statustutorial')"><a class="nav-link" href="{{route('front.tutorial')}}">Tutorial</a></li>

                    <li class="nav-item dropdown @yield('statusmore')">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="team.html">Our Team</a>
                            <a class="dropdown-item" href="{{route('front.job')}}">Career</a>
                        </div>
                    </li>

                    <li class="nav-item @yield('statuscontact')"><a class="nav-link" href="{{route('front.contact')}}">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
