@extends('layouts.main')
@section('title','Actual Cost')
@push('custom-css')
<style>
    body{
        font-family: 'Numito';
    }

</style>
@endpush
@section('content')
@section('title2','Form Tambah Actual Cost Proyek')
@section('title1','Actual Cost')


 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Create Actual Cost Proyek</h3>
              </div>

              <!-- /.card-header -->

                 <div class="card-body">
                 
                    <form action="{{ route('simpan-aktual') }}" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                        <select class="form-control select2" name="proyek_id" id="proyek_id" placeholder="Nama Proyek">

                        <option disabled value>kode_proyek</option>
                            @foreach ($hin as $item)
                        <option value="{{$item->id}}"> {{$item->nama_proyek}} </option>
                            @endforeach
                        </select>
                       </div>

                        <div class="form-group">
                        <select class="form-control select2" name="costbaseline_id" id="costbaseline_id" placeholder="Kode Anggaran">

                        <option disabled value>kode_proyek</option>
                            @foreach ($hun as $item)
                        <option value="{{$item->id}}"> {{$item->kode_anggaran}} </option>
                            @endforeach
                        </select>
                       </div>

                        <div class="form-group">
                            <input type="text" id="pengeluaran" name="pengeluaran" class="form-control" placeholder="Pengeluaran Proyek">
                        </div>
                      
  
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-sm"> Simpan Data </button>
                            <a href="{{route('aktualcost')}}" class="btn btn-primary btn-sm ess" >Kembali</a>
                        </div>

                    </form>
               
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
@endsection