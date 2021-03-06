@extends('admin.master')
@section('title')
||Edit Image
@endsection
@section('mainContent')
<div class="createInfo">
    <hr>
    <h2 class="text-success text-center"></h2>
    <h2 class="text-info">|| Edit My Information..</h2>
    <div class="col-lg-6">
        {!!Form::open(['url'=>'/update-info','method'=>'POST','enctype'=>'multipart/form-data'])!!}
        <div class="form-group">
            <label class="control-label">First Name:</label>
            <input type="text" class="form-control" name="fname" value="{{$infos->fname}}">
        </div>
        <div class="form-group">
            <label class="control-label">Last Name:</label>
            <input type="text" class="form-control" name="lname" value="{{$infos->lname}}">
        </div>
        <div class="form-group">
            <input type="hidden" class="form-control" name="id" value="{{$infos->id}}">
        </div>
        <div class="form-group">
            <label class="control-label">E-mail:</label>
            <input type="email" class="form-control" name="email" value="{{$infos->email}}">
        </div>
        <div class="form-group">
            <label class="control-label">Village:</label>
            <input type="text" class="form-control" name="village" value="{{$infos->village}}">
        </div>
        <div class="form-group">
            <label class="control-label">Postal Code:</label>
            <input type="number" class="form-control" name="pcode" value="{{$infos->pcode}}">
        </div>
        <div class="form-group">
            <label class="control-label">District:</label>
            <input type="text" class="form-control" name="district" value="{{$infos->district}}">
        </div>
        <div class="form-group">
            <label class="control-label">Birth day:</label>
            <input type="date" class="form-control" name="birthday" value="{{$infos->birthday}}">
        </div>
        <div class="form-group">
            <label class="control-label">Designation:</label>
            <input type="text" class="form-control" name="designation" value="{{$infos->designation}}">
        </div>
        <div class="form-group">
            <label class="control-label">Image:</label>
            <img src="{{url($infos->file)}}" width="80" height="80">
            <input type="file" name="file">
        </div>
        <div class="form-group">
            <label class="control-label">Objective:</label>
            <textarea class="form-control" rows="4" name="objective" >{{$infos->objective}}</textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-info" name="submit">Update Info</button>
        </div>
        <hr>
        {!!Form::close()!!}
    </div>
</div>
@endsection

