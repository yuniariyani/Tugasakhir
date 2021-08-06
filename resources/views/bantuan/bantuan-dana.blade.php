@extends('layouts.main')
@section('title','Bantuan Dana Poktan')
@section('content')
@section('title2','Bantuan Dana Poktan')
@section('title1','Bantuan Dana')


 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar Bantuan Dana kelompok tani yang terdaftar</h3>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
                 <div class="timeline-header ">
                    <a href="{{ route('create-bantuan') }}" class="btn btn-success btn-sm " >Tambah Bantuan Poktan</a>
                  </div>

                  <br>

                <table class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Nama Kelompok</th>
                    <th>Kode Bantuan</th>
                    <th>Kategori Bantuan</th>
                    <th>Nama Bantuan</th>
                    <th>Status</th>
                    <th colspan="1">Plan/Cost</th>
                    <th>Aksi</th>
                  </tr>

                  
                  </thead>
                  <tbody>
                    @foreach ($dtbantuan as $item)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->relasigroup->nama_kelompok }}</td>
                    <td>{{ $item->kode_bantuan }}</td>
                    <td>{{ $item->kategori_bantuan }}</td>
                    <td>{{ $item->nama_bantuan }}</td>
                    <td>{{ $item->status}}</td>
                    <td width="120">
                       <div class='btn-group'>
                         <a href="{{ url('detailkegiatan',[$item->id]) }}" class="btn btn-outline-primary btn-sm" style="center" >Plan</a>
                         <a href="{{ url('detailcost',[$item->id]) }}" class="btn btn-primary btn-sm" style="center" >Cost</a>
                          <a href="{{ url('cetakcost',[$item->id]) }}" class="btn btn-outline-primary btn-sm" style="center" target="_blank" ><i class="fas fa-print"></i></a>

                       </div>
                    
                    </td>
                    
                    <td>
                      <a href="{{ url('edit-bantuan',$item->id) }}"><i class="fas fa-edit"></i></a> 
                      | <a href="{{ url('delete-bantuan',$item->id) }}"><i class="fas fa-trash-alt" style="color:red"></i></a>

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