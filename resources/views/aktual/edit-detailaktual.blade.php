@extends('layouts.main')
@section('title','Actual Cost')
@push('custom-css')
<style>
    body{
        font-family: 'Numito';
    }

</style>
@endpush
@section('content')
@section('title2','Form Edit Detail Actual Cost Proyek')
@section('title1','Actual cost')

 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Edit Detail Actual Cost Proyek</h3>
              </div>

              <!-- /.card-header -->

                 <div class="card-body">
                 
                    <form action="{{ route('update-detailakt', $dt->id) }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group">
                        <label for="exampleFormControlSelect1">Kode Bantuan</label>
                        <select class="form-control select2" name="bantuan_dana_id" id="bantuan_dana_id" placeholder="Kode Bantuan">

                        <option disabled value>Kode Bantuan</option>
                            @foreach ($hin as $item)
                        <option value="{{$item->id}}"> {{$item->kode_bantuan}} </option>
                            @endforeach
                        </select>
                       </div>

                         <div class="form-group">
                            <label for="exampleFormControlSelect1">WBS Item</label>
                            <input type="text" id="item" name="item" class="form-control" placeholder="WBS Item" value="{{$dt->item}}">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Sub-Item</label>
                            <input type="text" id="sub_item" name="sub_item" class="form-control" placeholder="Sub-Item" value="{{$dt->sub_item}}">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Spesifikasi</label>
                            <input type="text" id="spesifikasi" name="spesifikasi" class="form-control" placeholder="Cost (Hari)" value="{{$dt->spesifikasi}}">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Biaya Barang</label>
                            <input type="text" id="cost_day" name="cost_day" class="form-control" placeholder="Cost (Hari)" value="{{$dt->cost_day}}">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Quantity</label>
                            <input type="text" id="quantity" name="quantity" class="form-control" placeholder="Qty" value="{{$dt->quantity}}">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Total</label>
                            <input type="text" id="total" name="total" class="form-control" placeholder="total" value="{{$dt->total}}">
                        </div>
                        
                         <div class="form-group">
                            <label for="exampleFormControlSelect1">Foto</label>
                            <input type="file" class="form-control-file" id="foto" name="foto">
                            <br>
                            <img src="{{asset('img/'. $dt->foto) }}" height="10%" width="50%" alt="" srcset="">
                            <input type="hidden" class="form-control-file" id="hidden_image" name="hidden_image" value="{{$dt->foto}}">
                        </div>
                        
                        
                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-sm"> Ubah Data </button>
                           <a href="{{route('detailcost')}}" class="btn btn-primary btn-sm ess" >Kembali</a>
                        </div>

                    </form>
               
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
@endsection