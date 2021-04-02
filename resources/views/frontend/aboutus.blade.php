@extends('layouts.frontend')
@section('statusabout','active')
@section('content')
    <div class="page-heading contact-heading header-text"  style="background-image: url('{{ asset('frontend/img/silder1.jpg')}}');">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h2>About Us</h2>
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
                        <h2>It’s time to upgrade to Mr. Solution. </h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-image">
                        <img src="{{asset('frontend/img/product.jpg')}}" width="200px" height="250px" style="object-fit: cover" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="left-content">
                        <h4>Your business is too important</h4>
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
                            <li><a href="https://www.facebook.com/MrSolutionERP" target="__blank"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com/mrsolution_v2020/" target="__blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="https://twitter.com/SiyZoOfficial" target="_blank"><i class="fab fa-twitter"></i></a></li>
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
                        <h2>So Why M&R Solution..??</h2>
                    </div>
                    <div class="section-body">
                        <p>From the beginning, our experts carefully assess your financial services needs according to the
                            nature of your company and suggest the services model best suited to your requirements. Using
                            the latest technology and established virtual communication arrangements, we make sure that
                            the clients have 24x7 hour access to their data within the secure portal managed by our
                            company. Periodic review of the services and client feedback is an essential feature of our work
                            plan, which ensures that we remain efficient accounting partners in your business.</p>
                        <p>
                            No.1 CA’s & account professionals also trust us and our strongest points are listed down:

                        </p>
                        <ol>
                            <li>Secured & Easy cloud access</li>
                            <li>Reduce business cost</li>
                            <li>Always up-to-date</li>
                            <li>User & role management</li>
                            <li>Easy installation and upgradation</li>
                            <li>Complete Vat accounting</li>
                            <li>24*7 professional service and support</li>
                            <li>Understandable Report</li>
                            <li>Adherence to A/C Principles</li>
                            <li>Excellent after – sales service</li>
                            <li>Online Posting – A Single Entry will update all the reports</li>
                            <li>User Friendly – Equipped with both Keyboard and Mouse navigation</li>
                            <li>Microsoft SQL Back End for Data security & reliability</li>
                            <li>All reports in Excel (Spread Sheet) Format</li>

                        </ol>

                    </div>


                </div>
            </div>
        </div>
    </div>

@endsection
