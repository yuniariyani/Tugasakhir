<!-- Nama Kelompok Field -->
<div class="col-sm-12">
    {!! Form::label('nama_kelompok', 'Nama Kelompok:') !!}
    <p>{{ $riwayatPenanganan->poktan->nama_kelompok }}</p>
</div>

<!-- Blok Lahan Field -->
<div class="col-sm-12">
    {!! Form::label('blok_lahan', 'Blok Lahan:') !!}
    <p>{{ $riwayatPenanganan->blok->nama_blok }}</p>
</div>

<!-- Gejala Field -->
<div class="col-sm-12">
    {!! Form::label('gejala', 'Gejala:') !!}
    <p>{{ $riwayatPenanganan->gejala }}</p>
</div>

<!-- Jenis Penanganan Field -->
<div class="col-sm-12">
    {!! Form::label('jenis_penanganan', 'Jenis Penanganan:') !!}
    <p>{{ $riwayatPenanganan->jenis_penanganan }}</p>
</div>

<!-- Deskripsi Field -->
<div class="col-sm-12">
    {!! Form::label('deskripsi', 'Deskripsi:') !!}
    <p>{{ $riwayatPenanganan->deskripsi }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $riwayatPenanganan->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $riwayatPenanganan->updated_at }}</p>
</div>

