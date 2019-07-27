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
                        <div class="form-group row">
                            <label for="kode_mk" class="col-md-2 col-form-label text-md-right">{{ __('Kode Matakuliah') }}</label>
                            <div class="col-md-6">
                                <!-- <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus> -->
                                {{ Form::text('kode_mk', null, ['class' => 'form-control', 'placeholder' => 'kode matkul', 'id'=>'kode_mk', 'required' => 'required'])  }}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nama_mk" class="col-md-2 col-form-label text-md-right">{{ __('Nama Matakuliah') }}</label>
                            <div class="col-md-6">
                                {{ Form::text('nama_mk', null, ['class' => 'form-control', 'placeholder' => 'nama matkul',  'id'=>'nama_mk', 'required' => 'required'])  }}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jml_sks" class="col-md-2 col-form-label text-md-right">{{ __('Jumlah sks') }}</label>
                            <div class="col-md-6">
                                {{ Form::text('jml_sks', null, ['class' => 'form-control', 'placeholder' => 'kode matkul',  'id'=>'jml_sks', 'required' => 'required'])  }}
                            </div>
                        </div>
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-2">
                                {{ Form::submit('simpan',['class' => 'btn btn-success']) }}
                                <!-- {{ Form::button('back',['class' => 'btn btn-success']) }} -->
                                <a href="/matakuliah" class="btn btn-warning">kembali</a>
                            </div>
                        </div>                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
