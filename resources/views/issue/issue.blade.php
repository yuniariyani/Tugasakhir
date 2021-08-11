@extends('layouts.main')
@section('title','Issue Report')
@section('content')
@section('title2','Issue Report')
@section('title1','Issue Report')


 <section class="content">
      <div class="container-fluid">
      <h4 class=" h5 text-gray-800">Bantuan Dana</h4>
      <select name="bantuan_dana_id" id="bantuan_dana_id" class="form-control" style="width:350px;"
                    onchange="window.location.href=this.options[this.selectedIndex].value;">
      <option value="{{ url('issue') }}">Semua Data</option>
      @foreach($nama_bantuan as $k)
      <option value="{{ url('issue', $k->id) }}"
      {{ $selected == $k->id ? 'selected' : null }}> {{ $k->nama_bantuan}}</option>
      @endforeach   
      </select> 
      <br>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar issue report penggunaan bantuan dana</h3>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
                 <div class="timeline-header ">
                    <a href="{{ route('create-issue') }}" class="btn btn-success btn-sm " >Tambah Issue Report</a>
                  </div>

                 <div class="card-body">
                 <div class="timeline-header">
                </div>

                <table class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Nama Bantuan</th>
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
                    <td>{{ $item->rbantuandana->nama_bantuan}}</td>
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