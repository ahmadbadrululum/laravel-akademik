@extends('layouts.app')
@section('title', 'jurusan')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">@yield('title') <a href="/jurusan/create" class="btn btn-success pull-right btn-sm"><i class="fa fa-plus"></i> Add</a></div>
                <div class="card-body">
                @include('alert_success')
                <?php 
                // echo Form::text('email', 'example@gmail.com', ['class'=>'form-control', 'id'=>'form email']);
                ?>
                    <table class="table table-hover table-bordered table-striped datatable" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Kode jurusan</th>
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
            ajax: '{{ route('jurusan/json') }}',
            columns: [
                {data: 'id', name: 'id'},
                {data: 'kode_jurusan', name: 'kode_jurusan'},
                {data: 'nama_jurusan', name: 'nama_jurusan'},
                {data: 'nama_fakultas', name: 'nama_fakultas'},
                {data: 'jenjang', name: 'jenjang'},
                {data: 'action', name: 'action'},
            ]
        });
    });
</script>
@endpush