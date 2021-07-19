@extends('layouts.main')
@section('title','Anggota Kelompok Tani')
@push('custom-css')
<style>
    body{
        font-family: 'Numito';
    }

</style>
@endpush
@section('content')
@section('title2','Anggota Kelompok Tani')
@section('title1','Anggota Kelompok')


 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">

              <!-- /.card-header -->
              <div class="card-body">
                 <div class="timeline-header ">
                    <a href="{{ route('create-anggota') }}" class="btn btn-success btn-sm " >Tambah Kelompok Tani</a>
                  </div>

                 <div class="card-body">
                 <div class="timeline-header">
                </div>


                <table class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Kelompok</th>
                    <th>Nama Petani</th>
                    <th>Jabatan</th>
                    <th>NoHP</th>
        
                    <th>Aksi</th>
                  </tr>

                  
                  </thead>
                  <tbody>
                    @foreach ($dtanggota as $item)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->relasigroup->nama_kelompok }}</td>
                    <td>{{ $item->nama_petani }}</td>
                    <td>{{ $item->jabatan }}</td>
                    <td>{{ $item->nohp }}</td>
                
                    
                   
                    <td>
                      <a href="{{ url('click_edit',$item->id)}}"><i class="fas fa-edit"></i></a> 
                      | <a href="{{ url('delete-anggota',$item->id) }}"><i class="fas fa-trash-alt" style="color:red"></i></a>

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