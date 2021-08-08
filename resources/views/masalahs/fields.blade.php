<!-- nama kelompok Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_kelompok', 'Nama Kelompok:') !!}
    {!! Form::select('nama_kelompok', $nama_kelompok,null, ['class' => 'form-control', 'placeholder']) !!}
</div>

<!-- bloklahan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bloklahan_id', 'Nama Blok:') !!}
    {!! Form::select('bloklahan_id', $blok,null, ['class' => 'form-control', 'placeholder']) !!}
</div>

<!-- Komoditas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('komoditas', 'Komoditas:') !!}
    {!! Form::select('komoditas', $komoditas,null,['class' => 'form-control', 'placeholder']) !!}
</div>


<!-- Tanggal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tanggal', 'Tanggal:') !!}
    {!! Form::text('tanggal', null, ['class' => 'form-control','id'=>'tanggal']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#tanggal').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Masalah Lahan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('masalah_lahan', 'Masalah Lahan:') !!}
    {!! Form::text('masalah_lahan', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::select('status', array('Rendah' => 'Rendah', 'Sedang' => 'Sedang', 'Tinggi' => 'Tinggi'), null, ['class' => 'form-control']) !!}
</div>