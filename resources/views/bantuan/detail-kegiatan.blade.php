@extends('layouts.main')
@section('title','Planning')
@push('custom-css')
<style>
    body{
        font-family: 'Numito';
    }

</style>
@endpush
@section('content')
@section('title2','Detail Planning Bantuan') <!--Judul Halaman-->
@section('title1','Bantuan Dana')


 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
               <div class="card-header">
                <h3 class="card-title">Daftar detail planning bantuan dana poktan</h3>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
                 <div class="timeline-header ">
                   
                    <form action="{{ route('create-detail') }}" method="post" class="d-inline">
                      @csrf
                      @method('post')
                      <input type="hidden" name="id_dana" value="{{$id_dana}}">
                      @if (Auth::user()->level == 'admin')
                      <button class="btn btn-success btn-sm">Tambah Planning</button>
                      @endif
                    </form>
                    <!-- <a href="{{route('create-detail')}}" class="btn btn-success btn-sm " >Tambah Planning</a> -->
                    <a href="{{route('bantuandana')}}"  class="btn btn-primary btn-sm ess" >Kembali</a>
                  </div>

                 
                
                 <div class="card-body">
                 <div class="timeline-header">
                  
                </div>

                <table class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Kegiatan</th>
                    <th>Sub-Kegiatan</th>
                    <th>Durasi (Hari)</th>
                    <th>Start</th>
                    <th>Finish</th>
                    @if (Auth::user()->level == 'admin')
                    <th>Aksi</th>
                    @endif
                  </tr>

                  
                  </thead>
                  <tbody>
                   @foreach ($dtplan as $item)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->rbantuandana->kode_bantuan}}</td>
                    <td>{{ $item->kegiatan }}</td>
                    <td>{{ $item->sub_kegiatan }}</td>
                    <td>{{ $item->durasi }}</td>
                    <td>{{ date('d/m/Y', strtotime($item->start))}}</td>
                    <td>{{ date('d/m/Y', strtotime($item->finish))}}</td>
                 
                    @if (Auth::user()->level == 'admin')
                    <td>
                      <a href="{{ url('edit-detail',$item->id) }}"><i class="fas fa-edit"></i></a> 
                      | <a href="{{ url('delete-detail',$item->id) }}"><i class="fas fa-trash-alt" style="color:red"></i></a>

                    </td>
                    @endif
                  </tr>

                  
                 @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
           
@endsection