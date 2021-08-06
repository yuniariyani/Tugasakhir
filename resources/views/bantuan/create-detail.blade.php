@extends('layouts.main')
@section('title','Bantuan Dana')
@push('custom-css')
<style>
    body{
        font-family: 'Numito';
    }

</style>
@endpush
@section('content')
@section('title2','Form Tambah Plan Bantuan Dana')
@section('title1','Bantuan Dana')


 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Create Detail Planning</h3>
              </div>

              <!-- /.card-header -->

                 <div class="card-body">
                    

                    <form action="{{ route('simpan-detail')}}" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                        <label for="exampleFormControlSelect1">Kode Bantuan</label>
                        <select class="form-control select2" name="bantuan_dana_id" id="bantuan_dana_id" placeholder="Nama Kelompok">

                        <option disabled value>Kode Bantuan</option>
                            @foreach ($hin as $item)
                        <option value="{{$item->id}}"> {{$item->kode_bantuan}} </option>
                            @endforeach
                        </select>
                       </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Kategori Bantuan Dana</label>
                            <select class="form-control" name="kegiatan" id="kegiatan" >
                                    <option value="Pembelian">Pembelian</option>
                                    <option value="Eksekusi/Pembangunan">Eksekusi/Pembangunan</option>
                                    <option value="Pengujian Alat/Mesin">Pengujian Alat/Bahan</option>          
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Sub-Kegiatan</label>
                            <input type="text" id="sub_kegiatan" name="sub_kegiatan" class="form-control" placeholder="Sub-Kegiatan">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Durasi</label>
                            <input type="text" id="durasi" name="durasi" class="form-control" placeholder="Durasi Pengerjaan">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Start</label>
                            <input type="date" id="start" name="start" style="width:200px;" class="form-control" placeholder="Start">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Finish</label>
                            <input type="date" id="finish" name="finish" style="width:200px;" class="form-control" placeholder="Finish">
                        </div>
                        

                        
                      <input type="hidden" name="id_dana" value="{{$id_dana}}">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-sm"> Simpan Data </button>
                            <a href="{{ url()->previous()}}" class="btn btn-primary btn-sm ess" >Kembali</a>
                        </div>

                    </form>
               
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
@endsection