@extends('layouts.main')
@section('title','Kelompok Tani')
@push('custom-css')
<style>
    body{
        font-family: 'Numito';
    }

</style>
@endpush
@section('content')
@section('title2','Kelompok Tani')
@section('title1','Kelompok Tani')



 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
               <div class="card-header">
                <h3 class="card-title">Daftar kelompok tani yang terdaftar</h3>
              </div>

              <!-- /.card-header -->
                <div class="card-body">
                 <div class="timeline-header ">
                    @if (Auth::user()->level == 'admin')
                    <a href="{{ route('create-kelompoktani') }}" class="btn btn-success btn-sm " >Tambah Poktan</a>
                    @endif
                  </div>

                 <div class="card-body">
                 <div class="timeline-header">
                  </div>


                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Kelompok</th>
                    <th>Jumlah anggota</th>
                    <th>Wilayah Lahan</th>
                    <th>Alamat Lahan Percontohan</th>
                    <th>Penyuluh</th>
                    @if (Auth::user()->level == 'admin')
                    <th>Aksi</th>
                    @endif
                     
                  </tr>
                  </thead>
                  <tbody>
                   
                  
                     @foreach ($dtkelompok as $item)
                   <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama_kelompok }}</td>
                    <td>{{ $item->total_anggota }}</td>
                    <td>{{ $item->wilayah_lahan }}</td>
                    <td>{{ $item->alamat_lahan }}</td>
                    <td>{{ $item->penyuluh}}</td>
                      @if (Auth::user()->level == 'admin')
                      <td>
                      <a href=""><i class="fas fa-edit"></i></a> 
                      | <a href="{{ url('delete-kelompoktani',$item->id)}}"><i class="fas fa-trash-alt" style="color:red"></i></a>

                    </td>
                      @endif
                           
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