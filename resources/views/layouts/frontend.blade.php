@include('frontendpartials.header')

<body>

<!-- ***** Preloader Start ***** -->
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- ***** Preloader End ***** -->

<!-- Header -->
@include('frontendpartials.navbar')
@yield('content')
@include('frontendpartials.footer')
