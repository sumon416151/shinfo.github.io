@extends('admin.master')
@section('title')
||Upload Information
@endsection
@section('mainContent')
<div class="createInfo">
    <hr>
    <h2 class="text-success text-center">{{Session::get('message')}}</h2>
    <h2 class="text-info">|| Adding My Information..</h2>
    <div class="col-lg-6">
        {!!Form::open(['url'=>'/save-info','method'=>'POST','enctype'=>'multipart/form-data'])!!}
        <div class="form-group">
            <label class="control-label">First Name:</label>
            <input type="text" class="form-control" name="fname" placeholder="Enter First Name">
        </div>
        <div class="form-group">
            <label class="control-label">Last Name:</label>
            <input type="text" class="form-control" name="lname" placeholder="Enter Last Name">
        </div>
        <div class="form-group">
            <label class="control-label">E-mail:</label>
            <input type="email" class="form-control" name="email" placeholder="Enter Email Name">
        </div>
        <div class="form-group">
            <label class="control-label">Village:</label>
            <input type="text" class="form-control" name="village" placeholder="Enter Village Name">
        </div>
        <div class="form-group">
            <label class="control-label">Postal Code:</label>
            <input type="number" class="form-control" name="pcode" placeholder="Enter Postal Code">
        </div>
        <div class="form-group">
            <label class="control-label">District:</label>
            <input type="text" class="form-control" name="district" placeholder="Enter District Name">
        </div>
        <div class="form-group">
            <label class="control-label">Birth day:</label>
            <input type="date" class="form-control" name="birthday" placeholder="Enter Birth Day">
        </div>
        <div class="form-group">
            <label class="control-label">Designation:</label>
            <input type="text" class="form-control" name="designation" placeholder="Enter Designation Name">
        </div>
        <div class="form-group">
            <label class="control-label">Image:</label>
            <input type="file" name="file">
        </div>
        <div class="form-group">
            <label class="control-label">Objective:</label>
            <textarea class="form-control" rows="4" name="objective" placeholder="Write something about your gole."></textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-info" name="submit">Add Info</button>
        </div>
        <hr>
        {!!Form::close()!!}
    </div>
</div>
@endsection

