@extends('layouts.app')
@section('title', 'jurusan')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah jurusan</div>
                <div class="card-body">
                @include('validation_error')
                    <!-- <form method="POST" action=""> -->
                    {{ Form::model($jurusan,['url'=>'jurusan/'.$jurusan->id,'method'=>'PUT'])}}

                    <!-- {{ Form::model($jurusan, ['url' => 'jurusan/'.$jurusan->id, 'method' => 'PUT']) }} -->
                    <!-- echo Form::open(['url' => 'foo/bar', 'method' => 'put']) -->

                            @csrf
                            @include('jurusan.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
