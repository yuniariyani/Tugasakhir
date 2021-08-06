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
                            <label for="username">Username</label>
                            <input type="text" id="username" name="username" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="name">Deskripsi</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Deskripsi">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" id="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Level User</label>
                            <select class="form-control" name="level" id="level" >
                                    <option value="admin">Admin</option>
                                    <option value="penyuluh">Penyuluh</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="pass">Password</label>
                            <input type="password" id="password" name="password" class="form-control" placeholder="password">
                        </div>
                        
  
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-sm"> Simpan Data </button>
                            <a href="{{route('user')}}" class="btn btn-primary btn-sm ess" >Kembali</a>
                        </div>

                    </form>
               
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
@endsection