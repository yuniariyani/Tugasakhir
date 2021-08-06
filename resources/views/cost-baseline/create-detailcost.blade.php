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
@section('title2','Form Cost Baseline')
@section('title1','Bantuan Dana')


 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Create Anggaran Bantuan Dana Poktan</h3>
              </div>

              <!-- /.card-header -->

                 <div class="card-body">
                 
                    <form action="{{ route('simpan-detailcost') }}" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                        <label for="exampleFormControlSelect1">Kode Bantuan</label>
                        <select class="form-control select2" name="bantuan_dana_id" id="bantuan_dana_id" placeholder="Kode Anggaran">

                        <option disabled value>kode_bantuan</option>
                            @foreach ($hin as $item)
                        <option value="{{$item->id}}"> {{$item->kode_bantuan}} </option>
                            @endforeach
                        </select>
                       </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">WBS Item</label>
                            <select class="form-control" name="item" id="item" >
                                    <option value="Project Management">Project Management</option>
                                    <option value="Bahan/Bahan Bangunan">Bahan/Bahan Bangunan</option>
                                    <option value="Gedung/Bangunan">Gedung/Bangunan</option>
                                    <option value="Alat/Mesin/Hardware">Alat/Mesin/Hardware</option>         
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Sub-Item</label>
                            <input type="text" id="sub_item" name="sub_item" class="form-control" placeholder="Sub-Item">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Spesifikasi</label>
                            <input type="text" id="spesifikasi" name="spesifikasi" class="form-control" placeholder="Spesifikasi">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Biaya Barang</label>
                            <input type="text" id="cost_day" name="cost_day" class="form-control" placeholder="Cost (Hari)">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Quantity</label>
                            <input type="text" id="quantity" name="quantity" class="form-control" placeholder="Qty">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Total</label>
                            <input type="text" id="total" name="total" class="form-control" placeholder="total">
                        </div>

                      
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-sm"> Simpan Data </button>
                            <a href="{{ url()->previous()}}" class="btn btn-primary btn-sm ess" >Kembali</a>
                        </div>

                    </form>
               
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
@endsection