@extends('layouts.app')
@section('title', 'dosen')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah dosen</div>
                <div class="card-body">
                    @include('validation_error')
                    <!-- <form method="POST" action=""> -->
                    {{ Form::open(['url' => 'dosen', 'method' => 'post']) }}
                    <!-- echo Form::open(['url' => 'foo/bar', 'method' => 'put']) -->

                            @csrf
                    @include('dosen.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
