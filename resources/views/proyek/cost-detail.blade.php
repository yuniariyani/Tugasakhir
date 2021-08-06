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
@section('title2','Detail Cost Baseline Proyek') <!--Judul Halaman-->
@section('title1','Cost Baseline')


 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">

              <!-- /.card-header -->
              <div class="card-body">
                 <div class="timeline-header ">
                    <a href="{{route('costbaseline')}}" class="btn btn-primary btn-sm ess" >Kembali</a>
                    <a href="{{ route('create-detailcost') }}" class="btn btn-success btn-sm " >Tambah cost</a>
                   
                  </div>

                
                 <div class="card-body">
                 <div class="timeline-header">
                  
                </div>

                <table class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Kode Cost</th>
                    <th>Wbs Item</th>
                    <th>WBS Sub-Item</th>
                    <th>Cost (Jam)</th>
                    <th>Cost (Hari)</th>
                    <th>Qty</th>
                    <th>Total</th>
                    <th>Aksi</th>
                  </tr>

                  
                  </thead>
                  <tbody>
                   @foreach ($dtcost as $item)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->costbaseline->kode_anggaran}}</td>
                    <td>{{ $item->item }}</td>
                    <td>{{ $item->sub_item }}</td>
                    <td>{{ $item->cost_hour }}</td>
                    <td>{{ $item->cost_day}}</td>
                    <td>{{ $item->quantity}}</td>
                    <td>@currency ($item->total)</td>
                 
                    
                    <td>
                      <a href="{{ url('edit-detailcost',$item->id) }}"><i class="fas fa-edit"></i></a> 
                      | <a href="{{ url('delete-detailcost',$item->id) }}"><i class="fas fa-trash-alt" style="color:red"></i></a>

                    </td>
                  </tr>

                  
                 @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
           
@endsection