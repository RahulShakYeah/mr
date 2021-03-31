@extends('layouts.frontend')
@section('statusmore','active')
@section('content')
    <div class="page-heading contact-heading header-text mb-5"  style="background-image: url('{{ asset('frontend/img/silder1.jpg')}}');">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h2>{{$jobs->job_title}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="products">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-8">
                    <p class="lead">
                        <i class="fa fa-map-marker"></i> {{$jobs->location}} &nbsp;&nbsp;
                        <i class="fa fa-calendar"></i> {{date('d F Y',strtotime($jobs->created_at))}} &nbsp;&nbsp;
                        <i class="fa fa-calendar"></i> Expires on : {{date('d F Y',strtotime($jobs->exp_date))}} &nbsp;&nbsp;
                        <i class="fa fa-money-bill"></i> Salary : {{$jobs->salary}}
                    </p>

                    <br>
                    <br>

                    <div class="form-group">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th rowspan="2">Basic Information</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Company Name</td>
                                <td>{{$jobs->company_name}}</td>
                            </tr>
                            <tr>
                                <td>Job Level</td>
                                <td>{{$jobs->job_level}}</td>
                            </tr>
                            <tr>
                                <td>Number of Vacancy</td>
                                <td>{{$jobs->number_of_vacancy}}</td>
                            </tr>
                            <tr>
                                <td>Employement Type</td>
                                @if($jobs->employement_type == "full-time")
                                    <td>Full time</td>
                                    @else
                                <td>Part Time</td>
                                @endif
                            </tr>
                            <tr>
                                <td>Education Level</td>
                                <td>{{$jobs->education_level}}</td>
                            </tr>
                            <tr>
                                <td>Experience</td>
                                <td>{{$jobs->experience}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>


                </div>

                <div class="col-md-3 col-sm-4">
                    <div>
                        <img src="{{asset('uploads/companylogo/')}}/{{$jobs->company_logo}}" alt="" class="img-fluid wc-image">
                    </div>

                    <br>

                    <ul class="social-icons text-center">
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                    </ul>

                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="section-heading">
                        <h2>{{$jobs->company_name}}</h2>
                    </div>


                    <p>{!! html_entity_decode($jobs->job_description) !!}</p>
                    <br>
                </div>

                <div class="col-md-3">
                    <div class="section-heading">
                        <h2>Application form</h2>
                    </div>

                    <div class="left-content">
                        <form action="{{route('front.applicationstore')}}" method="POST">
                            @csrf
                        <p>
                            <span>Full Name</span>

                            <br>
                            <input type="hidden" value="{{$jobs->company_name}}">
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Your Name">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                            @enderror

                        </p>

                        <p>
                            <span>Phone</span>

                            <br>

                            <input type="number" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" placeholder="Phone number">
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                            @enderror
                        </p>

                        <p>
                            <span>Email</span>

                            <br>

                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="phone" placeholder="Enter your email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                            @enderror
                        </p>

                        <p>
                            <span>Upload CV</span>

                            <br>

                            <input type="file" name="cv" class="form-control @error('cv') is-invalid @enderror" id="cv">
                            @error('cv')
                            <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                            @enderror
                        </p>

                        <p>
                            <span>Job title</span>

                            <br>

                            <input type="disabled" name="job_title" class="form-control @error('job_title') is-invalid @enderror" id="job_title" value="{{$jobs->job_title}}" disabled>
                            @error('cv')
                            <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                            @enderror
                        </p>

                        <p>
                            <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-paper-plane"></i>&nbsp;Apply</button>
                        </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
