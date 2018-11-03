@extends('admin.master')
@section('title')
||Upload Video
@endsection
@section('mainContent')
<div class="graphics">
    <hr>
    <h2 class="text-success text-center">{{Session::get('message')}}</h2>
    <h2 class="text-info">|| Upload Your Video..</h2>
    <div class="col-sm-6">
        <div class="row">
            <form action="{{url('/save-video')}}" enctype="multipart/form-data" method="POST">
                {{csrf_field()}}
                <div class="form-group {{ $errors->has('title') ? ' hass-error' : '' }}">
                    <label class="control-label">Title:</label>
                    <input type="text" name="title" class="form-control " placeholder="Ttle here">
                    @if ($errors->has('title'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                    @endif
                </div> 
                <div class="form-group">
                    <label class="control-label">Description:</label>
                    <textarea name="description" class="form-control" rows="4" placeholder="Wirte something about it."></textarea>
                </div> 
                <div class="form-group {{ $errors->has('title') ? ' hass-error' : '' }}">
                    <label class="control-label">Image:</label>
                    <input type="file" name="image">
                    @if ($errors->has('image'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('image') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <button class="btn btn-success" name="submit">Save Slider</button>
                </div>    
            </form>
        </div>
    </div>
</div>
@endsection


        
        
        
    