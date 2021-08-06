@extends('layouts.main')
@section('title','Issue Proyek')
@push('custom-css')
<style>
    body{
        font-family: 'Numito';
    }

</style>
@endpush
@section('content')
@section('title2','Form Tambah Issue Proyek')
@section('title1','Issue Proyek')


 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Create Issue Proyek</h3>
              </div>

              <!-- /.card-header -->

                 <div class="card-body">
                 
                    <form action="{{ route('simpan-issue') }}" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                        <select class="form-control select2" name="proyek_id" id="proyek_id" placeholder="Nama Kelompok">

                        <option disabled value>kode_proyek</option>
                            @foreach ($hin as $item)
                        <option value="{{$item->id}}"> {{$item->kode_proyek}} </option>
                            @endforeach
                        </select>
                       </div>

                        <div class="form-group">
                            <input type="text" id="masalah" name="masalah" class="form-control" placeholder="Masalah Proyek">
                        </div>
                        <div class="form-group">
                            <input type="text" id="deskripsi" name="deskripsi" class="form-control" placeholder="Deskripsi">
                        </div>
                        <div class="form-group">
                            <input type="text" id="tingkat" name="tingkat" class="form-control" placeholder="Tingkat">
                        </div>
                        <div class="form-group">
                            <input type="date" id="tgl" name="tgl" class="form-control" placeholder="Tgl/Bln/Thn">
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