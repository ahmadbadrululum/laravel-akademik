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
                            @csrf
                    <div class="form-group row">
                        <div class="col-md-4">
                            <table class="table table-bordered table-striped"">
                                <tr>
                                    <th>Jurusan</th>
                                    <td>
                                        {{ Form::select('jurusan',$jurusan, null, ['class'=>'form-control'])  }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Semester</th>
                                    <td>
                                        {{ Form::select('jenjang',['1'=> 'semester 1','2'=> 'semester 2', '3'=> 'semester 3', '4'=> 'semester 4','5'=> 'Semester 5','6'=> 'semester 6','7'=> 'semester 7','8'=> 'semester 8'], null, ['class'=>'form-control'])  }}
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <a href="/jadwalkuliah/create" class="btn btn-primary"><i class="fa fa-plus"></i> Input</a>
                                    </td>
                                </tr>

                            </table>
                        </div>
                        <div class="col-md-8">
                            <table class="table table-bordered table-striped"">
                                <tr>
                                    <th>Hari</th>
                                    <th>Jam</th>
                                    <th>Matakuliah</th>
                                    <th>Dosen</th>
                                    <th>Ruang</th>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
