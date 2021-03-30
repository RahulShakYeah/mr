@extends('layouts.backend')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Contact Message</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Contact Message</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <table class="table table-bordered table-striped" id="usertable">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">S.N</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @include('backend.include.message')
                    @if(count($contact)>0)

                        @foreach($contact as $key=>$value)
                            <tr>
                                <th scope="row">{{$key+1}}</th>
                                <td>{{$value->name}}</td>
                                <td>{{$value->email}}</td>
                                <td>{{$value->subject}}</td>
                                <td><!-- Button trigger modal -->
                                    <button type="button" class="btn btn-success btn-sm mr-1" data-toggle="modal" data-target="#code{{$value->id}}" style="border-radius: 50px"><i class="fas fa-copy"></i></button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="code{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">{{$value->subject}}</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <b>Name:</b>{{$value->name}}<br>
                                                    <b>Email:</b>{{$value->email}}<br>
                                                    <b>Subject:</b>{{$value->subject}}<br>
                                                    <b>Message:</b>{{$value->message}}<br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <form method="DELETE" action="{{route('contact.delete',$value->id)}}" class="float-left" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm mr-1" style="border-radius: 50px"><i class="fa fa-trash"></i></button>
                                    </form></td>
                            </tr>
                        @endforeach
                        @else
                        <tr>
                            <td>No any message</td>
                        </tr>
                    @endif
                    </tbody>
                </table>



            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
