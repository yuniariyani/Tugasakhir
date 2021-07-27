@extends('layouts.main')
@section('title','Cost Baseline Proyek')
@section('content')
@section('title2','Cost Baseline Proyek')    
@section('title1','Cost Baseline Proyek')


 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">

              <!-- /.card-header -->
              <div class="card-body">
                 <div class="timeline-header ">
                    <a href="{{ route('create-cost') }}" class="btn btn-success btn-sm " >Tambah Cost Baseline</a>
                  </div>

                 <div class="card-body">
                 <div class="timeline-header">
                </div>


                <table class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Proyek</th>
                    <th>Kode Anggaran</th>
                    <th>Total Anggaran Biaya</th>
                    <th>Cost Baseline</th>
                    <th>Aksi</th>
                  </tr>

                  
                  </thead>
                  <tbody>
                  @foreach ($dtcost as $item)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->relasiproyek->nama_proyek}}</td>
                    <td>{{ $item->kode_anggaran}}</td>
                    <td>@currency ($item->total_anggaran)</td>
                    <td>
                         <a href="{{ url('detailcost',[$item->id]) }}" class="btn btn-block btn-primary btn-sm" style="center" >Detail</a>
                    </td>
                    
                   
                    <td>
                      <a href="{{ url('edit-cost',$item->id) }}"><i class="fas fa-edit"></i></a> 
                      | <a href="{{ url('delete-cost',$item->id) }}"><i class="fas fa-trash-alt" style="color:red"></i></a>

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