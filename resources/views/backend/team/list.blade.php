@extends('layouts.backend')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h2 class="mt-3 mb-2">Our Team List
                            <a href="{{route('team.create')}}" class="btn btn-success btn-sm float-right"><i
                                    class="fa fa-plus"></i> Add team member</a>
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
                        <th>Name</th>
                        <th>Photo</th>
                        <th>Position</th>
                        <th>Email</th>
                        <th>Linked In</th>
                        <th>Mobile</th>
                        <th>Status</th>
                        <th>Action</th>
                        </thead>
                        <tbody>
                        @if(count($ourteam) > 0)
                            @foreach($ourteam as $key=>$value)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$value->name}}</td>
                                    <td><img src="{{asset('uploads/team/'.$value->photo)}}" width="100px" height="100px" alt=""></td>
                                    <td><span class="badge badge-success">{{$value->position}}</span></td>
                                    <td>{{$value->email}}</td>
                                    <td>{{$value->linkedin == null?'No link':$value->linkedin}}</td>
                                    <td>{{$value->phone}}</td>
                                    <td><span class="badge badge-{{$value->status == "active"?"success":"danger"}}">{{$value->status == "active"?"Publish":"Un-Publish"}}</span></td>
                                    <td>
                                        <a href="{{route('team.edit',$value->id)}}" class="btn btn-success btn-small" style="border-radius: 50px;"><i class="fa fa-edit"></i></a>
                                        <form method="DELETE" action="{{route('team.delete',$value->id)}}" class="float-left" method="post">
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
