@extends('layouts.app')
@section('title', 'dosen')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">@yield('title') <a href="/dosen/create" class="btn btn-success pull-right btn-sm"><i class="fa fa-plus"></i> Add</a></div>
                <div class="card-body">
                @include('alert_success')
                <?php 
                // echo Form::text('email', 'example@gmail.com', ['class'=>'form-control', 'id'=>'form email']);
                ?>
                    <table class="table table-hover table-bordered table-striped datatable" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nidn</th>
                                <th>Nama</th>
                                <th>No Telp</th>
                                <th>email</th>
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
            ajax: '{{ route('dosen/json') }}',
            columns: [
                {data: 'id', name: 'id'},
                {data: 'nidn', name: 'nidn'},
                {data: 'nama', name: 'nama'},
                {data: 'no_hp', name: 'no_hp'},
                {data: 'email', name: 'email'},
                {data: 'action', name: 'action'},
            ]
        });
    });
</script>
@endpush