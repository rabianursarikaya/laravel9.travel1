@extends('layouts.home')

@section('title', 'FAQ '.$setting->title)

@section('description'){{$setting->description}}@endsection

@section('keywords',$setting->description)
@include('home._header')

@section('content')
    <section id="subintro">
        <div class="container">
            <div class="row">
                <div class="span8">
                    <ul class="breadcrumb">
                        <li><a href="{{route('home')}}"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
                        <li><a href="{{route('faq')}}">FAQ</a><i class="icon-angle-right"></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="maincontent">
        <div class="container">
            <div class="row">
                <div class="span16">


                    <div class="clearfix">
                    </div>
                    <div class="row">
                        <div class="span16">


                            @foreach($datalist as $rs)
                                <h2>{{$rs->question}}</h2>
                                {!! $rs->answer !!}
                                <hr>
                            @endforeach

                        </div>

                    </div>


                </div>
            </div>
        </div>
    </section>
@endsection

