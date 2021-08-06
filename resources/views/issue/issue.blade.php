@extends('layouts.main')
@section('title','Issue Proyek')
@section('content')
@section('title2','Issue Proyek')
@section('title1','Issue Proyek')


 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">

              <!-- /.card-header -->
              <div class="card-body">
                 <div class="timeline-header ">
                    <a href="{{ route('create-issue') }}" class="btn btn-success btn-sm " >Tambah Issue Proyek</a>
                  </div>

                 <div class="card-body">
                 <div class="timeline-header">
                </div>


                <table class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Kode Proyek</th>
                    <th>Tanggal/Bln/Thn</th>
                    <th>Permasalahan</th>
                    <th>Deskripsi</th>
                    <th>Tingkat</th>
                    <th>Aksi</th>
                  </tr>

                  
                  </thead>
                  <tbody>
                  @foreach ($dtissue as $item)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->relasiproyek->kode_proyek}}</td>
                    <td>{{ date('d/m/Y', strtotime ($item->tgl)) }}</td>
                    <td>{{ $item->masalah}}</td>
                    <td>{{ $item->deskripsi}}</td>
                    <td>{{ $item->tingkat}}</td>
                    <td>
                      
                      <a href="{{ url('edit-issue',$item->id) }}"><i class="fas fa-edit"></i></a> 
                      | <a href="{{ url('delete-issue',$item->id) }}"><i class="fas fa-trash-alt" style="color:red"></i></a>

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