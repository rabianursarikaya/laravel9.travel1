@extends('layouts.home')

@section('title', 'Profilim')
@include('home._header')
@section('content')
    <section id="subintro">
        <div class="container">
            <div class="row">
                <div class="span8" style="margin-left: 300px;">
                    <ul class="breadcrumb">
                        <li><a href="{{route('home')}}"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
                        <li><a href="{{route('userprofile')}}">User Profile</a><i class="icon-angle-right"></i></li>
                        <li class="active">{{Auth::user()->name}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="maincontent" style="margin-left: 300px;">
        <div class="container">
            <div class="row">
                <div class="span2">

                    @include('home.user_panel')
                </div>
                <div class="span10">
                    <div class="card-header">


                        <h5 class="title">Profil Bilgilerim</h5>




                    </div>

                    <div class="card-body">
                        @include('profile.show')
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

