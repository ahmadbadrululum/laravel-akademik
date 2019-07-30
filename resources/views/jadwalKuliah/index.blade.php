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
                    <div class="form-group row">
                        <div class="col-md-4">
                            {{ Form::open(['url' => 'jadwalkuliah', 'method' => 'get']) }}
                            @csrf     
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
                                        {{ Form::select('semester',$semester, null, ['class'=>'form-control'])  }}
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-refresh"></i> Refresh</button>
                                        <a href="/jadwalkuliah/create" class="btn btn-primary"><i class="fa fa-plus"></i> Input</a>
                                    </td>
                                </tr>
                            </table>
                            {{ Form::close() }}
                        </div>
                        <div class="col-md-8">
                            <table class="table table-bordered table-striped"">
                                <thead>
                                    <tr>
                                        <th>Hari</th>
                                        <th>Jam</th>
                                        <th>Matakuliah</th>
                                        <th>Dosen</th>
                                        <th>Ruang</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($jadwalKuliah as $jadwal)
                                        <tr>
                                            <td>{{ $jadwal->hariKuliah_jadwalKuliah }}</td>
                                            <td>{{ $jadwal->jam_kuliah }}</td>
                                            <td>{{ $jadwal->nama_mk }}</td>
                                            <td>{{ $jadwal->nama }}</td>
                                            <td>{{ $jadwal->nama_ruangan }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
