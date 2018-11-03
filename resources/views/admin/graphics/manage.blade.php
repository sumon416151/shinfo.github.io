@extends('admin.master')
@section('title')
||Manage Image
@endsection
@section('mainContent')
<div class="imageManege">
    <hr>
    <h2 class="text-center text-info">Manage Photo Here..</h2>
    <h2 class="text-center text-info">{{Session::get('message')}}</h2>
    <div class="col-12">
        <div class="row">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                @foreach($allImage as $image)
                <tr>
                    <td>{{$image->title}}</td>
                    <td>{{$image->description}}</td>
                    <td><img src="{{asset($image->image)}}" alt="{{asset($image->image)}}" width="80" height="80"></td>
                 <td>
                    <a href="{{url('/edit-graphics/'.$image->id)}}" class="btn btn-success" style="border-radius:0px" title="Edit">
                        <span class="glyphicon glyphicon-edit"></span>
                    </a>
                    <a href="#" class="btn btn-info" style="border-radius:0px" title="view">
                        <span class="glyphicon glyphicon-zoom-in"></span>
                    </a>
                    <a href="{{url('/delete-graphics/'.$image->id)}}" class="btn btn-danger" style="border-radius:0px" title="Delete">
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
