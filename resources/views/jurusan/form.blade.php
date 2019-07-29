


<div class="form-group row">
    <label for="kode_jurusan" class="col-md-2 col-form-label text-md-right">{{ __('kode jurusan') }}</label>
    <div class="col-md-6">
        @if ($page == 'add')
            {{ Form::text('kode_jurusan', null, ['class' => 'form-control', 'placeholder' => 'kode_jurusan', 'id'=>'kode_jurusan', 'required' => 'required'])  }}
        @else
            {{ Form::text('kode_jurusan', null, ['class' => 'form-control', 'placeholder' => 'kode_jurusan', 'id'=>'kode_jurusan', 'required' => 'required', 'readonly'=>''])  }}
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="nnama_jurusanama" class="col-md-2 col-form-label text-md-right">{{ __('Nama jurusan') }}</label>
    <div class="col-md-6">
        {{ Form::text('nama_jurusan', null, ['class' => 'form-control', 'placeholder' => 'nama  jurusan',  'id'=>'nama_jurusan', 'required' => 'required'])  }}
    </div>
</div>

<div class="form-group row">
    <label for="Fakultas" class="col-md-2 col-form-label text-md-right">{{ __('Fakultas') }}</label>
    <div class="col-md-6">
    {{ Form::select('fakultas_id_jurusan',$fakultas, null, ['placeholder' => '-- pilih jenjang --', 'class'=>'form-control'])  }}
    </div>
</div>

<div class="form-group row">
    <label for="jenjang" class="col-md-2 col-form-label text-md-right">{{ __('Jenjang') }}</label>
    <div class="col-md-6">
        {{ Form::select('jenjang',['D3'=> 'D3', 'D4'=> 'D4', 'S1'=> 'S1'], null, ['placeholder' => '-- pilih jenjang --', 'class'=>'form-control'])  }}
    </div>
</div>

<div class="form-group row mb-0">
    <div class="col-md-6 offset-md-2">
        {{ Form::submit('simpan',['class' => 'btn btn-success']) }}
        <!-- {{ Form::button('back',['class' => 'btn btn-success']) }} -->
        <a href="/jurusan" class="btn btn-warning">kembali</a>
    </div>
</div>  