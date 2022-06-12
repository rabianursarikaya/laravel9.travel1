@extends('layouts.home')

@section('title', 'User Profile')


@section('content')
    <section id="subintro">
        <div class="container">
            <div class="row">
                <div class="span8">
                    <ul class="breadcrumb">
                        <li><a href="{{route('home')}}"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
                        <li><a href="#">User Profile</a><i class="icon-angle-right"></i></li>
                        <li class="active">Portfolio detail</li>
                    </ul>
                </div>
                <div class="span4">
                    <div class="search">
                        <form class="input-append">
                            <input class="search-form" id="appendedPrependedInput" type="text" placeholder="Search here.." />
                            <button class="btn btn-dark" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="maincontent">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <article>
                        <div class="heading">
                            <h4>Single portfolio name here</h4>
                        </div>
                        <div class="clearfix">
                        </div>
                        <div class="row">
                            <div class="span12">


                        </div>
                    </article>
                    <!-- end article full post -->
                </div>
            </div>
        </div>
    </section>
@endsection
