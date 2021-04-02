@extends('layouts.backend')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h2 class="mt-3 mb-2">Users List
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
                        <th>Email</th>
                        <th>Action</th>
                        </thead>
                        <tbody>
                        @if(count($alluser))
                            @foreach($alluser as $key=>$value)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$value->name}}</td>
                                    <td>{{$value->email}}</td>
                                    <td>
                                        <form method="DELETE" action="{{route('delete.user',$value->id)}}" class="float-left" method="post">
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
