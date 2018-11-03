@extends('admin.master')
@section('title')
|| Upload Info
@endsection
@section('mainContent')
<div class="graphics">
    <hr>
    <h2 class="text-success text-center">{{Session::get('message')}}</h2>
    <h2 class="text-info">|| Upload Office Image..</h2>
    <div class="col-sm-6">
        <div class="row">
            <form action="{{url('/add-photo')}}" enctype="multipart/form-data" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label class="control-label">Title:</label>
                    <input type="text" name="title" class="form-control" placeholder="title">
                </div> 
                <div class="form-group">
                    <label class="control-label">Description:</label>
                    <textarea name="description" class="form-control" rows="4" placeholder="Write something about your work."></textarea>
                </div> 
                <div class="form-group">
                    <label class="control-label">Image:</label>
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


        
        
        
    