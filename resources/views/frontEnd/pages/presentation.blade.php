@extends('frontEnd.master')
@section('title')
||Presentation
@endsection
@section('mainBody')
<section class="graphics_1 p-5">
    <div class="col-sm-12">
        <h2 class="display-4 text-center">Ms Presentation Page</h2>
    </div>
    <div class="row">
        @foreach($allVideo as $video)
        
        <video width="250" height="350" controls class="m-2">
            <source src="{{asset($video->image)}}" type="video/mp4">
            <source src="{{asset($video->image)}}" type="video/ogg">
        </video>
            
        
        @endforeach
    </div>
</section>
@endsection