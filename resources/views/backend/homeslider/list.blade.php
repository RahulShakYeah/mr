@extends('layouts.backend')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h2 class="mt-3 mb-2">Slider List
                            <a href="{{route('slider.create')}}" class="btn btn-success btn-sm float-right"><i
                                    class="fa fa-plus"></i> Add Photo</a>
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
                        <th>Primary text</th>
                        <th>Secondary text</th>
                        <th>Priority</th>
                        <th>Photo</th>
                        <th>Status</th>
                        <th>Action</th>
                        </thead>
                        <tbody>
                        @if(count($slider) > 0)
                            @foreach($slider as $key=>$value)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$value->primary_text}}</td>
                                    <td>{{$value->secondary_text}}</td>
                                    <td>{{$value->priority}}</td>
                                    <td><img src="{{asset('uploads/homeslider/')}}/{{$value->image}}" width="100px" height="100px" alt=""></td>
                                    <td><span class="badge badge-{{$value->status == "active"?"success":"danger"}}">{{$value->status == "active"?"Publish":"Un-Publish"}}</span></td>
                                    <td>
                                        <a href="{{route('slider.edit',$value->id)}}" class="btn btn-success btn-small" style="border-radius: 50px;"><i class="fa fa-edit"></i></a>
                                        <form method="DELETE" action="{{route('slider.delete',$value->id)}}" class="float-left" method="post">
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
