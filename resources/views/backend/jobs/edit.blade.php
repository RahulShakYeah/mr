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
                            <li class="breadcrumb-item active">Edit Job</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="card">
            <div class="card-header" style="border-bottom: 1px solid #3c8dbc">
                <h3 class="card-title" >Edit job</h3>
            </div>
            <div class="card-body">
                <div class="box box-primary">
                    <form method="post" action="" enctype="multipart/form-data">
                        @csrf
                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Company Name</label></div>
                            <div class="col-12 col-md-9">
                                <input value="{{$jobs->company_name}}" type="text" class="form-control form-control-sm form-control-dark" name="company_name" placeholder="Enter the company name....">
                                @error('company_name')
                                <span class="alert-danger col-12 col-md-9">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Company Logo</label></div>
                            <div class="col-12 col-md-9">
                                <input type="file" class="form-control form-control-sm form-control-dark" name="company_logo">
                                @error('company_logo')
                                <span class="alert-danger col-12 col-md-9">{{$message}}</span>
                                @enderror
                                <img src="{{asset('uploads/companylogo')}}/{{$jobs->company_logo}}" width="200px" height="125px" alt="">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Job title</label></div>
                            <div class="col-12 col-md-9">
                                <input value="{{$jobs->job_title}}" type="text" class="form-control form-control-sm form-control-dark" name="job_title">
                                @error('job_title')
                                <span class="alert-danger col-12 col-md-9">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Location</label></div>
                            <div class="col-12 col-md-9">
                                <input value="{{$jobs->location}}" type="text" class="form-control form-control-sm form-control-dark" name="location" placeholder="Enter the job location">
                                @error('location')
                                <span class="alert-danger col-12 col-md-9">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="status" class="col-3">Job Level</label>
                            <div class="col-sm-9">
                                <select name="job_level" id="job_level" class="form-control">
                                    <option value="Senior" {{$jobs->job_level == "Senior"?'selected':''}}>Senior Level</option>
                                    <option value="Mid" {{$jobs->job_level == "Mid"?'selected':''}}>Mid Level</option>
                                    <option value="Junior" {{$jobs->job_level == "Junior"?'selected':''}}>Junior Level</option>
                                </select>
                                @error('job_level')
                                <p class="alert-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Number of vacancy</label></div>
                            <div class="col-12 col-md-9">
                                <input value="{{$jobs->number_of_vacancy}}" type="number" class="form-control form-control-sm form-control-dark" name="number_of_vacancy">
                                @error('number_of_vacancy')
                                <span class="alert-danger col-12 col-md-9">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="status" class="col-3">Employment Type</label>
                            <div class="col-sm-9">
                                <select name="employement_type" id="employement_type" class="form-control">
                                    <option value="full-time" {{$jobs->employement_type=="full-time"?'selected':''}}>Full Time</option>
                                    <option value="part-time" {{$jobs->employement_type=="part-time"?'selected':''}}>Part Time</option>
                                </select>
                                @error('employement_type')
                                <p class="alert-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Salary</label></div>
                            <div class="col-12 col-md-9">
                                <input value="{{$jobs->salary}}" type="text" class="form-control form-control-sm form-control-dark" name="salary">
                                @error('salary')
                                <span class="alert-danger col-12 col-md-9">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Education Level</label></div>
                            <div class="col-12 col-md-9">
                                <input value="{{$jobs->education_level}}" type="text" class="form-control form-control-sm form-control-dark" name="education_level" placeholder="Enter the education level">
                                @error('education_level')
                                <span class="alert-danger col-12 col-md-9">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Experience</label></div>
                            <div class="col-12 col-md-9">
                                <input value="{{$jobs->experience}}" type="text" class="form-control form-control-sm form-control-dark" name="experience" placeholder="Enter the required experience">
                                @error('experience')
                                <span class="alert-danger col-12 col-md-9">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Expire Date</label></div>
                            <div class="col-12 col-md-9">
                                <input value="{{$jobs->exp_date}}" type="date" class="form-control form-control-sm form-control-dark" name="exp_date" placeholder="Enter the expire date">
                                @error('exp_date')
                                <span class="alert-danger col-12 col-md-9">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Job Description</label>
                            </div>
                            <div class="col-12 col-md-9"><textarea name="description" id="summernote" rows="9"
                                                                   class="form-control form-control-sm js-summernote" style="resize: none">{!! html_entity_decode($jobs->job_description) !!}</textarea>
                                @error('description')
                                <span class="alert-danger col-12 col-md-9">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="status" class="col-3">Status</label>
                            <div class="col-sm-9">
                                <select name="status" id="status" class="form-control">
                                    <option value="active" {{$jobs->status == "active"?"selected":""}}>Publish</option>
                                    <option value="inactive" {{$jobs->status == "inactive"?"selected":""}}>Un-Publish</option>
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
