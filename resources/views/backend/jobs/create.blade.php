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
                            <li class="breadcrumb-item active">Add Job</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="card">
            <div class="card-header" style="border-bottom: 1px solid #3c8dbc">
                <h3 class="card-title" >Add job</h3>
            </div>
            <div class="card-body">
                <div class="box box-primary">
                    <form method="post" action="{{route('jobs.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Company Name</label></div>
                            <div class="col-12 col-md-9">
                                <input value="{{old('company_name')}}" type="text" class="form-control form-control-sm form-control-dark" name="company_name" placeholder="Enter the company name....">
                                @error('company_name')
                                <span class="alert-danger col-12 col-md-9">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Company Logo</label></div>
                            <div class="col-12 col-md-9">
                                <input value="{{old('company_logo')}}" type="file" class="form-control form-control-sm form-control-dark" name="company_logo">
                                @error('company_logo')
                                <span class="alert-danger col-12 col-md-9">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Job title</label></div>
                            <div class="col-12 col-md-9">
                                <input value="{{old('job_title')}}" type="text" class="form-control form-control-sm form-control-dark" name="job_title" placeholder="Enter the job title....">
                                @error('job_title')
                                <span class="alert-danger col-12 col-md-9">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Location</label></div>
                            <div class="col-12 col-md-9">
                                <input value="{{old('location')}}" type="text" class="form-control form-control-sm form-control-dark" name="location" placeholder="Enter the job location">
                                @error('location')
                                <span class="alert-danger col-12 col-md-9">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="status" class="col-3">Job Level</label>
                            <div class="col-sm-9">
                                <select name="job_level" id="job_level" class="form-control">
                                    <option value="Senior">Senior Level</option>
                                    <option value="Mid">Mid Level</option>
                                    <option value="Junior">Junior Level</option>
                                </select>
                                @error('job_level')
                                <p class="alert-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Number of vacancy</label></div>
                            <div class="col-12 col-md-9">
                                <input value="{{old('number_of_vacancy')}}" type="number" class="form-control form-control-sm form-control-dark" name="number_of_vacancy" placeholder="Enter the number of vacancy....">
                                @error('number_of_vacancy')
                                <span class="alert-danger col-12 col-md-9">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="status" class="col-3">Employment Type</label>
                            <div class="col-sm-9">
                                <select name="employement_type" id="employement_type" class="form-control">
                                    <option value="full-time">Full Time</option>
                                    <option value="part-time">Part Time</option>
                                </select>
                                @error('employement_type')
                                <p class="alert-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Salary</label></div>
                            <div class="col-12 col-md-9">
                                <input value="{{old('salary')}}" type="text" class="form-control form-control-sm form-control-dark" name="salary" placeholder="Enter the job salary">
                                @error('salary')
                                <span class="alert-danger col-12 col-md-9">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Education Level</label></div>
                            <div class="col-12 col-md-9">
                                <input value="{{old('education_level')}}" type="text" class="form-control form-control-sm form-control-dark" name="education_level" placeholder="Enter the education level">
                                @error('education_level')
                                <span class="alert-danger col-12 col-md-9">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Experience</label></div>
                            <div class="col-12 col-md-9">
                                <input value="{{old('experience')}}" type="text" class="form-control form-control-sm form-control-dark" name="experience" placeholder="Enter the required experience">
                                @error('experience')
                                <span class="alert-danger col-12 col-md-9">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Expire Date</label></div>
                            <div class="col-12 col-md-9">
                                <input value="{{old('exp_date')}}" type="date" class="form-control form-control-sm form-control-dark" name="exp_date" placeholder="Enter the expire date">
                                @error('exp_date')
                                <span class="alert-danger col-12 col-md-9">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Job Description</label>
                            </div>
                            <div class="col-12 col-md-9"><textarea name="description" id="summernote" rows="9"
                                                                   placeholder="Enter job description..." class="form-control form-control-sm js-summernote" style="resize: none"></textarea>
                                @error('description')
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
