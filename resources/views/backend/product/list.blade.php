@extends('layouts.backend')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h2 class="mt-3 mb-2">Product Name List
                            <a href="{{route('product.create')}}" class="btn btn-success btn-sm float-right"><i
                                    class="fa fa-plus"></i> Add Product Name</a>
                        </h2>
                        <hr>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                @include('backend.include.message')
                <div class="table-responsive">
                    <table class="table table-bordered table-striped" id="usertable">
                        <thead class="thead-dark">
                        <th>S.N</th>
                        <th>Product Name</th>
                        <th>Status</th>
                        <th>Action</th>
                        </thead>
                        <tbody>
                        @if(count($product) > 0)
                            @foreach($product as $key=>$value)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$value->product_name}}</td>
                                    <td><span class="badge badge-{{$value->status == "active"?"success":"danger"}}">{{$value->status == "active"?"Publish":"Un-Publish"}}</span></td>
                                    <td>
                                        <a href="{{route('product.edit',$value->id)}}" class="btn btn-success btn-small" style="border-radius: 50px;"><i class="fa fa-edit"></i></a>
                                        <form method="DELETE" action="{{route('product.delete',$value->id)}}" class="float-left" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-small mr-2" style="border-radius: 50px"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>


            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
