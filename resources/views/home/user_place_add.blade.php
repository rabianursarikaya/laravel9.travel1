@extends('layouts.home')

@section('title','Mekan Ekle')
@include('home._header')



    <head>
        @FilemanagerScript
    </head>

    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>




@section('content')
    <section id="subintro">
        <div class="container">
            <div class="row">
                <div class="span8">
                    <ul class="breadcrumb">
                        <li><a href="{{route('home')}}"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
                        <li><a href="{{route('userprofile')}}">User Profile</a><i class="icon-angle-right"></i></li>
                        <li class="active">{{Auth::user()->name}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="maincontent">
        <div class="container">
            <div class="row">
                <div class="span2">

                    @include('home.user_panel')
                </div>
                <div class="span10">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="title">Mekan Ekle</h5>
                        </div>
                        <div class="card-body">

                            <div style="width:1200px; height: auto;">
                                <form action="{{route('user_place_store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <table>

                                        <tr><h4>Category:</h4> <select name="category_id" id="category_id" style="width: 1000px">
                                                <option value="0" selected="selected">Ana Mekan</option>
                                                @foreach($datalist as $rs)
                                                    <option value="{{$rs->id}}">{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title) }}</option>
                                                @endforeach


                                            </select></tr>
                                        <tr><h4>Title:</h4> <input style="width: 1000px" id="title" type="text" name="title" placeholder="Title"/></tr>
                                        <tr><h4>Keywords: </h4><input style="width: 1000px" id="keywords" type="text" name="keywords" placeholder="Keywords"/></tr>
                                        <tr><h4>Description: </h4><input style="width: 1000px" id="description" type="text" name="description" placeholder="Description"/></tr>
                                        <tr><h4>Address: </h4><input style="width: 1000px" id="address" type="text" name="address" placeholder="address"/></tr>
                                        <tr><h4>City: </h4><input style="width: 1000px" id="city" type="text" name="city" placeholder="city"/></tr>
                                        <tr><h4>Detail: </h4><textarea id="detail" name="detail"></textarea>
                                            <script>
                                                window.onload = function () {
                                                    CKEDITOR.replace('detail', {
                                                        filebrowserBrowseUrl: filemanager.ckBrowseUrl,
                                                    });
                                                }
                                            </script>



                                        </tr>
                                        <tr><h4>Slug: </h4><input style="width: 1000px" id="slug" type="text" name="slug" placeholder="Slug"/></tr>
                                        <tr><label for="image"><h4>Image:</h4></label><input type="file" name="image" id="image" class="form-control">
                                        <br><br>
                                        <tr><button type="submit" class="btn btn-primary btn-large e_tada">Ekle</button></tr>
                                    </table>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

