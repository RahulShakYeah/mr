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
                            <li class="breadcrumb-item active">Update Slider photo</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="card">
            <div class="card-header" style="border-bottom: 1px solid #3c8dbc">
                <h3 class="card-title" >Update Photo</h3>
            </div>
            <div class="card-body">
                <div class="box box-primary">
                    <form method="post" action="{{route('slider.update',$slider->id)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Primary Text</label></div>
                            <div class="col-12 col-md-9">
                                <input value="{{$slider->primary_text}}" type="text" class="form-control form-control-sm form-control-dark" name="primary_text" placeholder="Enter the primary text....">
                                @error('primary_text')
                                <span class="alert-danger col-12 col-md-9">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Secondary Text</label></div>
                            <div class="col-12 col-md-9">
                                <input value="{{$slider->secondary_text}}" type="text" class="form-control form-control-sm form-control-dark" name="secondary_text" placeholder="Enter the secondary text....">
                                @error('secondary_text')
                                <span class="alert-danger col-12 col-md-9">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Priority</label></div>
                            <div class="col-12 col-md-9">
                                <input value="{{$slider->priority}}" type="number" class="form-control form-control-sm form-control-dark" name="priority" placeholder="Enter the priority">
                                @error('icon')
                                <span class="alert-danger col-12 col-md-9">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Photo</label></div>
                            <div class="col-9 col-md-9">
                                <input value="{{old('photo')}}" type="file" class="form-control form-control-sm form-control-dark" name="photo">
                                @error('photo')
                                <span class="alert-danger col-12 col-md-9">{{$message}}</span>
                                @enderror
                                <img src="{{asset('uploads/homeslider')}}/{{$slider->image}}" width="200px" height="150px" alt="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="status" class="col-3">Status</label>
                            <div class="col-sm-9">
                                <select name="status" id="status" class="form-control">
                                    <option value="active" {{$slider->status == 'active'?'selected':''}}>Publish</option>
                                    <option value="inactive" {{$slider->status == 'inactive'?'selected':''}}>Un-Publish</option>
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
