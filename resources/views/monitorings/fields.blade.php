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

<!-- Poktan Field -->
<div class="form-group col-sm-6">
{!! Form::label('relationgroup_id', 'Kelompok Tani:') !!}  
{!! Form::select('relationgroup_id',$poktan,null, ['class' => 'form-control', 'placeholder']) !!}
</div>

<!-- Komoditas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('komoditas', 'Komoditas:') !!}
    {!! Form::text('komoditas', null, ['class' => 'form-control']) !!}
</div>

<!-- Kadar Air Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kadar_air', 'Kadar Air:') !!}
    {!! Form::number('kadar_air', null, ['class' => 'form-control']) !!}
</div>

<!-- Suhu Tanah Field -->
<div class="form-group col-sm-6">
    {!! Form::label('suhu_tanah', 'Suhu Tanah:') !!}
    {!! Form::number('suhu_tanah', null, ['class' => 'form-control']) !!}
</div>

<!-- Ph Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ph', 'Ph:') !!}
    {!! Form::text('ph', null, ['class' => 'form-control']) !!}
</div>

<!-- Subur Field -->
<div class="form-group col-sm-6">
    {!! Form::label('subur', 'Subur:') !!}
    {!! Form::text('subur', null, ['class' => 'form-control']) !!}
</div>

<!-- Kelembaban Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kelembaban', 'Kelembaban:') !!}
    {!! Form::number('kelembaban', null, ['class' => 'form-control']) !!}
</div>