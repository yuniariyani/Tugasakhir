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
                             <label for="exampleFormControlSelect1">Nama Kelompok</label>
                            <input type="text" id="nama_kelompok" name="nama_kelompok" class="form-control" placeholder="Nama kelompok">
                        </div>
                        <div class="form-group">
                             <label for="exampleFormControlSelect1">Total anggota</label>
                            <input type="text" id="total_anggota" name="total_anggota" class="form-control" placeholder="Total Anggota">
                        </div>
                         <div class="form-group">
                            <label for="exampleFormControlSelect1">Wilayah lahan</label>
                            <select class="form-control" name="wilayah_lahan" id="wilayah_lahan" >
                                    <option value="Kelurahan karema">Kelurahan Karema</option>
                                    <option value="Kelurahan Binanga">Kelurahan Binanga</option>
                                    <option value="Kelurahan Rimuku">Kelurahan Rimuku</option>
                                    <option value="Desa Bambu">Desa Bambu</option>
                                    <option value="Kelurahan Binanga">Kelurahan Binanga</option>
                                    <option value="Desa Batu Pannu">Desa Batu Pannu</option>
                                    <option value="Desa Tadui">Desa Tadui</option>
                                    <option value="Kecamatan Mamuju">Kecamatan Mamuju</option>
                                    <option value="Karampuang">Karampuang</option>
                                    
                            </select>
                        </div>
                       
                        <div class="form-group">
                             <label for="exampleFormControlSelect1">Alamat lahan percontohan</label>
                            <input type="text" id="alamat_lahan" name="alamat_lahan" class="form-control" placeholder="Alamat Lahan">
                        </div>

                        <div class="form-group">
                             <label for="exampleFormControlSelect1">Nama Penyuluh</label>
                            <input type="text" id="penyuluh" name="penyuluh" class="form-control" placeholder="Nama Penyuluh">
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