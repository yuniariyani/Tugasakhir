@extends('layouts.main')
@section('title','User')
@push('custom-css')
<style>
    body{
        font-family: 'Numito';
    }

</style>
@endpush
@section('content')
@section('title2','User Management')
@section('title1','User Management')



 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">

              <!-- /.card-header -->
                <div class="card-body">
                 <div class="timeline-header ">
                    <a href="{{ route('create-user') }}" class="btn btn-success btn-sm " >Tambah User</a>
                  </div>

                 <div class="card-body">
                 <div class="timeline-header">
                  </div>


                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Level</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                   
                       @foreach ($dtuser as $item)
                   <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->username }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->level }}</td>
                 
                 
                 
                      <td>
                      <a href=""><i class="fas fa-edit"></i></a> 
                      | <a href="{{ url('delete-user',$item->id) }}"><i class="fas fa-trash-alt" style="color:red"></i></a>

                    </td>
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