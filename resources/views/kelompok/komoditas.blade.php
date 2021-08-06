@extends('layouts.main')
@section('title','Komoditas')
@push('custom-css')
<style>
    body{
        font-family: 'Numito';
    }

</style>
@endpush
@section('content')
@section('title2','Komoditas Kelompok Tani')
@section('title1','komoditas')



 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar komoditas kelompok tani</h3>
              </div>

              <!-- /.card-header -->
                <div class="card-body">
                 <div class="timeline-header ">
                    <a href="{{ route('create-komoditas') }}" class="btn btn-success btn-sm " >Tambah Komoditas</a>
                  </div>

                 <div class="card-body">
                 <div class="timeline-header">
                  </div>


                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Kelompok</th>
                    <th>Nama Blok</th>
                    <th>Luas Blok(Ha)</th>
                    <th>Komoditas</th>
                    <th>Tanggal Tanam</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                   
                
                    @foreach ($dtblok as $tem)
                   <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $tem->relasigroup->nama_kelompok}}</td>
                    <td>{{ $tem->nama_blok }}</td>
                    <td>{{ $tem->luas_blok }}</td>
                    <td>{{ $tem->komoditas }}</td>
                    <td>{{  date('d/m/Y', strtotime ($tem->tanggal_tanam)) }}</td>
                 
                      <td>
                      <a href="{{ url('edit-komoditas',$tem->id) }}"><i class="fas fa-edit"></i></a> 
                      | <a href="{{ url('delete-komoditas',$tem->id) }}"><i class="fas fa-trash-alt" style="color:red"></i></a>

                    </td>
                    </tr>
                     @endforeach
                 
                    </tbody>
        
                 

                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
@endsection