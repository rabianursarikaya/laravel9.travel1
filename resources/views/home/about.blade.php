@extends('layouts.home')

@section('title', 'About Us')
@include('home._header')
@section('content')
    <section id="subintro">
        <div class="container">
            <div class="row">
                <div class="span8">
                    <ul class="breadcrumb">
                        <li><a href="{{route('home')}}"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
                        <li><a href="{{route('aboutus')}}">About Us</a><i class="icon-angle-right"></i></li>
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

                            {!! $setting->aboutus !!}


                        </div>

                    </div>


                </div>
            </div>
        </div>
    </section>
@endsection

