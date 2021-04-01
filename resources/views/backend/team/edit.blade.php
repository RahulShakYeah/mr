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
                            <li class="breadcrumb-item active">Edit Team Member Details</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="card">
            <div class="card-header" style="border-bottom: 1px solid #3c8dbc">
                <h3 class="card-title" >Edit team member details</h3>
            </div>
            <div class="card-body">
                <div class="box box-primary">
                    <form method="post" action="{{route('team.update',$ourteam->id)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Name</label></div>
                            <div class="col-12 col-md-9">
                                <input value="{{$ourteam->name}}" type="text" class="form-control form-control-sm form-control-dark" name="name" placeholder="Enter the team member name....">
                                @error('name')
                                <span class="alert-danger col-12 col-md-9">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Photo</label></div>
                            <div class="col-12 col-md-9">
                                <input type="file" class="form-control form-control-sm form-control-dark" name="photo">
                                @error('photo')
                                <span class="alert-danger col-12 col-md-9">{{$message}}</span>
                                @enderror
                                <img src="{{asset('uploads/team/'.$ourteam->photo)}}" width="200px" height="125px" alt="">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Position</label></div>
                            <div class="col-12 col-md-9">
                                <input value="{{$ourteam->position}}" type="text" class="form-control form-control-sm form-control-dark" name="position" placeholder="Enter the team member position....">
                                @error('position')
                                <span class="alert-danger col-12 col-md-9">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Email</label></div>
                            <div class="col-12 col-md-9">
                                <input value="{{$ourteam->email}}" type="email" class="form-control form-control-sm form-control-dark" name="email" placeholder="Enter the team member email....">
                                @error('email')
                                <span class="alert-danger col-12 col-md-9">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">LinkedIn</label></div>
                            <div class="col-12 col-md-9">
                                <input value="{{$ourteam->linkedin}}" type="text" class="form-control form-control-sm form-control-dark" name="linkedin" placeholder="Enter the team member linkedin....">
                                @error('linkedin')
                                <span class="alert-danger col-12 col-md-9">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Phone</label></div>
                            <div class="col-12 col-md-9">
                                <input value="{{$ourteam->phone}}" type="number" class="form-control form-control-sm form-control-dark" name="phone" placeholder="Enter the team member phone number....">
                                @error('phone')
                                <span class="alert-danger col-12 col-md-9">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="status" class="col-3">Status</label>
                            <div class="col-sm-9">
                                <select name="status" id="status" class="form-control">
                                    <option value="active" {{$ourteam->status == "active"?"selected":""}}>Publish</option>
                                    <option value="inactive" {{$ourteam->status == "inactive"?"selected":""}}>Un-Publish</option>
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
