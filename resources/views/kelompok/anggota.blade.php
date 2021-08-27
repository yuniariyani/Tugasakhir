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

<!--Hak Akses Button/Icon-->
@switch (session('permission'))
    @case('admin')
    @section('penyuluh','hidden')
    @break
    @default
@endswitch



 <section class="content">

 
      <div class="container-fluid">

      <h4 class=" h5 text-gray-800">Kelompok Tani</h4>
      <select name="relation_group_id" id="relation_group_id" class="form-control" style="width:350px;"
                    onchange="window.location.href=this.options[this.selectedIndex].value;">
      <option value="{{ url('anggota') }}">Seluruh Kelompok</option>
      @foreach($nama_kelompok as $k)
      <option value="{{ url('anggota/anggotatani', $k->id) }}"
      {{ $selected == $k->id ? 'selected' : null }}> {{ $k->nama_kelompok}}</option>
      @endforeach   
      </select> 
      <br>
      
        <div class="row">
          <div class="col-12">
            <div class="card">
                 <div class="card-header">
                <h3 class="card-title">Daftar detail anggota kelompok tani</h3>
              </div>
              

              <!-- /.card-header -->
              <div class="card-body">
                 <div class="timeline-header ">
                    @if (Auth::user()->level == 'admin')
                    <a href="{{ route('create-anggota') }}" class="btn btn-success btn-sm " >Tambah Kelompok Tani</a>
                    @endif
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
                 
                     @if (Auth::user()->level == 'admin')
                    <th>Aksi</th>
                     @endif
                    
                  
                  </tr>

                  
                  </thead>
                  <tbody>
                    @foreach ($dtanggota as $item)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->relasigroup->nama_kelompok }}</td>
                    <td>{{ $item->nama_petani }}</td>
                    <td>{{ $item->jabatan }}</td>
                    <td>0{{ $item->nohp }}</td>
                
                    
             
                    @if (Auth::user()->level == 'admin')
                    <td>
            
                      <a href="{{ url('click_edit',$item->id)}}"><i class="fas fa-edit"></i></a> 
                      | <a href="{{ url('delete-anggota',$item->id) }}"><i class="fas fa-trash-alt" style="color:red"></i></a>
                      </div>
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