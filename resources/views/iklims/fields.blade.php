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

<!-- Kelompok Tani Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kelompok_tani', 'Kelompok Tani:') !!}
    {!! Form::select('kelompok_tani', $kelompok_tani,null, ['class' => 'form-control', 'placeholder']) !!}
</div>

<!-- Komoditas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('komoditas', 'Komoditas:') !!}
    {!! Form::text('komoditas', null, ['class' => 'form-control']) !!}
</div>

<!-- Cuaca Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cuaca', 'Cuaca:') !!}
    {!! Form::text('cuaca', null, ['class' => 'form-control']) !!}
</div>

<!-- Suhu Field -->
<div class="form-group col-sm-6">
    {!! Form::label('suhu', 'Suhu:') !!}
    {!! Form::text('suhu', null, ['class' => 'form-control']) !!}
</div>