@extends('layouts.main')
@section('title','Anggota Kelompok')
@push('custom-css')
<style>
    body{
        font-family: 'Numito';
    }

</style>
@endpush
@section('content')
@section('title2','Form Anggota Kelompok Tani')
@section('title1','Anggota Kelompok')


 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Create Anggota kelompok Tani</h3>
              </div>

              <!-- /.card-header -->

                 <div class="card-body">
                 
                    <form action="{{ route('simpan-anggota') }}" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                        <select class="form-control select2" name="relation_group_id" id="relation_group_id" placeholder="Nama Kelompok">

                        <option disabled value>Pilih kelompok</option>
                            @foreach ($hin as $item)
                        <option value="{{$item->id}}"> {{$item->nama_kelompok}} </option>
                            @endforeach
                        </select>
                       </div>

                        <div class="form-group">
                            <input type="text" id="nama_petani" name="nama_petani" class="form-control" placeholder="Nama Petani">
                        </div>
                        <div class="form-group">
                            <input type="text" id="nohp" name="nohp" class="form-control" placeholder="No.HP">
                        </div>
                        <div class="form-group">
                            <input type="text" id="jabatan" name="jabatan" class="form-control" placeholder="Jabatan">
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