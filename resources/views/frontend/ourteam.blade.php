@extends('layouts.frontend')
@section('statusmore','active')
@section('content')
    <div class="page-heading about-heading header-text mb-5" style="background-image: url('{{ asset('frontend/img/silder1.jpg')}}');">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h2>Our Team</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="team-members">
        <div class="container">
            <div class="row">

                @if(count($ourteam) > 0)
                    @foreach($ourteam as $key=>$value)
                        <div class="col-md-4">
                            <div class="team-member">
                                <div class="thumb-container">
                                    <img src="{{asset('uploads/team/'.$value->photo)}}" height="200px" style="object-fit: cover;" alt="">
                                    @if($value->linkedin != null)
                                    <div class="hover-effect">
                                        <div class="hover-content">
                                            <ul class="social-icons">
{{--                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
{{--                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
                                                <li><a href="{{$value->linkedin}}" target="__blank"><i class="fab fa-linkedin"></i></a></li>
{{--                                                <li><a href="#"><i class="fa fa-behance"></i></a></li>--}}
                                            </ul>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                                <div class="down-content">
                                    <h4>{{$value->name}}</h4>
                                    <span>{{$value->position}}</span>
                                    <p>Email : {{$value->email}}<br>Mobile : {{$value->phone}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <span class="alert alert-danger">No team list available</span>
                @endif

            </div>
            {{$ourteam->links()}}
        </div>
    </div>

@endsection
