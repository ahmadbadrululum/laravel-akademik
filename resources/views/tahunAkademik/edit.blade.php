@extends('layouts.app')
@section('title', 'tahunAkademik')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah tahunAkademik</div>
                <div class="card-body">
                @include('validation_error')
                    <!-- <form method="POST" action=""> -->
                    {{ Form::model($tahunAkademik,['url'=>'tahunAkademik/'.$tahunAkademik->id,'method'=>'PUT'])}}

                    <!-- {{ Form::model($tahunAkademik, ['url' => 'tahunAkademik/'.$tahunAkademik->id, 'method' => 'PUT']) }} -->
                    <!-- echo Form::open(['url' => 'foo/bar', 'method' => 'put']) -->

                            @csrf
                            @include('tahunAkademik.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
