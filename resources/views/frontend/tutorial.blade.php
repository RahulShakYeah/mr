@extends('layouts.frontend')
@section('statustutorial','active')
@section('content')
    <!-- Page Content -->
    <div class="page-heading contact-heading header-text"  style="background-image: url('{{ asset('frontend/img/silder1.jpg')}}');">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h2>Tutorials</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="blog_area section-padding mt-4">
        <div class="container">

            <div class="row">
                @if(count($tutorials))
                    @foreach($tutorials as $key=>$value)
                        <div class="col-lg-4 col-md-4 col-sm-12 p-4">

                            <iframe src="https://www.youtube.com/embed/<?php echo $value->video_id?>"
                                    frameborder="0" allow="accelerometer" width="350" height="220px"
                                    allowfullscreen></iframe>
                            <p class="text-align:center">{{$value->title}}</p>


                        </div>

                    @endforeach


                @else
                    <p class="alert alert-warning mt-2">No Videos available</p>
                @endif

            </div>
            {{$tutorials->links()}}
        </div>


    </section>




@endsection
