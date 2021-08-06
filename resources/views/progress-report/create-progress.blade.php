@extends('layouts.main')
@section('title','Progress Report')
@push('custom-css')
<style>
    body{
        font-family: 'Numito';
    }

</style>
@endpush
@section('content')
@section('title2','Form Progress Report')
@section('title1','Progress Report')


 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Create progress report penggunaan bantuan dana</h3>
              </div>

              <!-- /.card-header -->

                 <div class="card-body">
                 
                    <form action="{{ route('simpan-progress') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group">
                        <label for="exampleFormControlSelect1">Kode Bantuan</label>
                        <select class="form-control select2" name="bantuan_dana_id" id="bantuan_dana_id" placeholder="Nama Kelompok">

                        <option disabled value>Nama Bantuan</option>
                            @foreach ($hin as $item)
                        <option value="{{$item->id}}"> {{$item->nama_bantuan}} </option>
                            @endforeach
                        </select>
                       </div>

                        
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Progress Pengerjaan</label>
                            <input type="text" id="progress" name="progress" class="form-control" placeholder="Progress">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Tgl/Bln/Thn</label>
                            <input type="date" id="tgl" name="tgl" class="form-control"  style="width:200px;" placeholder="Tanggal">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Dokumentasi</label>
                            <input type="file" id="foto" name="foto"  placeholder="Dokumentasi">
                        </div>

                        
  
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-sm"> Simpan Data </button>
                            <a href="{{route('progress')}}" class="btn btn-primary btn-sm ess" >Kembali</a>
                        </div>

                    </form>
               
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
@endsection