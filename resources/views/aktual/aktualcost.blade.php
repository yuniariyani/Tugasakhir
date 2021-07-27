@extends('layouts.main')
@section('title','Actual Cost')
@section('content')
@section('title2','Actual Cost')
@section('title1','Actual Cost')


 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">

              <!-- /.card-header -->
              <div class="card-body">
                 <div class="timeline-header ">
                    <a href="{{ route('create-aktual') }}" class="btn btn-success btn-sm " >Tambah Actual Cost</a>
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
                    <th>Total Pengeluaran</th>
                    <th>Cost Actual</th>
                    <th>Aksi</th>
                  </tr>

                  
                  </thead>
                  <tbody>
                  @foreach ($dtaktual as $item)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->relasiproyek->nama_proyek}}</td>
                    <td>{{ $item->relasibaseline->kode_anggaran}}</td>
                    <td>@currency ($item->pengeluaran)</td>
                    <td>
                         <a href="{{ url('detailaktual',[$item->id]) }}" class="btn btn-block btn-primary btn-sm" style="center" >Detail</a>
                    </td>
                    <td>
                      
                      <a href="{{ url('edit-aktual',$item->id) }}"><i class="fas fa-edit"></i></a> 
                      | <a href="{{ url('delete-aktual',$item->id) }}"><i class="fas fa-trash-alt" style="color:red"></i></a>

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