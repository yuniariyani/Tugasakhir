@extends('layouts.main')
@section('title','Progress Proyek')
@push('custom-css')
<style>
    body{
        font-family: 'Numito';
    }

</style>
@endpush
@section('content')
@section('title2','Form Progress Proyek')
@section('title1','Progress')


 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Create Progress Report Proyek</h3>
              </div>

              <!-- /.card-header -->

                 <div class="card-body">
                 
                    <form action="{{ route('simpan-progress') }}" method="post" enctype="multipart/form-data">
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
                            <input type="text" id="progress" name="progress" class="form-control" placeholder="Progress">
                        </div>
                        <div class="form-group">
                            <input type="date" id="tgl" name="tgl" class="form-control"  style="width:200px;" placeholder="Tanggal">
                        </div>
                        <div class="form-group">
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