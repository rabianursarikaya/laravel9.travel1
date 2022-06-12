@extends('layouts.admin')

@section('title','Mekanlar Listesi')

@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('admin_place_create')}}" style="position: absolute; right: 25px;" class="btn btn-primary">MEKAN EKLE</a>

                    <h5 class="title">Mekanlar</h5>



                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                            <th><b>Id</b></th>
                            <th><b>Category</b></th>
                            <th><b>Title(s)</b></th>
                            <th><b>Image</b></th>
                            <th><b>Image Gallery</b></th>
                            <th><b>City</b></th>
                            <th><b>Status</b></th>
                            <th><b>Edit</b></th>
                            <th><b>Delete</b></th>

                            </thead>


                            <tbody>
                            @foreach($datalist as $rs)
                            <tr>
                                <td>
                                    {{$rs->id}}
                                </td>
                                <td>
                                    {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category,$rs->category->title) }}
                                </td>
                                <td>
                                    {{$rs->title}}
                                </td>
                                <td>
                                    @if($rs->image)
                                        <img src="{{Storage::url($rs->image)}}" height="60" width="120" alt=""/>
                                    @endif

                                </td>
                                <td><a href="{{route('admin_image_add',['place_id'=>$rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')"><img src="{{asset('assets/admin/images')}}/gallery.png" height="60"></a></td>
                                <td>
                                    {{$rs->city}}
                                </td>
                                <td>
                                    {{$rs->status}}
                                </td>
                                <td>
                                    <a href="{{route('admin_place_edit',['id'=>$rs->id])}}"><img src="{{asset('assets/admin/images')}}/edit.png" height="30"></a>
                                </td>
                                <td>
                                    <a href="{{route('admin_place_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete ! Are you sure?')"><img src="{{asset('assets/admin/images')}}/delete.png" height="30"></a>
                                </td>
                            </tr>

                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
