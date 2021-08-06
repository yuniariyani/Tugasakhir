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
@section('title2','Form User Management')
@section('title1','User Management')


 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Create User</h3>
              </div>

              <!-- /.card-header -->

                 <div class="card-body">
                 
                    <form action="{{ route('simpan-user') }}" method="post">
                        {{ csrf_field() }}

                    

                        <div class="form-group">
                            <input type="text" id="username" name="username" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="text" id="name" name="name" class="form-control" placeholder="Deskripsi">
                        </div>
                        <div class="form-group">
                            <input type="text" id="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" id="level" name="level" class="form-control" placeholder="Level">
                        </div>

                        <div class="form-group">
                            <input type="password" id="password" name="password" class="form-control" placeholder="Level">
                        </div>
                        
  
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-sm"> Simpan Data </button>
                        </div>

                    </form>
               
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
@endsection