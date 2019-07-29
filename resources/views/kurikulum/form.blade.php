<div class="form-group row">
    <label for="Jurusan" class="col-md-2 col-form-label text-md-right">{{ __('Jurusan') }}</label>
    <div class="col-md-6">
    {{ Form::select('jurusan_id_kurikulum',$jurusan, null, ['placeholder' => '-- pilih Jurusan --', 'class'=>'form-control'])  }}
    </div>
</div>

<div class="form-group row">
    <label for="Matakuliah" class="col-md-2 col-form-label text-md-right">{{ __('Matakuliah') }}</label>
    <div class="col-md-6">
    {{ Form::select('matakuliah_id_kurikulum',$matakuliah, null, ['placeholder' => '-- pilih Matakuliah --', 'class'=>'form-control'])  }}
    </div>
</div>



<div class="form-group row">
    <label for="Semester" class="col-md-2 col-form-label text-md-right">{{ __('Semester') }}</label>
    <div class="col-md-6">
        {{ Form::number('semester', null, ['class' => 'form-control', 'placeholder' => 'semester',  'id'=>'semester', 'required' => 'required'])  }}
    </div>
</div>

<div class="form-group row mb-0">
    <div class="col-md-6 offset-md-2">
        {{ Form::submit('simpan',['class' => 'btn btn-success']) }}
        <!-- {{ Form::button('back',['class' => 'btn btn-success']) }} -->
        <a href="/kurikulum" class="btn btn-warning">kembali</a>
    </div>
</div>  