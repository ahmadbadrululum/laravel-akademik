@extends('layouts.app')
@section('title', 'ruangan')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah ruangan</div>
                <div class="card-body">
                @include('validation_error')
                    <!-- <form method="POST" action=""> -->
                    {{ Form::model($ruangan,['url'=>'ruangan/'.$ruangan->id,'method'=>'PUT'])}}

                    <!-- {{ Form::model($ruangan, ['url' => 'ruangan/'.$ruangan->id, 'method' => 'PUT']) }} -->
                    <!-- echo Form::open(['url' => 'foo/bar', 'method' => 'put']) -->

                            @csrf
                            @include('ruangan.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
