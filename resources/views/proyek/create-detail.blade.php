@extends('layouts.main')
@section('title','Proyek')
@push('custom-css')
<style>
    body{
        font-family: 'Numito';
    }

</style>
@endpush
@section('content')
@section('title2','Form Proyek Kelompok Tani')
@section('title1','Proyek Kelompok Tani')


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
                 
                    <form action="{{ route('simpan-detail') }}" method="post">
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
                            <input type="text" id="Kegiatan" name="kegiatan" class="form-control" placeholder="Kegiatan">
                        </div>
                        <div class="form-group">
                            <input type="text" id="sub_kegiatan" name="sub_kegiatan" class="form-control" placeholder="Sub-Kegiatan">
                        </div>
                        <div class="form-group">
                            <input type="text" id="durasi" name="durasi" class="form-control" placeholder="Durasi Pengerjaan">
                        </div>
                        <div class="form-group">
                            <input type="date" id="start" name="start" class="form-control" placeholder="Start">
                        </div>
                        <div class="form-group">
                            <input type="date" id="finish" name="finish" class="form-control" placeholder="Finish">
                        </div>
                        

                        
  
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-sm"> Simpan Data </button>
                            <a href="{{route('detail-kegiatan')}}" class="btn btn-primary btn-sm ess" >Kembali</a>
                        </div>

                    </form>
               
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
@endsection