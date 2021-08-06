<!-- Nama Kelompok Field -->
<div class="col-sm-12">
    {!! Form::label('nama_kelompok', 'Kelompok Tani:') !!}
    <p>{{ $riwayatPupuk->poktan->nama_kelompok }}</p>
</div>

<!-- Blok Lahan Field -->
<div class="col-sm-12">
    {!! Form::label('blok_lahan', 'Blok Lahan:') !!}
    <p>{{ $riwayatPupuk->blok->nama_blok }}</p>
</div>

<!-- Komoditas Field -->
<div class="col-sm-12">
    {!! Form::label('komoditas', 'Komoditas:') !!}
    <p>{{ $riwayatPupuk->blok->komoditas }}</p>
</div>

<!-- Tanggal Pupuk Field -->
<div class="col-sm-12">
    {!! Form::label('tanggal_pupuk', 'Tanggal Pupuk:') !!}
    <p>{{ $riwayatPupuk->tanggal_pupuk }}</p>
</div>

<!-- Jenis Pupuk Field -->
<div class="col-sm-12">
    {!! Form::label('jenis_pupuk', 'Jenis Pupuk:') !!}
    <p>{{ $riwayatPupuk->jenis_pupuk }}</p>
</div>

<!-- Dosis Pupuk Field -->
<div class="col-sm-12">
    {!! Form::label('dosis_pupuk', 'Dosis Pupuk:') !!}
    <p>{{ $riwayatPupuk->dosis_pupuk }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $riwayatPupuk->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $riwayatPupuk->updated_at }}</p>
</div>

