<div class="form-group row">
    <label for="Jurusan" class="col-md-2 col-form-label text-md-right">{{ __('Jurusan') }}</label>
    <div class="col-md-6">
        {{ Form::select('jurusan_id_jadwalKuliah',$jurusan, null, ['required'=>'required','class'=>'form-control'])  }}
        {{ Form::hidden('tahunAkademik_id_jadwalKuliah',$tahunAkademik->id)  }}  
    </div>
</div>

<div class="form-group row">
    <label for="Matakuliah" class="col-md-2 col-form-label text-md-right">{{ __('Matakuliah') }}</label>
    <div class="col-md-6">
        {{ Form::select('matakuliah_id_jadwalKuliah',$matakuliah, null, ['required'=>'required','class'=>'form-control'])  }}
    </div>
</div>

<div class="form-group row">
    <label for="Semester" class="col-md-2 col-form-label text-md-right">{{ __('Semester') }}</label>
    <div class="col-md-6">
        {{ Form::select('semester_id_jadwalKuliah',$semester, null, ['required'=>'required','class'=>'form-control'])  }}
    </div>
</div>


<div class="form-group row">
    <label for="dosen" class="col-md-2 col-form-label text-md-right">{{ __('Dosen') }}</label>
    <div class="col-md-6">
        {{ Form::select('dosen_id_jadwalKuliah',$dosen, null, ['required'=>'required','class'=>'form-control'])  }}
    </div>
</div>

<div class="form-group row">
    <label for="ruangan" class="col-md-2 col-form-label text-md-right">{{ __('Ruangan') }}</label>
    <div class="col-md-6">
        {{ Form::select('ruangan_id_jadwalKuliah',$ruangan, null, ['required'=>'required','class'=>'form-control'])  }}
    </div>
</div>

<div class="form-group row">
<label for="hariKuliah" class="col-md-2 col-form-label text-md-right">{{ __('Hari dan jam kuliah') }}</label>
    <div class="col-md-3">
        {{ Form::select('hariKuliah_jadwalKuliah',$hariKuliah, null, ['required'=>'required','class'=>'form-control'])  }}
    </div>
    
    <div class="col-md-3">
        {{ Form::select('jamKuliah_id_jadwalKuliah',$jamKuliah, null, ['required'=>'required','class'=>'form-control'])  }}
    </div>
</div>

<div class="form-group row mb-0">
    <div class="col-md-6 offset-md-2">
        {{ Form::submit('simpan',['class' => 'btn btn-success']) }}
        <!-- {{ Form::button('back',['class' => 'btn btn-success']) }} -->
        <a href="/jadwalkuliah" class="btn btn-warning">kembali</a>
    </div>
</div>  