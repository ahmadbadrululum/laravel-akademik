<div class="form-group row">
    <label for="nidn" class="col-md-2 col-form-label text-md-right">{{ __('kode tahun Akademik') }}</label>
    <div class="col-md-6">
        <!-- <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus> -->
        @if ($page == 'add')
            {{ Form::text('kode_tahun_akademik', null, ['class' => 'form-control', 'placeholder' => 'kode tahun akademik', 'id'=>'kode_tahun_akademik', 'required' => 'required'])  }}
        @else
            {{ Form::text('kode_tahun_akademik', null, ['class' => 'form-control', 'placeholder' => 'kode tahun akademik', 'id'=>'kode_tahun_akademik', 'required' => 'required', 'readonly'=>''])  }}
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="nama" class="col-md-2 col-form-label text-md-right">{{ __('Tahun Akademik') }}</label>
    <div class="col-md-6">
        {{ Form::text('tahun_akademik', null, ['class' => 'form-control', 'placeholder' => 'nama  tahun akademik',  'id'=>'tahun_akademik', 'required' => 'required'])  }}
    </div>
</div>

<div class="form-group row">
    <label for="status" class="col-md-2 col-form-label text-md-right">{{ __('status') }}</label>
    <div class="col-md-6">
        {{ Form::select('status',['y'=> 'Aktif', 't'=> 'Tidak Aktif'], null, ['placeholder' => '-- pilih status --', 'class'=>'form-control'])  }}
    </div>
</div>


<div class="form-group row mb-0">
    <div class="col-md-6 offset-md-2">
        {{ Form::submit('simpan',['class' => 'btn btn-success']) }}
        <!-- {{ Form::button('back',['class' => 'btn btn-success']) }} -->
        <a href="/tahunAkademik" class="btn btn-warning">kembali</a>
    </div>
</div>  