@extends('layouts.main')
@section('title','Issue')
@push('custom-css')
<style>
    body{
        font-family: 'Numito';
    }

</style>
@endpush
@section('content')
@section('title2','Form Edit Issue Proyek')
@section('title1','Issue Proyek')

 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Edit Issue Proyek</h3>
              </div>

              <!-- /.card-header -->

                 <div class="card-body">
                 
                    <form action="{{ url('update-issue', $peg->id) }}" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                        <select class="form-control select2" name="proyek_id" id="proyek_id" placeholder="Kode Proyek">

                        <option disabled value>Pilih Kode</option>
                            @foreach ($hin as $item)
                        <option value="{{$item->id}}"> {{$item->kode_proyek}} </option>
                            @endforeach
                        </select>
                       </div>

                        <div class="form-group">
                            <input type="text" id="masalah" name="masalah" class="form-control" placeholder="Masalah" value="{{$peg -> masalah}}">
                        </div>
                        <div class="form-group">
                            <input type="textarea" id="deskripsi" name="deskripsi" class="form-control" placeholder="Deskripsi" value="{{$peg -> deskripsi}}">
                        </div>
                        <div class="form-group">
                            <input type="text" id="tingkat" name="tingkat" class="form-control" placeholder="Finish Proyek" value="{{$peg -> tingkat}}">
                        </div>
                        <div class="form-group">
                            <input type="date" id="tgl" name="tgl" class="form-control" style="width:200px;" placeholder="Tgl/Bln/Thn" value="{{$peg -> tgl}}">
                        </div>
                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-sm"> Ubah Data </button>
                        </div>

                    </form>
               
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
@endsection