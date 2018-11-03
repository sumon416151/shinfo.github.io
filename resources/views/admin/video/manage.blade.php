@extends('admin.master')
@section('title')
|| Manage Video
@endsection
@section('mainContent')
<div class="imageManege">
    <h2 class="text-center text-info">Manage Video Here..</h2>
    <div class="col-12">
        <div class="row">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Video</th>
                    <th>Action</th>
                </tr>
                @foreach($allVideo as $video)
                <tr>
                    <td>{{$video->title}}</td>
                    <td>{{$video->description}}</td>
                    <td>
                           <video width="150" height="100" controls>
                            <source src="{{asset($video->image)}}" type="video/mp4">
                            <source src="{{asset($video->image)}}" type="video/ogg">
                          </video>
                    </td>
                 <td>
                    <a href="{{url('/edit-video/'.$video->id)}}" class="btn btn-success" style="border-radius:0px" title="Edit">
                        <span class="glyphicon glyphicon-edit"></span>
                    </a>
                    <a href="#" class="btn btn-info" style="border-radius:0px" title="view">
                        <span class="glyphicon glyphicon-zoom-in"></span>
                    </a>
                    <a href="{{url('/delete-video/'.$video->id)}}" class="btn btn-danger" style="border-radius:0px" title="Delete">
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
