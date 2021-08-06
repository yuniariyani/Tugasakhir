<!-- Nama Kelompok Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_kelompok', 'Kelompok Tani:') !!}
    {!! Form::select('nama_kelompok', $nama_kelompok, null, ['class' => 'form-control', 'placeholder']) !!}
</div>

<!-- Blok Lahan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('blok_lahan', 'Blok Lahan:') !!}
    {!! Form::select('blok_lahan', $blok_lahan, null, ['class' => 'form-control', 'placeholder']) !!}
</div>

<!-- Gejala Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('gejala', 'Gejala:') !!}
    {!! Form::textarea('gejala', null, ['class' => 'form-control']) !!}
</div>

<!-- Jenis Penanganan Field -->
<div class="form-group col-sm-12">
    {!! Form::label('jenis_penanganan', 'Jenis Penanganan:') !!}
    {!! Form::text('jenis_penanganan', null, ['class' => 'form-control']) !!}
</div>

<!-- Deskripsi Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('deskripsi', 'Deskripsi:') !!}
    {!! Form::textarea('deskripsi', null, ['class' => 'form-control']) !!}
</div>