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

<!-- Tanggal Pupuk Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tanggal_pupuk', 'Tanggal Pupuk:') !!}
    {!! Form::text('tanggal_pupuk', null, ['class' => 'form-control','id'=>'tanggal_pupuk']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#tanggal_pupuk').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Jenis Pupuk Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jenis_pupuk', 'Jenis Pupuk:') !!}
    {!! Form::select('jenis_pupuk', array('Urea' => 'Urea', 'SP-36' => 'SP-36', 'ZA' => 'ZA', 'NPK' => 'NPK', 'Organik' => 'Organik'), null, ['class' => 'form-control']) !!}
</div>

<!-- Dosis Pupuk Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dosis_pupuk', 'Dosis Pupuk:') !!}
    {!! Form::number('dosis_pupuk', null, ['class' => 'form-control']) !!}
</div>