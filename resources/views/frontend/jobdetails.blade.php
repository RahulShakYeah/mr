@extends('layouts.frontend')
@section('statusmore','active')
@section('content')
    <div class="page-heading about-heading header-text mb-5" style="background-image: url('{{ asset('frontend/img/silder1.jpg')}}');">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <h2>Jobs</h2>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="products">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="row">

                        @if(count($jobs)>0)
                            @foreach($jobs as $key=>$value)
                        <div class="col-md-4">
                            <div class="product-item">
                                <a href="job-details.html"><img src="{{asset('frontend/img/job.jpg')}}" alt=""></a>
                                <div class="down-content">
                                    <a href="{{route('front.jobspecific',$value->id)}}"><h4>{{$value->job_title}}</h4></a>

                                    <h6>Salary : {{$value->salary}}</h6>

                                    <h4><small><strong><i class="fa fa-building"></i> {{$value->location}}</strong></small></h4>

                                    <small>
                                        <strong title="Posted on"><i class="fa fa-calendar"></i> {{date('d F Y',strtotime($value->created_at))}}</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                        <strong title="Type"><i class="fa fa-file"></i> Contract</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                    </small>
                                </div>
                            </div>
                        </div>
                            @endforeach
                        @else
                            <p class="alert alert-warning mt-2">No Jobs available</p>
                        @endif



                    </div>
                </div>
            </div>
            {{$jobs->links()}}
        </div>

    </div>

@endsection
