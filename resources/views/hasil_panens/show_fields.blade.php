<!-- Nama Kelompok Field -->
<div class="col-sm-12">
    {!! Form::label('nama_kelompok', 'Kelompok Tani:') !!}
    <p>{{ $hasilPanen->poktan->nama_kelompok }}</p>
</div>

<!-- Blok Lahan Field -->
<div class="col-sm-12">
    {!! Form::label('blok_lahan', 'Blok Lahan:') !!}
    <p>{{ $hasilPanen->blok->nama_blok }}</p>
</div>

<!-- Komoditas Field -->
<div class="col-sm-12">
    {!! Form::label('komoditas', 'Komoditas:') !!}
    <p>{{ $hasilPanen->blok->komoditas }}</p>
</div>

<!-- Jumlah Berhasil Field -->
<div class="col-sm-12">
    {!! Form::label('jumlah_berhasil', 'Jumlah Berhasil:') !!}
    <p>{{ $hasilPanen->jumlah_berhasil }}</p>
</div>

<!-- Jumlah Gagal Field -->
<div class="col-sm-12">
    {!! Form::label('jumlah_gagal', 'Jumlah Gagal:') !!}
    <p>{{ $hasilPanen->jumlah_gagal }}</p>
</div>

<!-- Satuan Field -->
<div class="col-sm-12">
    {!! Form::label('satuan', 'Satuan:') !!}
    <p>{{ $hasilPanen->satuan }}</p>
</div>

<!-- Tanggal Panen Field -->
<div class="col-sm-12">
    {!! Form::label('tanggal_panen', 'Tanggal Panen:') !!}
    <p>{{ $hasilPanen->tanggal_panen }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $hasilPanen->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $hasilPanen->updated_at }}</p>
</div>

