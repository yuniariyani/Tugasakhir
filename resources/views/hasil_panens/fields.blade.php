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

<!-- Komoditas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('komoditas', 'Komoditas:') !!}
    {!! Form::select('komoditas', $komoditas, null, ['class' => 'form-control', 'placeholder']) !!}
</div>

<!-- Jumlah Berhasil Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jumlah_berhasil', 'Jumlah Berhasil:') !!}
    {!! Form::number('jumlah_berhasil', null, ['class' => 'form-control']) !!}
</div>

<!-- Jumlah Gagal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jumlah_gagal', 'Jumlah Gagal:') !!}
    {!! Form::number('jumlah_gagal', null, ['class' => 'form-control']) !!}
</div>

<!-- Satuan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('satuan', 'Satuan:') !!}
    {!! Form::text('satuan', null, ['class' => 'form-control']) !!}
</div>

<!-- Tanggal Panen Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tanggal_panen', 'Tanggal Panen:') !!}
    {!! Form::text('tanggal_panen', null, ['class' => 'form-control','id'=>'tanggal_panen']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#tanggal_panen').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush