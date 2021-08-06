@extends('layouts.main')
@section('title','Progress Report')
@section('content')
@section('title2','Progress Report')
@section('title1','Progress Report')


 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">

              <!-- /.card-header -->
              <div class="card-body">
                 <div class="timeline-header ">
                    <a href="{{ route('createprogress') }}" class="btn btn-success btn-sm " >Tambah Progress Proyek</a>
                  </div>

                 <div class="card-body">
                 <div class="timeline-header">
                </div>


                <table class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode Proyek</th>
                    <th>Tanggal/Bln/Thn</th>
                    <th>Progress Proyek</th>
                    <th>Dokumentasi</th>
                    <th>Aksi</th>
                  </tr>

                  
                  </thead>
                  <tbody>
                  @foreach ($dtprogress as $item)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->relasiproyek->kode_proyek}}</td>
                    <td>{{ date('d/m/Y', strtotime ($item->tgl)) }}</td>
                    <td>{{ $item->progress}}</td>
                    <td>
                      
                        <a href="{{ asset('img/'.$item->foto) }}" target="_blank" rel="noopener noreferrer">Lihat Gambar</td>
                    
                    
                    <td>
                      <a href="{{ url('edit-progress',$item->id) }}"><i class="fas fa-edit"></i></a> 
                      | <a href="{{ url('delete-progress',$item->id) }}"><i class="fas fa-trash-alt" style="color:red"></i></a>

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