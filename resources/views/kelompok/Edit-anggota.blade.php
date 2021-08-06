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
                <h3 class="card-title">Edit Anggota kelompok Tani</h3>
              </div>

              <!-- /.card-header -->

                 <div class="card-body">
                 
                    <form action="{{ url('update-anggota', $peg->id) }}" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Nama Kelompok</label>
                        <select class="form-control select2" name="relation_group_id" id="relation_group_id" placeholder="Nama Kelompok">

                        <option disabled value>Pilih kelompok</option>
                            @foreach ($hin as $item)
                        <option value="{{$item->id}}"> {{$item->nama_kelompok}} </option>
                            @endforeach
                        </select>
                       </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Nama Petani</label>
                            <input type="text" id="nama_petani" name="nama_petani" class="form-control" placeholder="Nama Petani" value="{{$peg -> nama_petani}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">No Hp</label>
                            <input type="text" id="nohp" name="nohp" class="form-control" placeholder="No.HP" value="{{$peg -> nohp}}">
                        </div>
                         <div class="form-group">
                            <label for="exampleFormControlSelect1">Jabatan</label>
                            <select class="form-control" name="jabatan" id="jabatan" value="{{$peg -> jabatan}}" >
                                    <option value="Ketua Kelompok">Ketua Kelompok</option>
                                    <option value="Sekertaris">Sekertaris</option>
                                    <option value="Bendahara">Bendahara</option>
                                    <option value="Anggota">Anggota</option>           
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-sm"> Ubah Data </button>
                            <a href="{{route('anggota')}}" class="btn btn-primary btn-sm ess" >Batal</a>
                        </div>

                    </form>
               
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
@endsection