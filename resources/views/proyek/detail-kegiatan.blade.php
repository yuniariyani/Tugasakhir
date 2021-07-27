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
@section('title2','Proyek Kelompok Tani / Planning Proyek') <!--Judul Halaman-->
@section('title1','Proyek Kelompok Tani')


 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">

              <!-- /.card-header -->
              <div class="card-body">
                 <div class="timeline-header ">
                    <a href="{{route('proyek')}}" class="btn btn-primary btn-sm ess" >Kembali</a>
                    <a href="{{route('create-detail')}}" class="btn btn-success btn-sm " >Tambah Planning</a>
                   
                  </div>

                
                 <div class="card-body">
                 <div class="timeline-header">
                  
                </div>

                <table class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode Proyek</th>
                    <th>Kegiatan</th>
                    <th>Sub-Kegiatan</th>
                    <th>Durasi (Hari)</th>
                    <th>Start</th>
                    <th>Finish</th>
                    <th>Aksi</th>
                  </tr>

                  
                  </thead>
                  <tbody>
                   @foreach ($dtplan as $item)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->proyek->kode_proyek}}</td>
                    <td>{{ $item->kegiatan }}</td>
                    <td>{{ $item->sub_kegiatan }}</td>
                    <td>{{ $item->durasi }}</td>
                    <td>{{ date('d/m/Y', strtotime($item->start))}}</td>
                    <td>{{ date('d/m/Y', strtotime($item->finish))}}</td>
                 
                    
                    <td>
                      <a href="{{ url('edit-detail',$item->id) }}"><i class="fas fa-edit"></i></a> 
                      | <a href="{{ url('delete-detail',$item->id) }}"><i class="fas fa-trash-alt" style="color:red"></i></a>

                    </td>
                  </tr>

                  
                 @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
           
@endsection