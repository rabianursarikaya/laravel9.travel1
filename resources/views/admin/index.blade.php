@extends('layouts.admin')

@section('title', 'Admin Panel Home Page')


@section('content')

    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h1>HOŞGELDİNİZ!</h1>           </div>

                </div>
            </div>
        </div>
    </div>

    @include('admin._content')


@endsection
