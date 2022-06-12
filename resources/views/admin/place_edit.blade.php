@extends('layouts.admin')

@section('title','Mekan Düzenle')

@section('javascript')
    <head>
        @FilemanagerScript
    </head>
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

@endsection

@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Mekan Düzenle</h5>

                </div>
                <div class="card-body">

                   <div style="width:1000px; height: 3000px;">
                       <form action="{{route('admin_place_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                           @csrf
                       <table>

                           <tr><h4>Category:</h4> <select name="category_id" id="category_id" style="width: 1000px">
                                   @foreach($datalist as $rs)
                                       <option value="{{$rs->id}}" @if ($rs->id==$data->Category_id) selected="selected" @endif>{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title) }}</option>
                                   @endforeach


                               </select></tr>
                           <tr><h4>Title:</h4> <input style="width: 1000px" id="title" value="{{$data->title}}" type="text" name="title" placeholder="Title"/></tr>
                           <tr><h4>Keywords: </h4><input style="width: 1000px" id="keywords" value="{{$data->keywords}}" type="text" name="keywords" placeholder="Keywords"/></tr>
                           <tr><h4>Description: </h4><input style="width: 1000px" id="description" value="{{$data->description}}" type="text" name="description" placeholder="Description"/></tr>
                           <tr><h4>Address: </h4><input style="width: 1000px" id="address" value="{{$data->address}}" type="text" name="address" placeholder="address"/></tr>
                           <tr><h4>City: </h4><input style="width: 1000px" id="city" value="{{$data->city}}" type="text" name="city" placeholder="city"/></tr>
                           <tr><h4>Detail: </h4><textarea id="detail" name="detail">{{$data->detail}}</textarea></tr>
                           <script>
                               window.onload = function () {
                                   CKEDITOR.replace('detail', {
                                       filebrowserBrowseUrl: filemanager.ckBrowseUrl,
                                   });
                               }
                           </script>
                           <tr><h4>Slug: </h4><input style="width: 1000px" id="slug" value="{{$data->slug}}" type="text" name="slug" placeholder="Slug"/></tr>
                           <tr><label for="image"><h4>Image:</h4></label>
                               <input type="file" name="image" id="image"  class="form-control">
                           @if($data->image)
                               <img src="{{Storage::url($data->image)}}" height="100" alt="">
                           @endif <br>
                           <tr><label for="status"><h4>Status:</h4></label>

                               <select name="status" id="status" style="width: 1000px">
                                   <option selected="selected">{{$data->status}}</option>
                                   <option value="true">True</option>
                                   <option value="false">False</option>

                               </select></tr><br><br>
                           <tr><button type="submit" class="btn-primary">Düzenle</button></tr>
                       </table>
                       </form>
                   </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
