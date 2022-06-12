@extends('layouts.home')

@section('title', 'Mekan Kategorileri '.$data->title)

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
                        <li><a href="{{route('categoryplaces',['id'=>$data->id,'slug'=>$data->title])}}">Mekanlar Listesi</a><i class="icon-angle-right"></i></li>
                        <li>{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($data,$data->title) }}<i class="icon-angle-right"></i></li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="maincontent">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <h1>{{$data->title}}</h1>
                </div>
            </div>

            <div class="row">

                <ul class="portfolio-area da-thumbs">
                    @foreach($datalist as $rs)
                    <li class="portfolio-item" data-id="id-0" data-type="web">
                        <div class="span4">
                            <div class="thumbnail">
                                <div class="image-wrapp">
                                    <img src="{{ Storage::url($rs->image) }}" style="width: 400px; height: 200px;" alt="Portfolio name" title="" />
                                    <article class="da-animate da-slideFromRight">
                                        <a href="{{route('place',['id' => $rs->id,'slug' => $rs->slug])}}">
                                            <i class="icon-link icon-rounded icon-48 active"></i>
                                        </a>
                                        <div class="hidden-tablet">
                                            <p>
                                                {{$rs->title}}
                                            </p>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>

            </div>


        </div>
    </section>
@endsection

