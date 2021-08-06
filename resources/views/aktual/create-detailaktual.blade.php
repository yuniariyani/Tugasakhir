@extends('layouts.main')
@section('title','Actual Cost ')
@push('custom-css')
<style>
    body{
        font-family: 'Numito';
    }

</style>
@endpush
@section('content')
@section('title2','Form Actual Cost Proyek')
@section('title1','Actual Cost')


 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Create Actual Cost Proyek</h3>
              </div>

              <!-- /.card-header -->

                 <div class="card-body">
                 
                    <form action="{{ route('simpan-detailaktual') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <input type="date" id="tgl" name="tgl" class="form-control"  style="width:200px;" placeholder="Tanggal">
                        </div>

                        <div class="form-group">
                        <select class="form-control select2" name="aktual_id" id="aktual_id" placeholder="Kode Anggaran">

                        <option disabled value>kode_proyek</option>
                            @foreach ($hin as $item)
                        <option value="{{$item->id}}"> {{$item->id}} </option>
                            @endforeach
                        </select>
                       </div>

                        <div class="form-group">
                            <input type="text" id="item" name="item" class="form-control" placeholder="WBS Item">
                        </div>

                        <div class="form-group">
                            <input type="text" id="sub_item" name="sub_item" class="form-control" placeholder="Sub-Item">
                        </div>

                        <div class="form-group">
                            <input type="text" id="cost_day" name="cost_day" class="form-control" placeholder="Cost (Hari)">
                        </div>

                        <div class="form-group">
                            <input type="text" id="quantity" name="quantity" class="form-control" placeholder="Qty">
                        </div>

                        <div class="form-group">
                            <input type="text" id="total" name="total" class="form-control" placeholder="total">
                        </div>
   
                    
                        <div class="form-group">
                            <input type="file" id="foto" name="foto"  placeholder="Dokumentasi">
                        </div>

                        
  
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-sm"> Simpan Data </button>
                            <a href="{{route('detailaktual')}}" class="btn btn-primary btn-sm ess" >Kembali</a>
                        </div>

                    </form>
               
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
@endsection