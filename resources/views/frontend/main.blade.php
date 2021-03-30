@extends('layouts.frontend')
@section('statushome','active')
@section('content')
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
        <div class="owl-banner owl-carousel">
            <div class="banner-item-01" style="background-image: url('{{ asset('frontend/img/silder1.jpg')}}');">
                <div class="text-content">
                    <h4>Welcome to M&R Solution!</h4>
                    <h2>Your Problem Our Solution</h2>
                </div>
            </div>
            <div class="banner-item-02" style="background-image: url('{{ asset('frontend/img/slider2.jpg')}}');">
                <div class="text-content">
                    <h4>Connect with Team!</h4>
                    <h2>Your Problem Our Solution</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Ends Here -->
    <div class="best-features">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>About Us</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="left-content">
                        <p>From the beginning, our experts carefully assess your financial services needs according to the
                            nature of your company and suggest the services model best suited to your requirements. Using
                            the latest technology and established virtual communication arrangements, we make sure that
                            the clients have 24x7 hour access to their data within the secure portal managed by our
                            company. Periodic review of the services and client feedback is an essential feature of our work
                            plan, which ensures that we remain efficient accounting partners in your business.</p>
                        <a href="{{route('front.about')}}" class="filled-button">Read More</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-image">
                        <img src="{{asset('frontend/img/job1.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="latest-products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Featured Jobs</h2>
                        <a href="jobs.html">view more <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-item">
                        <a href="job-details.html"><img src="{{asset('frontend/img/job.jpg')}}" alt=""></a>
                        <div class="down-content">
                            <a href="job-details.html"><h4>Lorem ipsum dolor sit amet</h4></a>

                            <h6>$60 000</h6>

                            <h4><small><i class="fa fa-briefcase"></i> Medical / Health Jobs <br> <strong><i class="fa fa-building"></i> BMI Kings Park Hospital</strong></small></h4>

                            <small>
                                <strong title="Posted on"><i class="fa fa-calendar"></i> 15-06-2020</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                <strong title="Type"><i class="fa fa-file"></i> Contract</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                <strong title="Location"><i class="fa fa-map-marker"></i> London</strong>
                            </small>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="product-item">
                        <a href="job-details.html"><img src="{{asset('frontend/img/job.jpg')}}" alt=""></a>
                        <div class="down-content">
                            <a href="job-details.html"><h4>Lorem ipsum dolor sit amet</h4></a>

                            <h6>$60 000</h6>

                            <h4><small><i class="fa fa-briefcase"></i> Medical / Health Jobs <br> <strong><i class="fa fa-building"></i> BMI Kings Park Hospital</strong></small></h4>

                            <small>
                                <strong title="Posted on"><i class="fa fa-calendar"></i> 15-06-2020</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                <strong title="Type"><i class="fa fa-file"></i> Contract</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                <strong title="Location"><i class="fa fa-map-marker"></i> London</strong>
                            </small>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="product-item">
                        <a href="job-details.html"><img src="{{asset('frontend/img/job.jpg')}}" alt=""></a>
                        <div class="down-content">
                            <a href="job-details.html"><h4>Lorem ipsum dolor sit amet</h4></a>

                            <h6>$60 000</h6>

                            <h4><small><i class="fa fa-briefcase"></i> Medical / Health Jobs <br> <strong><i class="fa fa-building"></i> BMI Kings Park Hospital</strong></small></h4>

                            <small>
                                <strong title="Posted on"><i class="fa fa-calendar"></i> 15-06-2020</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                <strong title="Type"><i class="fa fa-file"></i> Contract</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                <strong title="Location"><i class="fa fa-map-marker"></i> London</strong>
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="col-md-12">
            <div class="section-heading">
                <h2>Services</h2>
                <a href="{{route('front.service')}}">view more <i class="fa fa-angle-right"></i></a>
            </div>
        </div>


        <div class="row">
            @if(count($service) > 0)
                @foreach($service as $key=>$value)
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="icon-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                    <i class="{{$value->icons}} alignleft"></i>
                    <h3>{{$value->title}}</h3>
                    <p>{{substr($value->description,0,80)}}...</p>
                </div><!-- end icon-wrapper -->
            </div><!-- end col -->
                @endforeach
        @endif



    </div><!-- end row -->

    <div class="happy-clients">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Happy Clients</h2>

                        <a href="testimonials.html">read more <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="owl-clients owl-carousel text-center">
                        <div class="service-item">
                            <div class="icon">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="down-content">
                                <h4>John Doe</h4>
                                <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</em></p>
                            </div>
                        </div>

                        <div class="service-item">
                            <div class="icon">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="down-content">
                                <h4>Jane Smith</h4>
                                <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</em></p>
                            </div>
                        </div>

                        <div class="service-item">
                            <div class="icon">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="down-content">
                                <h4>Antony Davis</h4>
                                <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</em></p>
                            </div>
                        </div>

                        <div class="service-item">
                            <div class="icon">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="down-content">
                                <h4>John Doe</h4>
                                <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</em></p>
                            </div>
                        </div>

                        <div class="service-item">
                            <div class="icon">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="down-content">
                                <h4>Jane Smith</h4>
                                <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</em></p>
                            </div>
                        </div>

                        <div class="service-item">
                            <div class="icon">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="down-content">
                                <h4>Antony Davis</h4>
                                <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</em></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-content">
                        <div class="row">
                            <div class="col-md-8">
                                <h4>Contact us for more information</h4>
                                <p>Send us an email!We will be happy to respond</p>
                            </div>
                            <div class="col-lg-4 col-md-6 text-right">
                                <a href="{{route('front.contact')}}" class="filled-button">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
