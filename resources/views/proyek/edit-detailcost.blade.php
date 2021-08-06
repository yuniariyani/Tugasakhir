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
@section('title2','Form Cost Baseline')
@section('title1','Cost Baseline')


 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Edit Detail cost</h3>
              </div>

              <!-- /.card-header -->

                 <div class="card-body">
                 
                    <form action="{{ route('update-detailcost', $peg->id) }}" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                        <select class="form-control select2" name="costbaseline_id" id="costbaseline_id" placeholder="Kode Anggaran">

                        <option disabled value>kode_Anggaran</option>
                            @foreach ($hin as $item)
                        <option value="{{$item->id}}"> {{$item->kode_anggaran}} </option>
                            @endforeach
                        </select>
                       </div>

                        <div class="form-group">
                            <input type="text" id="item" name="item" class="form-control" placeholder="WBS Item" value="{{$peg -> item}}">
                        </div>
                        <div class="form-group">
                            <input type="text" id="sub_item" name="sub_item" class="form-control" placeholder="Sub-Item" value="{{$peg -> sub_item}}">
                        </div>
                        <div class="form-group">
                            <input type="text" id="cost_hour" name="cost_hour" class="form-control" placeholder="Cost (Jam)" value="{{$peg -> cost_hour}}">
                        </div>
                        <div class="form-group">
                            <input type="text" id="cost_day" name="cost_day" class="form-control" placeholder="Cost (Hari)" value="{{$peg -> cost_day}}">
                        </div>
                        <div class="form-group">
                            <input type="text" id="quantity" name="quantity" class="form-control" placeholder="Qty" value="{{$peg -> quantity}}">
                        </div>
                        <div class="form-group">
                            <input type="text" id="total" name="total" class="form-control" placeholder="total" value="{{$peg -> total}}">
                        </div>
   
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-sm"> Simpan Data </button>
                            <a href="{{route('detailcost')}}" class="btn btn-primary btn-sm ess" >Kembali</a>
                        </div>

                    </form>
               
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
@endsection