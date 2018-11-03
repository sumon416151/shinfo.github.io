@extends('admin.master')
@section('title')
||Edit Image
@endsection
@section('mainContent')
<div class="graphics">
    <hr>
    
    <h2 class="text-info">|| Edit Slider Image..</h2>
    <div class="col-sm-6">
        <div class="row">
            <form action="{{url('/update-slider')}}" enctype="multipart/form-data" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label class="control-label">Title:</label>
                    <input type="text" name="title" class="form-control" value="{{$slider->title}}">
                    <input type="hidden" name="id" class="form-control" value="{{$slider->id}}">
                </div> 
                <div class="form-group">
                    <label class="control-label">Description:</label>
                    <textarea name="description" class="form-control" rows="4">{{$slider->description}}</textarea>
                </div> 
                <div class="form-group">
                    <img src="{{url($slider->image)}}" width="80" height="80">
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


        
        
        
    