@extends('layouts.app')
@section('title', 'Matakuliah')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah matakuliah</div>
                <div class="card-body">
                @include('validation_error')
                    <!-- <form method="POST" action=""> -->
                    {{ Form::model($matakuliah,['url'=>'matakuliah/'.$matakuliah->id,'method'=>'PUT'])}}

                    <!-- {{ Form::model($matakuliah, ['url' => 'matakuliah/'.$matakuliah->id, 'method' => 'PUT']) }} -->
                    <!-- echo Form::open(['url' => 'foo/bar', 'method' => 'put']) -->

                            @csrf
                            @include('matakuliah.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
