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
@section('title2','Form Tambah Bantuan Kelompok Tani')
@section('title1','Bantuan Dana')


 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Create Bantuan Dana Poktan</h3>
              </div>

              <!-- /.card-header -->

                 <div class="card-body">
                 
                    <form action="{{ route('simpan-bantuan') }}" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                        <label for="exampleFormControlSelect1">Nama Kelompok</label>
                        <select class="form-control select2" name="relation_group_id" id="relation_group_id" placeholder="Nama Kelompok">

                        <option disabled value>Pilih kelompok</option>
                            @foreach ($hin as $item)
                        <option value="{{$item->id}}"> {{$item->nama_kelompok}} </option>
                            @endforeach
                        </select>
                       </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Kode Bantuan Dana</label>
                            <input type="text" id="kode_bantuan" name="kode_bantuan" class="form-control" placeholder="Kode Bantuan">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Kategori Bantuan Dana</label>
                            <select class="form-control" name="kategori_bantuan" id="kategori_bantuan" >
                                    <option value="Penghargaan">Penghargaan</option>
                                    <option value="Operasional">Operasional</option>
                                    <option value="Sarana/Prasarana">Sarana/Prasarana</option>
                                    <option value="Gedung/Bangunan">Gedung/Bangunan</option>           
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Nama Bantuan</label>
                            <input type="text" id="nama_bantuan" name="nama_bantuan" class="form-control" placeholder="Nama Bantuan">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Status</label>
                            <select class="form-control" name="status" id="status" >
                                    <option value="Pending">Pending</option>
                                    <option value="Progress">Progress</option>
                                    <option value="Finish">Finish</option>                
                            </select>
                        </div>
                      
   
  
                        <div class="form-group">
                            
                            <button type="submit" class="btn btn-success btn-sm"> Simpan Data </button>
                            <a href="{{route('bantuandana')}}" class="btn btn-primary btn-sm ess" >Batal</a>
                        </div>

                    </form>
               
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
@endsection