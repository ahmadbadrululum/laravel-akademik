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
                    {{ Form::open(['url' => 'kurikulum', 'method' => 'get']) }}  
                    @csrf                  
                    <table class="table table-bordered table-striped" style="width:100%">
                        <tr>
                            <td>Jurusan</td>
                            <td>
                                {{ Form::select('jurusan',$jurusan, $jurusan_select, ['placeholder' => '-- pilih Jurusan --', 'class'=>'form-control'])  }}
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-refresh"></i> Refresh</button>
                                <a href="/kurikulum/create" class="btn btn-primary"><i class="fa fa-plus"></i> Input</a>
                                
                            </td>
                        </tr>
                    </table>
                    {{ Form::close() }}
                    <br>

                    <table class="table table-hover table-bordered table-striped datatable" style="width:100%">
                        <thead>
                            <tr>
                                <th>Jurusan</th>
                                <th>Kode Matakuliah</th>
                                <th>Nama Mata kuliah</th>
                                <th>sks</th>
                                <th>Semester</th>
                                <th width="140">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(count($kurikulum) == 0)
                            <tr>
                                <td colspan="6" class="text-center"><strong> Tidak ada data </strong></td>
                            </tr>
                        @else
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
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection