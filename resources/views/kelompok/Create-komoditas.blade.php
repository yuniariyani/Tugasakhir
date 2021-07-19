@extends('layouts.main')
@section('title','Anggota Kelompok')
@push('custom-css')
<style>
    body{
        font-family: 'Numito';
    }

</style>
@endpush
@section('content')
@section('title2','Form Anggota Kelompok Tani')
@section('title1','Anggota Kelompok')


 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Create Komoditas Poktan</h3>
              </div>



              <!-- /.card-header -->

                 <div class="card-body">
                 
                    <form action="{{ route('simpan-komoditas') }}" method="post">
                        {{ csrf_field() }}

                        
                       <div class="form-group">
                        <select class="form-control select2" name="anggota_id" id="anggota_id" placeholder="Nama Kelompok">

                        <option disabled value>Pilih kelompok</option>
                            @foreach ($hun as $item)
                        <option value="{{$item->id}}"> {{$item->nama_kelompok}} </option>
                            @endforeach
                        </select>
                       </div>

                        <div class="form-group">
                            <input type="text" id="nama_blok" name="nama_blok" class="form-control" placeholder="Nama Blok">
                        </div>
                        <div class="form-group">
                            <input type="text" id="luas_blok" name="luas_blok" class="form-control" placeholder="Luas Blok">
                        </div>

                         <div class="form-group">
                            <input type="text" id="komoditas" name="komoditas" class="form-control" placeholder="Nama Komoditas">
                        </div>
                         <div class="form-group">
                            <input type="date" id="tanggal_tanam" name="tanggal_tanam" class="form-control" placeholder="Tanggal Tanam">
                        </div>

 

        
  
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-sm"> Simpan Data </button>
                        </div>

                    </form>
               
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
@endsection