@extends('front.layout')
@section('title',$Page->title)

@section('content')
    <section class="container">
        <div class="row">
            <h2 class="text-uppercase adress-reco mt-5">{{$Page->title}}</h2>
            <div class="line-reco"></div>
        </div>

        <div class="row">
            @if(isset($Page->image))
                <div class="col-md-6 col-lg-6 col-12 px-0">
                    {!! $Page->description !!}
                </div>
                <div class="col-md-6 col-lg-6 col-12 ">
                        <img src="{{$Page->image}}" alt="" class="w-100">
                </div>
            @else
                <div class="col-md-12 col-12">
                    {!! $Page->description !!}
                </div>
            @endif
        </div>
    </section>

    @endsection
