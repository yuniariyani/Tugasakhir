<!-- Nama Kelompok Field -->
<div class="col-sm-12">
    {!! Form::label('nama_kelompok', 'Kelompok Tani:') !!}
    <p>{{ $pendapatan->poktan->nama_kelompok }}</p>
</div>

<!-- Blok Lahan Field -->
<div class="col-sm-12">
    {!! Form::label('blok_lahan', 'Blok Lahan:') !!}
    <p>{{ $pendapatan->blok->nama_blok }}</p>
</div>

<!-- Komoditas Field -->
<div class="col-sm-12">
    {!! Form::label('komoditas', 'Komoditas:') !!}
    <p>{{ $pendapatan->blok->komoditas }}</p>
</div>

<!-- Jumlah Berhasil Field -->
<div class="col-sm-12">
    {!! Form::label('jumlah_berhasil', 'Jumlah Berhasil:') !!}
    <p>{{ $pendapatan->jumlah_berhasil }}</p>
</div>

<!-- Jumlah Gagal Field -->
<div class="col-sm-12">
    {!! Form::label('jumlah_gagal', 'Jumlah Gagal:') !!}
    <p>{{ $pendapatan->jumlah_gagal }}</p>
</div>

<!-- Satuan Field -->
<div class="col-sm-12">
    {!! Form::label('satuan', 'Satuan:') !!}
    <p>{{ $pendapatan->satuan }}</p>
</div>

<!-- Tanggal Panen Field -->
<div class="col-sm-12">
    {!! Form::label('tanggal_panen', 'Tanggal Panen:') !!}
    <p>{{ $pendapatan->tanggal_panen }}</p>
</div>

<!-- Pendapatan Field -->
<div class="col-sm-12">
    {!! Form::label('pendapatan', 'Pendapatan:') !!}
    <p>{{ $pendapatan->pendapatan }}</p>
</div>

