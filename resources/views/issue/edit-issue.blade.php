@extends('layouts.main')
@section('title','Issue Report')
@push('custom-css')
<style>
    body{
        font-family: 'Numito';
    }

</style>
@endpush
@section('content')
@section('title2','Form Edit Issue Report')
@section('title1','Issue Report')

 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Edit issue report penggunaan bantuan dana</h3>
              </div>

              <!-- /.card-header -->

                 <div class="card-body">
                 
                    <form action="{{ url('update-issue', $peg->id) }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Tgl/Bln/Thn Kejadian</label>
                            <input type="date" id="tgl" name="tgl" class="form-control" style="width:200px;" placeholder="Tgl/Bln/Thn" value="{{$peg -> tgl}}">
                        </div>

                        <div class="form-group">
                        <label for="exampleFormControlSelect1">Nama Bantuan</label>
                        <select class="form-control select2" name="bantuan_dana_id" id="bantuan_dana_id" placeholder="Kode Proyek">

                        <option disabled value>Pilih Kode</option>
                            @foreach ($hin as $item)
                        <option value="{{$item->id}}"> {{$item->nama_bantuan}} </option>
                            @endforeach
                        </select>
                       </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Masalah</label>
                            <input type="text" id="masalah" name="masalah" class="form-control" placeholder="Masalah" value="{{$peg -> masalah}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Deskripsi</label>
                            <input type="text" id="deskripsi" name="deskripsi" class="form-control" placeholder="Deskripsi" value="{{$peg -> deskripsi}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Tingkat Keparahan Masalah</label>
                            <select class="form-control" name="tingkat" id="tingkat" style="width:200px;" >
                                    <option value="Rendah">Rendah</option>
                                    <option value="Sedang">Sedang</option>
                                    <option value="Parah">Parah</option>       
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-sm"> Ubah Data </button>
                            <a href="{{route('issue')}}" class="btn btn-primary btn-sm ess" >Kembali</a>
                        </div>

                    </form>
               
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
@endsection