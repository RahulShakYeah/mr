@extends('layouts.frontend')
@section('statushome','active')
@section('content')
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
        <div class="owl-banner owl-carousel">
            @if(count($slider) > 0)
            @foreach($slider as $key=>$value)
            <div class="banner-item-01" style="background-image: url('{{ asset('uploads/homeslider')}}/{{$value->image}}');">
                <div class="text-content">
                    <h4>{{$value->primary_text}}</h4>
                    <h2>{{$value->secondary_text}}</h2>
                </div>
            </div>
       @endforeach
            @endif
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
                        <img src="{{asset('frontend/img/product.jpg')}}" width="200px" height="250px" style="object-fit: cover" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="latest-products">
        <div class="container">
            <div class="row">
                @if(count($jobs) > 0)
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Featured Jobs</h2>
                        <a href="{{route('front.job')}}">view more <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                    @foreach($jobs as $key=>$value)
                        <div class="col-md-4">
                    <div class="product-item">
                        <a href="job-details.html"><img src="{{asset('frontend/img/job.jpg')}}" alt=""></a>
                        <div class="down-content">
                            <a href="{{route('front.jobspecific',$value->id)}}"><h4>{{$value->job_title}}</h4></a>

                            <h6 style="font-weight: 200 !important">Salary : {{$value->salary}}</h6>

                            <h4><small><i class="fa fa-briefcase"></i>&nbsp;{{$value->employement_type == "full-time"?"Full Time":"Part Time"}}<br> <i class="fa fa-building"></i> {{$value->company_name}}</small></h4>


                            <small>
                               <i class="fa fa-calendar"></i> {{date('d F Y',strtotime($value->created_at))}}&nbsp;&nbsp;&nbsp;&nbsp;
                                <i class="fa fa-money-bill"></i> Salary : {{$value->salary}}&nbsp;&nbsp;&nbsp;
                            </small>
                        </div>
                    </div>
                </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>

    <div class="container">
        @if(count($service) > 0)
        <div class="col-md-12">
            <div class="section-heading">
                <h2>Services</h2>
                <a href="{{route('front.service')}}">view more <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
            <div class="row">
                @foreach($service as $key=>$value)
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="icon-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <i class="{{$value->icons}} alignleft"></i>
                            <h3 style="font-weight:200">{{$value->title}}</h3>
                            <p>{{substr($value->description,0,80)}}...</p>
                        </div><!-- end icon-wrapper -->
                    </div><!-- end col -->
                @endforeach
        </div><!-- end row -->
        @endif

    <div class="happy-clients">
        <div class="container">
          @if(count($ourteam) > 0)
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Our Team</h2>

                        <a href="{{route('front.ourteamlist')}}">View more <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="owl-clients owl-carousel text-center">
                        @foreach($ourteam as $key=>$value)

                        <div class="service-item">

                                <img src="{{asset('uploads/team/'.$value->photo)}}" height="200px" style="object-fit: cover;" alt="">
                            <div class="down-content">
                                <h4>{{$value->name}}</h4>
                                <span>Position : {{$value->position}}</span>
                                <p>Email : {{$value->email}}<br>Mobile : {{$value->phone}}</p>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
              @endif

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
