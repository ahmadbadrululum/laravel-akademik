@extends('layouts.app')
@section('title', 'Matakuliah')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">@yield('title')</div>

                <div class="card-body">
                    <table class="table table-hover table-bordered table-striped datatable" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Kode MK</th>
                                <th>Nama MK</th>
                                <th>Jumlah sks</th>
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
        ajax: '{{ route('matakuliah/json') }}',
        columns: [
            {data: 'id', name: 'id'},
            {data: 'kode_mk', name: 'kode_mk'},
            {data: 'nama_mk', name: 'nama_mk'},
            {data: 'jml_sks', name: 'jml_sks'},
        ]
    });
});
</script>
@endpush