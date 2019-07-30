@extends('layouts.app')
@section('title', 'setting')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Settings</div>
                <div class="card-body">
                    @include('alert_success')
                    @include('validation_error')
                    {{ Form::model($setting,['url' => 'setting/'.$setting->id, 'method' => 'put']) }}
                            @csrf
                        <div class="form-group row">
                            <label for="nama_universitas" class="col-md-2 col-form-label text-md-right">{{ __('Nama Universitas') }}</label>
                            <div class="col-md-5">
                                {{ Form::text('nama_universitas', null, ['class' => 'form-control', 'placeholder' => 'nama_universitas', 'id'=>'nama_universitas', 'required' => 'required'])  }}
                            </div>
                            <label for="nidn" class="col-md-1 col-form-label text-md-right">{{ __('Email') }}</label>
                            <div class="col-md-4">
                                {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'email', 'id'=>'email', 'required' => 'required'])  }}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="no_telephone" class="col-md-2 col-form-label text-md-right">{{ __('No Telephone') }}</label>
                            <div class="col-md-5">
                                {{ Form::text('no_telephone', null, ['class' => 'form-control', 'placeholder' => 'no_telephone', 'id'=>'no_telephone', 'required' => 'required'])  }}
                            </div>

                            <label for="fax" class="col-md-1 col-form-label text-md-right">{{ __('Fax') }}</label>
                            <div class="col-md-4">
                                {{ Form::text('fax', null, ['class' => 'form-control', 'placeholder' => 'fax', 'id'=>'fax', 'required' => 'required'])  }}
                            </div>
                            
                        </div>
                        <div class="form-group row">
                            <label for="alamat" class="col-md-2 col-form-label text-md-right">{{ __('Alamat') }}</label>
                            <div class="col-md-8">
                                {{ Form::text('alamat', null, ['class' => 'form-control', 'placeholder' => 'nama  setting',  'id'=>'alamat', 'required' => 'required'])  }}
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-2">
                                {{ Form::submit('simpan',['class' => 'btn btn-success']) }}
                            </div>
                        </div>  
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
