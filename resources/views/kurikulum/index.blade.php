@extends('layouts.app')
@section('title', 'Kurikulum')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    @yield('title')
                </div>
                <div class="card-body">
                @include('alert_success')

                    <table class="table table-bordered table-striped" style="width:100%">
                        <tr>
                            <td>Jurusan</td>
                            <td>
                                {{ Form::select('jurusan',$jurusan, null, ['placeholder' => '-- pilih Jurusan --', 'class'=>'form-control'])  }}
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <button class="btn btn-success">Refresh</button>
                                <a href="/kurikulum/create" class="btn btn-primary"><i class="fa fa-plus"></i> Input</a>
                                
                            </td>
                        </tr>
                    </table>
                    <br>


                    <table class="table table-hover table-bordered table-striped datatable" style="width:100%">
                        <thead>
                            <tr>
                                <th>Jurusan</th>
                                <th>Kode Matakuliah</th>
                                <th>Nama Mata kuliah</th>
                                <th>Sks</th>
                                <th>Semester</th>
                                <th width="140">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($kurikulum as $k)
                            <tr>
                                <td>{{ $k->nama_jurusan }}</td>
                                <td>{{ $k->kode_mk }}</td>
                                <td>{{ $k->nama_mk }}</td>
                                <td>{{ $k->jml_sks }}</td>
                                <td>{{ $k->semester }}</td>
                                <td>
                                    {{ Form::open(['url' => '/kurikulum/'.$k->id, 'method' => 'delete']) }}
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> hapus</button>
                                    {{ Form::close() }}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection