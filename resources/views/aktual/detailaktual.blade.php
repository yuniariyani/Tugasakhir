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
@section('title2','Detail Actual Cost') <!--Judul Halaman-->
@section('title1','actual cost')


 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">

              <!-- /.card-header -->
              <div class="card-body">
                 <div class="timeline-header ">
                    <a href="{{route('aktualcost')}}" class="btn btn-primary btn-sm ess" >Kembali</a>
                    <a href="{{ route('create-detailaktual') }}" class="btn btn-success btn-sm " >Tambah cost</a>
                   
                  </div>

                
                 <div class="card-body">
                 <div class="timeline-header">
                  
                </div>

                <table class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Kode</th>
                    <th>Date</th>
                    <th>Wbs Item</th>
                    <th>WBS Sub-Item</th>
                    <th>Cost (Hari)</th>
                    <th>Qty</th>
                    <th>Total</th>
                    <th>Bukti</th>
                    <th>Aksi</th>
                  </tr>

                  
                  </thead>
                  <tbody>
                   @foreach ($dtaktual as $item)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->aktual->id}}</td>
                    <td>{{  date('d/m/Y', strtotime ($item->tgl)) }}</td>
                    <td>{{ $item->item }}</td>
                    <td>{{ $item->sub_item }}</td>
                    <td>{{ $item->cost_day}}</td>
                    <td>{{ $item->quantity}}</td>
                    <td>@currency ($item->total)</td>
                    <td>
                       <a href="{{ asset('img/'.$item->foto) }}" target="_blank" rel="noopener noreferrer" class="far fa-file-image"></td>
                    </td>
                 
                    
                    <td>
                      <a href="{{ url('edit-detailaktual',$item->id) }}"><i class="fas fa-edit"></i></a> 
                      | <a href="{{ url('delete-detailaktual',$item->id) }}"><i class="fas fa-trash-alt" style="color:red"></i></a>

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