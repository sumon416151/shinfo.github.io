@extends('frontEnd.master')
@section('title')
|| Contact
@endsection
@section('mainBody')
<div class="contact_1 p-5">
    <div class="col-sm-12">
        <div class="display-4 text-center">
            Contact Us.
        </div>
        <h2 class="text-info text-center">{{Session::get('message')}}</h2>
        {!!Form::Open(['url'=>'/send-message','method'=>'POST'])!!}
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Name :</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Name" >
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">E-mail :</label>
                        <input type="text" class="form-control" name="email" placeholder="E-mail">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="">Message</label>
                <textarea name="description" rows="8" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for=""></label>
                <button class="btn btn-outline-info" type="submit" name="submit">Send Message</button>
            </div>
        {!!Form::close()!!}
    </div>
</div>
@endsection