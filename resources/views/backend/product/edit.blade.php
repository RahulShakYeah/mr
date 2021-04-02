@extends('layouts.backend')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        {{--                        <h1 class="m-0 text-dark">Add Services</h1>--}}
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Edit Product Name</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="card">
            <div class="card-header" style="border-bottom: 1px solid #3c8dbc">
                <h3 class="card-title" >Edit Product Name</h3>
            </div>
            <div class="card-body">
                <div class="box box-primary">
                    <form method="post" action="">
                        @csrf
                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Product Name</label></div>
                            <div class="col-12 col-md-9">
                                <input value="{{$product->product_name}}" type="text" class="form-control form-control-sm form-control-dark" name="product_name" placeholder="Enter the product name....">
                                @error('product_name')
                                <span class="alert-danger col-12 col-md-9">{{$message}}</span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="status" class="col-3">Status</label>
                            <div class="col-sm-9">
                                <select name="status" id="status" class="form-control">
                                    <option value="active" {{$product->status == "active"?"selected":""}}>Publish</option>
                                    <option value="inactive" {{$product->status == "inactive"?"selected":""}}>Un-Publish</option>
                                </select>
                                @error('status')
                                <p class="alert-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-9 offset-3">
                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-paper-plane"></i> Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <div class="card-footer">
                <small><em>M AND R SOLUTION &copy; 2021</em></small>
            </div>
        </div>
        <!-- /.content -->
    </div>
@endsection
