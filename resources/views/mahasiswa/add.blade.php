@extends('layouts.app')
@section('title', 'mahasiswa')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah mahasiswa</div>
                <div class="card-body">
                    @include('validation_error')
                    {{ Form::open(['url' => 'mahasiswa', 'method' => 'post']) }}
                            @csrf
                    @include('mahasiswa.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
