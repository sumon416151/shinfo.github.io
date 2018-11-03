@extends('frontEnd.master')
@section('title')
Graphics
@endsection
@section('mainBody')
<section class="graphics_1 p-5">
    <div class="col-sm-12">
        <h2 class="display-4 text-center">Graphics Page</h2>
    </div>
    <div class="row">
        @foreach($allImage as $image)
        <figure class="mix imghvr-zoom-out ">
            <img src="{{url($image->image)}}" width="240" height="300">
            <figcaption class="d-inline">
                <i class="fa fa-search"></i></i>
                <i class="fa fa-download"></i>
            </figcaption>
        </figure>
        @endforeach
    </div>
</section>
@endsection