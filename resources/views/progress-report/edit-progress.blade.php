@extends('layouts.main')
@section('title','Progress')
@push('custom-css')
<style>
    body{
        font-family: 'Numito';
    }

</style>
@endpush
@section('content')
@section('title2','Form Edit Progress Proyek')
@section('title1','Progress')

 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Edit Progress Report Kelompok Tani</h3>
              </div>

              <!-- /.card-header -->

                 <div class="card-body">
                 
                    <form action="{{ route('update-progress', $dt->id) }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}

                         <div class="form-group">
                            <label for="exampleFormControlSelect1">Tgl/Bln/Thn</label>
                            <input type="date" id="tgl" name="tgl" class="form-control" style="width:200px;" placeholder="Tgl/Bln/Thn" value="{{$dt -> tgl}}">
                        </div>

                        <div class="form-group">
                        <label for="exampleFormControlSelect1">Kode Bantuan</label>
                        <select class="form-control select2" name="bantuan_dana_id" id="bantuan_dana_id" placeholder="Kode Proyek">

                        <option disabled value>Kode Bantuan</option>
                            @foreach ($hin as $item)
                        <option value="{{$item->id}}"> {{$item->kode_bantuan}} </option>
                            @endforeach
                        </select>
                       </div>

                
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Progress Pengerjaan</label>
                            <textarea type="text"  id="progress" name="progress" class="form-control" placeholder="Progress" value="{{$dt -> progress}}"></textarea>
                        </div>
                         <div class="form-group">
                            <label for="exampleFormControlSelect1">Dokumentasi</label>
                            <input type="file" class="form-control-file" id="foto" name="foto">
                            <br>
                            <img src="{{asset('img/'. $dt->foto) }}" height="10%" width="50%" alt="" srcset="">
                            <input type="hidden" class="form-control-file" id="hidden_image" name="hidden_image" value="{{$dt->foto}}">
                        </div>
                        
                        
                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-sm"> Ubah Data </button>
                           <a href="{{route('progress')}}" class="btn btn-primary btn-sm ess" >Kembali</a>
                        </div>

                    </form>
               
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
@endsection