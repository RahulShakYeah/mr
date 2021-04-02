@extends('layouts.frontend')
@section('statusproduct','active')
@section('content')
    <div class="page-heading about-heading header-text mb-5" style="background-image: url('{{ asset('frontend/img/silder1.jpg')}}');">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h2>Product</h2>
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

                        @if(count($product)>0)
                            @foreach($product as $key=>$value)
                                <div class="col-md-4">
                                    <div class="product-item">
                                        <a href="{{route('front.productDetails',$value->id)}}"><img src="{{asset('frontend/img/product.jpg')}}" style="object-fit: cover" alt=""></a>
                                        <div class="down-content">
                                            <a href="{{route('front.productDetails',$value->id)}}"><h4>{{$value->product_name}}</h4></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p class="alert alert-warning mt-2">No product list available</p>
                        @endif



                    </div>
                </div>
            </div>
            {{$product->links()}}
        </div>

    </div>

@endsection
