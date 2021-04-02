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
                            <li class="breadcrumb-item active">Add Product Details</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="card">
            <div class="card-header" style="border-bottom: 1px solid #3c8dbc">
                <h3 class="card-title" >Add Product Details</h3>
            </div>
            <div class="card-body">
                <div class="box box-primary">
                    <form method="post" action="{{route('productdetail.store')}}">
                        @csrf
                        <div class="form-group row">
                            <label for="status" class="col-3">Product Name</label>
                            <div class="col-sm-9">
                                <select name="product_name" id="product_name" class="form-control">
                                    <?php
                                    use App\Models\Product;
                                    $product = Product::where('status', 'active')->get();
                                    ?>
                                    @if(count($product) > 0)
                                        @foreach($product as $key=>$value)
                                            <option value="{{$value->id}}">{{$value->product_name}}</option>
                                        @endforeach
                                    @endif
                                </select>
                                @error('product_name')
                                <p class="alert-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Product Details</label>
                            </div>
                            <div class="col-12 col-md-9"><textarea name="product_detail" id="summernote" rows="9"
                                                                   class="form-control form-control-sm js-summernote" style="resize: none"></textarea>
                                @error('product_detail')
                                <span class="alert-danger col-12 col-md-9">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="status" class="col-3">Status</label>
                            <div class="col-sm-9">
                                <select name="status" id="status" class="form-control">
                                    <option value="active">Publish</option>
                                    <option value="inactive">Un-Publish</option>
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
