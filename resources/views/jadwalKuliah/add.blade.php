@extends('layouts.app')
@section('title', 'Jurusan')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Jurusan</div>
                <div class="card-body">
                    @include('validation_error')
                    <!-- <form method="POST" action=""> -->
                    {{ Form::open(['url' => 'jadwalkuliah', 'method' => 'post']) }}
                    <!-- echo Form::open(['url' => 'foo/bar', 'method' => 'put']) -->

                            @csrf
                    @include('jadwalKuliah.form')
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
