@extends('admin.master')
@section('title')
User Message
@endsection
@section('mainContent')
<div class="imageManege">
    <hr>
    <h2 class="text-center text-info">|| Manage Message Here..</h2>
    <div class="col-12">
        <div class="row">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>E-mail</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
                @foreach($allMessage as $message)
                <tr>
                    <td>{{$message->id}}</td>
                    <td>{{$message->name}}</td>
                    <td>{{$message->email}}</td>
                    <td>{{$message->description}}</td>
                 <td>
                    <a href="#" class="btn btn-success" style="border-radius:0px" title="Edit">
                        <span class="glyphicon glyphicon-edit"></span>
                    </a>
                    <a href="#" class="btn btn-info" style="border-radius:0px" title="view">
                        <span class="glyphicon glyphicon-zoom-in"></span>
                    </a>
                    <a href="{{url('/delete-message/'.$message->id)}}" class="btn btn-danger" style="border-radius:0px" title="Delete">
                        <span class="glyphicon glyphicon-trash"></span>
                    </a>
                </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection