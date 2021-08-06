@extends('layouts.main')
@section('title','Progress Report')
@section('content')
@section('title2','Progress Report')
@section('title1','Progress Report')


 <section class="content">
      <div class="container-fluid">
      <h4 class=" h5 text-gray-800">Nama Bantuan Dana</h4>
      <select name="bantuan_dana_id" id="bantuan_dana_id" class="form-control" style="width:390px;"
                    onchange="window.location.href=this.options[this.selectedIndex].value;">
      <option value="{{ url('progress') }}">Semua Data</option>
      @foreach($nama_kelompok as $k)
      <option value="{{ url('progress', $k->id) }}"
      {{ $selected == $k->id ? 'selected' : null }}> {{ $k->nama_bantuan}}</option>
      @endforeach   
      </select> 
      <br>

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar progress penggunaan bantuan dana </h3>
              </div>

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
                    <th>#</th>
                    <th>Nama Bantuan</th>
                    <th>Date</th>
                    <th>Deskripsi Progress</th>
                    <th>Dokumentasi</th>
                    <th>Aksi</th>
                  </tr>

                  
                  </thead>
                  <tbody>
                  @foreach ($dtprogress as $item)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->rbantuandana->nama_bantuan}}</td>
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