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
@section('title2','Form Kelompok Tani')
@section('title1','Kelompok Tani')


 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Create kelompok Tani</h3>
              </div>

              <!-- /.card-header -->

                 <div class="card-body">
                 
                    <form action="{{ route('simpan-kelompoktani') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="text" id="nama_kelompok" name="nama_kelompok" class="form-control" placeholder="Nama kelompok">
                        </div>
                        <div class="form-group">
                            <input type="text" id="total_anggota" name="total_anggota" class="form-control" placeholder="Total Anggota">
                        </div>
                        <div class="form-group">
                            <input type="text" id="wilayah_lahan" name="wilayah_lahan" class="form-control" placeholder="Wilayah Lahan">
                        </div>
                        <div class="form-group">
                            <input type="text" id="alamat_lahan" name="alamat_lahan" class="form-control" placeholder="Alamat Lahan">
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