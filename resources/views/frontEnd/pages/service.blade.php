@extends('frontEnd.master')
@section('title')
|| Service
@endsection
@section('mainBody')
<div class="servicePage p-5">
    <div class="page_1">
        <div class="display-4 text-center mb-4">Our Services</div>
        <div class="row">
            <div class="col-sm-6">
                <div class="row mb-4">
                    <div class="col-sm-2">
                        <img src="{{asset('public/')}}/img/biscuit-2-01.png" alt="" class="img-fluid"/>
                    </div>
                    <div class="col-sm-10">
                        <h4 class="designText">Web design.</h4>
                        <p class="lead">
                            Apple Inc refreshed some of its lower-profile
                            products at a New York event on Tuesday, 
                            adding iPhone features like facial recognition
                            to the iPad Pro and faster  update in years.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row mb-4">
                    <div class="col-sm-2">
                       <img src="{{asset('public/')}}/img/tree-float_2.png" alt="" class="img-fluid"/>
                    </div>
                    <div class="col-sm-10">
                        <h4 class="designText">Web development.</h4>
                        <p class="lead">
                            Apple Inc refreshed some of its lower-profile
                            products at a New York event on Tuesday, 
                            adding iPhone features like facial recognition
                            to the iPad Pro and faster processors and better
                            displays to some Mac computers that have not had a major update in years.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row mb-4">
                    <div class="col-sm-2">
                        <img src="{{asset('public/')}}/img/bkash.png" alt="" class="img-fluid"/>
                    </div>
                    <div class="col-sm-10">
                        <h4 class="designText">Graphics Design.</h4>
                        <p class="lead">
                            Apple Inc refreshed some of its lower-profile
                            products at a New York event on Tuesday, 
                            adding iPhone features like facial recognition
                            to the iPad Pro and faster processors and better
                            displays to some Mac computers that have not had a major update in years.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row mb-4">
                    <div class="col-sm-2">
                        <img src="{{asset('public/')}}/img/flower.png" alt="" class="img-fluid"/>
                    </div>
                    <div class="col-sm-10">
                        <h4 class="designText">Ms Office Works.</h4>
                        <p class="lead">
                            Apple Inc refreshed some of its lower-profile
                            products at a New York event on Tuesday, 
                            adding iPhone features like facial recognition
                            to the iPad Pro and faster processors and better
                            displays to some Mac computers that have not had a major update in years.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection