<div class="form-group row">
    <label for="nidn" class="col-md-2 col-form-label text-md-right">{{ __('Nidn dosen') }}</label>
    <div class="col-md-6">
        <!-- <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus> -->
        @if ($page == 'add')
            {{ Form::text('nidn', null, ['class' => 'form-control', 'placeholder' => 'nidn', 'id'=>'nidn', 'required' => 'required'])  }}
        @else
            {{ Form::text('nidn', null, ['class' => 'form-control', 'placeholder' => 'nidn', 'id'=>'nidn', 'required' => 'required', 'readonly'=>''])  }}
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="nama" class="col-md-2 col-form-label text-md-right">{{ __('Nama dosen') }}</label>
    <div class="col-md-6">
        {{ Form::text('nama', null, ['class' => 'form-control', 'placeholder' => 'nama dosen',  'id'=>'nama', 'required' => 'required'])  }}
    </div>
</div>

<div class="form-group row">
    <label for="email" class="col-md-2 col-form-label text-md-right">{{ __('Email') }}</label>
    <div class="col-md-6">
        {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'email',  'id'=>'email', 'required' => 'required'])  }}
    </div>
</div>

<div class="form-group row">
    <label for="no_hp" class="col-md-2 col-form-label text-md-right">{{ __('No Telp') }}</label>
    <div class="col-md-6">
        {{ Form::text('no_hp', null, ['class' => 'form-control', 'placeholder' => 'no telp',  'id'=>'no_hp', 'required' => 'required'])  }}
    </div>
</div>

<div class="form-group row mb-0">
    <div class="col-md-6 offset-md-2">
        {{ Form::submit('simpan',['class' => 'btn btn-success']) }}
        <!-- {{ Form::button('back',['class' => 'btn btn-success']) }} -->
        <a href="/dosen" class="btn btn-warning">kembali</a>
    </div>
</div>  