@extends('frontEnd.master')
@section('title')
|| About
@endsection
@section('mainBody')
<section class="aboutPage p-5 wow  bounceInUp " data-wow-duration="2s"">
    <div class="col-sm-12">
        <h2 class="text-center display-4">About My Company.</h2>
        <p class="lead">
            Before Lion Air Flight 610 crashed near Jakarta this week,
            apparently killing all 189 passengers and crew onboard, 
            the Indonesian airline had been banned from flying in European
            Union air space between 2007 and 2016. It and all Indonesian
            carriers had been banned from US air space for nine years until 2016.
            Aviation authorities in the United States and the European Union based
            their evaluations on national standards of safety for Indonesian carriers 
            compared to international standards. And both bodies said the country had cleared those hurdles.
        </p>
    </div>
</section>
<section class="about_2 p-5">
    <div class="row">
        <div class="col-md-6 wow  bounceInLeft" data-wow-duration="2s">
            <figure class="imghvr-zoom-out-flip-ver aboutImg">
                <img src="{{asset('public/')}}/img/4g-01.png" alt="" class="img-fluid">
                <figcaption>
                    <h3 class="in-fade-down ih-delay-sm">For the man ware</h3>
                    <p class="lead">Before Lion Air Flight 610 crashed near Jakarta this week,
                        apparently killing all 189 passengers and crew onboard, the Indonesian 
                        airline had been banned from flying in European Union air space between 2007 and 2016...</p>
                    <button class="btn btn-outline-warning">Read More</button>
                </figcaption>
            </figure>
        </div>
        <div class="col-md-6 aboutMore wow  bounceInRight" data-wow-duration="2s">
            <h2 class="text-center">About More.</h2>
            <p class="lead">
                Before Lion Air Flight 610 crashed near Jakarta this week,
                apparently killing all 189 passengers and crew onboard, 
                the Indonesian airline had been banned from flying in European
                Union air space between 2007 and 2016...</p>
            <p class="lead">
                Before Lion Air Flight 610 crashed near Jakarta this week,
                apparently killing all 189 passengers and crew onboard, 
                the Indonesian airline had been banned from flying in European
                Union air space between 2007 and 2016...
            </p>
            <button class="btn btn-outline-info">More Info</button>
        </div>
    </div>
</section>
@endsection