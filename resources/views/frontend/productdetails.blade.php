
@extends('layouts.frontend')
@section('statusproduct','active')
@section('content')
    <div class="page-heading contact-heading header-text"  style="background-image: url('{{ asset('frontend/img/silder1.jpg')}}');">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h2>{{$productDetails->product->product_name}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="best-features about-features">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
{{--                        <h2>It’s time to upgrade to Mr. Solution. </h2>--}}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-image">

                            <div class="owl-banner owl-carousel">
                                @if(count($productSlider) > 0)
                                @for($i=0;$i<count($productSlider);$i++)
                                <img src="{{asset('uploads/productslider/'.$productSlider[$i]['photo'])}}" style="object-fit: cover;" alt="">
                                    @endfor
                                @else
                                    <img src="" alt="">
                                    @endif
                            </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="left-content">
                        <h4>{{$productDetails->product->product_name}}</h4>
                        <p>M&R Solution is group of
                            company, established with professionals
                            & dedicated team for every project &
                            having more than 8 Year working experience in the local Market & international market
                            demand. This team provide many project according to requirement of Market. Product
                            will be customized according to user requirement & successfully develop the Finance &
                            Inventory Management System according to the marketing requirement.
                            We are a technology & innovation company of Nepal Located at Putalisadak,
                            Kathmandu. Delivering Financial & business Solution software for Small and Medium
                            Businesses.
                        </p>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="team-members">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>{{$productDetails->product->product_name}}</h2>
                    </div>
                    <div class="section-body">
                        <p>{!! html_entity_decode($productDetails->product_details) !!}</p>
                    </div>


                </div>
            </div>
        </div>
    </div>

@endsection
