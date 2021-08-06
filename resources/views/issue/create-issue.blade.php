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
@section('title2','Form Tambah Issue Report Bantuan Dana')
@section('title1','Issue Report')


 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Create issue report penggunaan bantuan dana</h3>
              </div>

              <!-- /.card-header -->

                 <div class="card-body">
                 
                    <form action="{{ route('simpan-issue') }}" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Tgl/Bln/Thn Kejadian</label>
                            <input type="date" id="tgl" name="tgl" class="form-control" style="width:200px;" placeholder="Tgl/Bln/Thn">
                        </div>

                        <div class="form-group">
                        <label for="exampleFormControlSelect1">Kode Bantuan</label>
                        <select class="form-control select2" name="bantuan_dana_id" id="bantuan_dana_id" placeholder="Nama Kelompok">

                        <option disabled value>Kode Bantuan</option>
                            @foreach ($hin as $item)
                        <option value="{{$item->id}}"> {{$item->nama_bantuan}} </option>
                            @endforeach
                        </select>
                       </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1"> Masalah</label>
                            <input type="text" id="masalah" name="masalah" class="form-control" placeholder="Masalah">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Deskripsi Masalah</label>
                            <textarea type="text" id="deskripsi" name="deskripsi" class="form-control" placeholder="Deskripsi"></textarea>
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
                            <button type="submit" class="btn btn-success btn-sm"> Simpan Data </button>
                            <a href="{{route('issue')}}" class="btn btn-primary btn-sm ess" >Kembali</a>
                        </div>

                    </form>
               
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
@endsection