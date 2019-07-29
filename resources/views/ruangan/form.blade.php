<div class="form-group row">
    <label for="nidn" class="col-md-2 col-form-label text-md-right">{{ __('kode ruangan') }}</label>
    <div class="col-md-6">
        <!-- <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus> -->
        @if ($page == 'add')
            {{ Form::text('kode_ruangan', null, ['class' => 'form-control', 'placeholder' => 'kode_ruangan', 'id'=>'kode_ruangan', 'required' => 'required'])  }}
        @else
            {{ Form::text('kode_ruangan', null, ['class' => 'form-control', 'placeholder' => 'kode_ruangan', 'id'=>'kode_ruangan', 'required' => 'required', 'readonly'=>''])  }}
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="nama" class="col-md-2 col-form-label text-md-right">{{ __('Nama ruangan') }}</label>
    <div class="col-md-6">
        {{ Form::text('nama_ruangan', null, ['class' => 'form-control', 'placeholder' => 'nama  ruangan',  'id'=>'nama_ruangan', 'required' => 'required'])  }}
    </div>
</div>

<div class="form-group row mb-0">
    <div class="col-md-6 offset-md-2">
        {{ Form::submit('simpan',['class' => 'btn btn-success']) }}
        <!-- {{ Form::button('back',['class' => 'btn btn-success']) }} -->
        <a href="/ruangan" class="btn btn-warning">kembali</a>
    </div>
</div>  