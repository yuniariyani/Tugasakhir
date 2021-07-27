@extends('layouts.main')
@section('title','Cost Baseline')
@push('custom-css')
<style>
    body{
        font-family: 'Numito';
    }

</style>
@endpush
@section('content')
@section('title2','Form Edit Cost Proyek')
@section('title1','Cost Baseline')

 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Edit Cost Proyek kelompok Tani</h3>
              </div>

              <!-- /.card-header -->

                 <div class="card-body">
                 
                    <form action="{{ url('update-cost', $peg->id) }}" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                        <select class="form-control select2" name="proyek_id" id="proyek_id" placeholder="Kode Proyek">

                        <option disabled value>Kode Proyek</option>
                            @foreach ($hin as $item)
                        <option value="{{$item->id}}"> {{$item->kode_proyek}} </option>
                            @endforeach
                        </select>
                       </div>

                        <div class="form-group">
                            <input type="text" id="kode_anggaran" name="kode_anggaran" class="form-control" placeholder="Kode Anggaran" value="{{$peg -> kode_anggaran}}">
                        </div>
                        <div class="form-group">
                            <input type="text" id="total_anggaran" name="total_anggaran" class="form-control" placeholder="Total Anggaran" value="{{$peg -> total_anggaran}}">
                        </div>
                        

                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-sm"> Ubah Data </button>
                            <a href="{{route('costbaseline')}}" class="btn btn-primary btn-sm ess" >Kembali</a>
                        </div>

                    </form>
               
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
@endsection