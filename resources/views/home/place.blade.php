@extends('layouts.home')

@section('title', 'Mekanlar '.$data->title)

@section('description'){{$data->description}}@endsection

@section('keywords',$data->description)
@include('home._header')

@section('content')
    <section id="subintro">
        <div class="container">
            <div class="row">
                <div class="span8">
                    <ul class="breadcrumb">
                        <li><a href="{{route('home')}}"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
                        <li><a href="{{route('place')}}">{{$data->title}} Mekanlar</a><i class="icon-angle-right"></i></li>
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
                        <div class="span3 features e_pulse">
                            <img src="assets/img/dummies/img1.jpg" alt="" />
                            <div class="box">
                                <div class="divcenter">
                                    <a href="#"><i class="icon-circled icon-48 icon-magic active icon"></i></a>
                                    <h4>Responsive <br />twitter bootstrap</h4>
                                </div>
                            </div>
                        </div>

                        <div class="span3 features e_pulse">
                            <img src="assets/img/dummies/img2.jpg" alt="" />
                            <div class="box">
                                <div class="divcenter">
                                    <a href="#"><i class="icon-circled icon-48 icon-briefcase icon"></i></a>
                                    <h4>Unparalleled <br />premium support</h4>
                                </div>
                            </div>
                        </div>

                        <div class="span3 features e_pulse">
                            <img src="assets/img/dummies/img3.jpg" alt="" />
                            <div class="box">
                                <div class="divcenter">
                                    <a href="#"><i class="icon-circled icon-48 icon-cogs icon"></i></a>
                                    <h4>Valid <br />HTML code</h4>
                                </div>
                            </div>
                        </div>

                        <div class="span3 features e_pulse">
                            <img src="assets/img/dummies/img4.jpg" alt="" />
                            <div class="box">
                                <div class="divcenter">
                                    <a href="#"><i class="icon-circled icon-48 icon-bullhorn icon"></i></a>
                                    <h4>Flexible <br />multi usage</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

