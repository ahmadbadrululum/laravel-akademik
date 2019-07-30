@extends('layouts.app')
@section('title', 'mahasiswa')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">@yield('title') <a href="/mahasiswa/create" class="btn btn-success pull-right btn-sm"><i class="fa fa-plus"></i> Add</a></div>
                <div class="card-body">
                @include('alert_success')
                    <table class="table table-hover table-bordered table-striped datatable" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Fakultas</th>
                                <th>Jurusan</th>
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

@push('scripts')
<script type="text/javascript">
    $(document).ready(function() {
        $('.datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('mahasiswa/json') }}',
            columns: [
                {data: 'id', name: 'id'},
                {data: 'nim', name: 'nim'},
                {data: 'nama_mahasiswa', name: 'nama_mahasiswa'},
                {data: 'nama_fakultas', name: 'nama_fakultas'},
                {data: 'nama_jurusan', name: 'nama_jurusan'},
                {data: 'action', name: 'action'},
            ]
        });
    });
</script>
@endpush