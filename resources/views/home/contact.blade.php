@extends('layouts.home')

@section('title', 'Contact '.$setting->title)

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
                        <li><a href="{{route('contact')}}">Contact Us</a><i class="icon-angle-right"></i></li>
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

                            {!! $setting->contact !!}
                            <h1>İletişim Formu</h1>
                            @include('home.message')
                            <form action="{{route('sendmessage')}}" method="post" role="form" class="contactForm">
                                @csrf
                                <div class="row">
                                    <div class="span4 form-group">
                                        <input type="text" name="name" class="input-block-level" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                        <div class="validation"></div>
                                    </div>

                                    <div class="span4 form-group">
                                        <input type="email" class="input-block-level" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                        <div class="validation"></div>
                                    </div>
                                    <div class="span8 form-group">
                                        <input type="text" class="input-block-level" name="phone" id="phone" placeholder="Phone" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                        <div class="validation"></div>
                                    </div>
                                    <div class="span8 form-group">
                                        <input type="text" class="input-block-level" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                        <div class="validation"></div>
                                    </div>
                                    <div class="span8 form-group">
                                        <textarea class="input-block-level" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                        <div class="validation"></div>
                                        <div class="text-center">
                                            <button class="btn btn-theme" type="submit">Send a message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>

                    </div>


                </div>
            </div>
        </div>
    </section>
@endsection

