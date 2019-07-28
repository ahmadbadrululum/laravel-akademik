@extends('layouts.app')
@section('title', 'fakultas')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah fakultas</div>
                <div class="card-body">
                @include('validation_error')
                    <!-- <form method="POST" action=""> -->
                    {{ Form::model($fakultas,['url'=>'fakultas/'.$fakultas->id,'method'=>'PUT'])}}

                    <!-- {{ Form::model($fakultas, ['url' => 'fakultas/'.$fakultas->id, 'method' => 'PUT']) }} -->
                    <!-- echo Form::open(['url' => 'foo/bar', 'method' => 'put']) -->

                            @csrf
                            @include('fakultas.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
