@extends('admin.master')
@section('title')
||Edit Video
@endsection
@section('mainContent')
<div class="graphics">
    <hr>
    
    <h2 class="text-info">|| Edit Video Info..</h2>
    <div class="col-sm-6">
        <div class="row">
            <form action="{{url('/update-video')}}" enctype="multipart/form-data" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label class="control-label">Title:</label>
                    <input type="text" name="title" class="form-control" value="{{$video->title}}">
                    <input type="hidden" name="id" class="form-control" value="{{$video->id}}">
                </div> 
                <div class="form-group">
                    <label class="control-label">Description:</label>
                    <textarea name="description" class="form-control" rows="4">{{$video->description}}</textarea>
                </div> 
                <div class="form-group">
                    <video width="150" height="100" controls>
                        <source src="{{asset($video->image)}}" type="video/mp4">
                        <source src="{{asset($video->image)}}" type="video/ogg">
                    </video><br>
                    <input type="file" name="image">
                </div>
                <div class="form-group">
                    <button class="btn btn-success" name="submit">Update Info</button>
                </div>    
            </form>
        </div>
    </div>
</div>
@endsection


        
        
        
    