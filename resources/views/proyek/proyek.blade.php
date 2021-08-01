@extends('layouts.main')
@section('title','Bantuan Kelompok Tani')
@section('content')
@section('title2','Bantuan Kelompok Tani')
@section('title1','Bantuan Kelompok Tani')


 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">

              <!-- /.card-header -->
              <div class="card-body">
                 <div class="timeline-header ">
                    <a href="{{ route('create-proyek') }}" class="btn btn-success btn-sm " >Tambah Proyek Poktan</a>
                  </div>

                  <br>

                <table class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Kelompok</th>
                    <th>Kode Proyek</th>
                    <th>Nama Proyek</th>
                    <th>Start</th>
                    <th>End</th>
                    <th>Planning</th>
                    <th>Aksi</th>
                  </tr>

                  
                  </thead>
                  <tbody>
                    @foreach ($dtproyek as $item)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->relasigroup->nama_kelompok }}</td>
                    <td>{{ $item->kode_proyek }}</td>
                    <td>{{ $item->nama_proyek }}</td>
                    <td>{{ date('d/m/Y', strtotime($item->start_proyek)) }}</td>
                    <td>{{ date('d/m/Y', strtotime($item->finish_proyek)) }}</td>
                    <td>
                         <a href="{{ url('detailkegiatan',[$item->id]) }}" class="btn btn-block btn-primary btn-sm" style="center" >Detail</a>
                    </td>
                    
                   
                    <td>
                      <a href="{{ url('edit-proyek',$item->id) }}"><i class="fas fa-edit"></i></a> 
                      | <a href="{{ url('delete-proyek',$item->id) }}"><i class="fas fa-trash-alt" style="color:red"></i></a>

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