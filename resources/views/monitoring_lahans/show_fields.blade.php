<!-- Poktan Field -->
<div class="col-sm-12">
    {!! Form::label('poktan', 'Poktan:') !!}
    <p>{{ $monitoringLahan->poktan }}</p>
</div>

<!-- Komoditas Field -->
<div class="col-sm-12">
    {!! Form::label('komoditas', 'Komoditas:') !!}
    <p>{{ $monitoringLahan->komoditas }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $monitoringLahan->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $monitoringLahan->updated_at }}</p>
</div>

