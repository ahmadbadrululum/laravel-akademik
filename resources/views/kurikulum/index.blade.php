@extends('layouts.app')
@section('title', 'Kurikulum')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    @yield('title')
                    <!-- <a href="/jurusan/create" class="btn btn-success pull-right btn-sm"><i class="fa fa-plus"></i> Add</a> -->
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
                                <button class="btn btn-info">Input</button>
                            </td>
                        </tr>
                    </table>
                    <br>


                    <table class="table table-hover table-bordered table-striped datatable" style="width:100%">
                        <thead>
                            <tr>
                                <th>Kode Matakuliah</th>
                                <th>Nama Mata kuliah</th>
                                <th>Sks</th>
                                <th width="140">Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection