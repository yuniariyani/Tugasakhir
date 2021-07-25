
@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Tambahkan Solusi Masalah Lahan</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($masalah, ['route' => ['masalahs.update', $masalah->id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    <!-- nama kelompok Field -->




<div class="form-group col-sm-6">
    {!! Form::label('nama_kelompok', 'Nama Kelompok:') !!}
    {!! Form::select('nama_kelompok', $nama_kelompok,null, ['class' => array('form-control','placeholder')]) !!}
</div>

<!-- bloklahan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bloklahan_id', 'Nama Blok:') !!}
    {!! Form::select('bloklahan_id', $blok,null, ['class' => 'form-control', 'placeholder']) !!}
</div>

<!-- Komoditas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('komoditas', 'Komoditas:') !!}
    {!! Form::select('komoditas', $komoditas, null,['class' => 'form-control', 'placeholder']) !!}
</div>

<!-- Masalah Lahan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('masalah_lahan', 'Masalah Lahan:') !!}
    {!! Form::text('masalah_lahan', null, ['class' => 'form-control']) !!}
</div>

<!-- Tanggal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('solusi', 'Solusi:') !!}
    {!! Form::text('solusi', null, ['class' => 'form-control']) !!}
</div>

<!-- Tanggal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tindak_lanjut', 'Tindak Lanjut:') !!}
    {!! Form::text('tindak_lanjut', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control']) !!}
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

                </div>
            </div>


            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('masalahs.index') }}" class="btn btn-default">Cancel</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
