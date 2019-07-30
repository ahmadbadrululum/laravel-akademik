
<div class="form-group row">
    <label for="nim" class="col-md-2 col-form-label text-md-right">{{ __('NIM') }}</label>
    <div class="col-md-6">
        @if ($page == 'add')
            {{ Form::text('nim', null, ['class' => 'form-control', 'placeholder' => 'nim', 'id'=>'nim', 'required' => 'required'])  }}
        @else
            {{ Form::text('nim', null, ['class' => 'form-control', 'placeholder' => 'nim', 'id'=>'nim', 'required' => 'required', 'readonly'=>''])  }}
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="nama_mahasiswa" class="col-md-2 col-form-label text-md-right">{{ __('Nama mahasiswa') }}</label>
    <div class="col-md-6">
        {{ Form::text('nama_mahasiswa', null, ['class' => 'form-control', 'placeholder' => 'nama  mahasiswa',  'id'=>'nama_mahasiswa', 'required' => 'required'])  }}
    </div>
</div>

<div class="form-group row">
    <label for="jurusan" class="col-md-2 col-form-label text-md-right">{{ __('jurusan') }}</label>
    <div class="col-md-6">
    {{ Form::select('jurusan_id_mahasiswa',$jurusan, null, ['placeholder' => '-- pilih jenjang --', 'class'=>'form-control'])  }}
    </div>
</div>

<div class="form-group row">
    <label for="email" class="col-md-2 col-form-label text-md-right">{{ __('Email') }}</label>
    <div class="col-md-6">
        {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'email',  'id'=>'email', 'required' => 'required'])  }}
    </div>
</div>


<div class="form-group row">
    <label for="no_telephone" class="col-md-2 col-form-label text-md-right">{{ __('no telephone') }}</label>
    <div class="col-md-6">
        {{ Form::text('no_telephone', null, ['class' => 'form-control', 'placeholder' => 'no telephone',  'id'=>'no_telephone', 'required' => 'required'])  }}
    </div>
</div>


<div class="form-group row">
    <label for="alamat" class="col-md-2 col-form-label text-md-right">{{ __('Alamat') }}</label>
    <div class="col-md-6">
        {{ Form::text('alamat', null, ['class' => 'form-control', 'placeholder' => 'Alamat',  'id'=>'alamat', 'required' => 'required'])  }}
    </div>
</div>

<div class="form-group row">
    <label for="password" class="col-md-2 col-form-label text-md-right">{{ __('Password') }}</label>
    <div class="col-md-6">
        {{ Form::password('password', ['class' => 'form-control', 'placeholder' => '',  'id'=>'password'])  }}
    </div>
</div>

<div class="form-group row mb-0">
    <div class="col-md-6 offset-md-2">
        {{ Form::submit('simpan',['class' => 'btn btn-success']) }}
        <!-- {{ Form::button('back',['class' => 'btn btn-success']) }} -->
        <a href="/mahasiswa" class="btn btn-warning">kembali</a>
    </div>
</div>  