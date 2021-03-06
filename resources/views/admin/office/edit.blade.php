@extends('admin.master')
@section('title')
||Edit Info
@endsection
@section('mainContent')
<div class="graphics">
    <hr>
    <h2 class="text-success text-center">{{Session::get('message')}}</h2>
    <h2 class="text-info">|| Upload Office Image..</h2>
    <div class="col-sm-6">
        <div class="row">
            <form action="{{url('/update-office')}}" enctype="multipart/form-data" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label class="control-label">Title:</label>
                    <input type="text" name="title" class="form-control" value="{{$office->title}}">
                    <input type="hidden" name="id" class="form-control" value="{{$office->id}}">
                </div> 
                <div class="form-group">
                    <label class="control-label">Description:</label>
                    <textarea name="description" class="form-control" rows="4" >{{$office->description}}</textarea>
                </div> 
                <div class="form-group">
                    <img src="{{asset($office->image)}}" width="80" height="80">
                    <input type="file" name="image">
                </div>
                <div class="form-group">
                    <button class="btn btn-success" name="submit">Add Photo</button>
                </div>    
            </form>
        </div>
    </div>
</div>
@endsection


        
        
        
    