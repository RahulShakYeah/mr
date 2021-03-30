@extends('layouts.backend')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Upload tutorial video</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Tutorial video</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="card">
            <div class="card-header" style="border-bottom: 1px solid #3c8dbc">
                <h3 class="card-title" >Upload Video(Youtube Only)</h3>
            </div>
            <div class="card-body">
                <div class="box box-primary">
                    <form action="{{route('tutorial.store')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Enter video title">
                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input value="{{old('videourl')}}" type="url" class="form-control  @error('title') is-invalid @enderror" name="videourl" placeholder="Enter the video url....">
                                @error('videourl')
                                <span class="alert-danger col-12 col-md-9">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <select name="status" id="status" class="form-control">
                                <option value="active">Publish</option>
                                <option value="inactive">Un-Publish</option>
                            </select>
                            @error('status')
                            <p class="alert-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="text-center"><button button type="submit" class="btn btn-primary" id="form-submit" class="filled-button">Submit</button></div>
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
