@extends('layouts.main')
@section('title','Proyek')
@push('custom-css')
<style>
    body{
        font-family: 'Numito';
    }

</style>
@endpush
@section('content')
@section('title2','Form Edit Proyek Kelompok Tani')
@section('title1','Proyek Kelompok Tani')

 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Edit Proyek kelompok Tani</h3>
              </div>

              <!-- /.card-header -->

                 <div class="card-body">
                 
                    <form action="{{ url('update-proyek', $peg->id) }}" method="post">
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
                            <input type="text" id="kode_proyek" name="kode_proyek" class="form-control" placeholder="Kode Proyek" value="{{$peg -> kode_proyek}}">
                        </div>
                        <div class="form-group">
                            <input type="text" id="nama_proyek" name="nama_proyek" class="form-control" placeholder="Nama Proyek" value="{{$peg -> nama_proyek}}">
                        </div>
                        <div class="form-group">
                            <input type="date" id="start_proyek" name="start_proyek" class="form-control" placeholder="Start Proyek" value="{{$peg -> start_proyek}}">
                        </div>
                        <div class="form-group">
                            <input type="date" id="finish_proyek" name="finish_proyek" class="form-control" placeholder="Finish Proyek" value="{{$peg -> finish_proyek}}">
                        </div>
                        

                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-sm"> Ubah Data </button>
                        </div>

                    </form>
               
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
@endsection