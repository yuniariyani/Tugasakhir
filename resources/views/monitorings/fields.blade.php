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
    {!! Form::select('komoditas', $nama_tanaman, null,['class' => 'form-control','placeholder']) !!}
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
    {!! Form::number('ph', null, ['class' => 'form-control']) !!}
</div>

<!-- Kelembaban Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kelembaban', 'Kelembaban:') !!}
    {!! Form::select('kelembaban', array('Kelembaban Tinggi' => 'Kelembaban Tinggi', 'Lembab' => 'Lembab', 'Normal' => 'Normal'), null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('status_kesuburan', 'Status Kesuburan:') !!}
    {!! Form::select('status_kesuburan', array('Sangat Rendah' => 'Sangat Rendah', 'Rendah' => 'Rendah', 'Sedang' => 'Sedang', 'Tinggi' => 'Tinggi', 'sangat_Tinggi' => 'Sangat Tinggi'), null, ['class' => 'form-control']) !!}
</div>