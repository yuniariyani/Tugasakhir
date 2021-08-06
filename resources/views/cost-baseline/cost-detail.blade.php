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
@section('title2','Rincian Pengunaan Bantuan Dana') <!--Judul Halaman-->
@section('title1','Cost Baseline')



  </section> 
 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Rincian Anggaran Biaya (Biaya Target)</h3>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
                 <div class="timeline-header ">
                    <a href="{{route('bantuandana')}}" class="btn btn-primary btn-sm ess" >Kembali</a>
                    <a href="{{ route('create-detailcost') }}" class="btn btn-success btn-sm " >Tambah cost</a>
                   
                  </div>

                
                 <div class="card-body">
                 <div class="timeline-header">
                  
                </div>

                <table class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Kode</th>
                    <th>Wbs Item</th>
                    <th>WBS Sub-Item</th>
                    <th>Spesifikasi</th>
                    <th>Cost (Hari)</th>
                    <th>Qty</th>
                    <th>Total</th>
                    <th>Aksi</th>
                  </tr>

                  </thead>
                  <tbody>
                   @php $total1 = 0; @endphp
                   @foreach ($dtcost as $item)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->rbantuandana->kode_bantuan}}</td>
                    <td>{{ $item->item }}</td>
                    <td>{{ $item->sub_item }}</td>
                    <td>{{ $item->spesifikasi }}</td>
                    <td>@currency ($item->cost_day)</td>
                    <td>{{ $item->quantity}}</td>
                    <td>@currency ($item->total)</td>
                 
                    
                    <td>
                      <a href="{{ url('edit-detailcost',$item->id) }}"><i class="fas fa-edit"></i></a> 
                      | <a href="{{ url('delete-detailcost',$item->id) }}"><i class="fas fa-trash-alt" style="color:red"></i></a>

                    </td>
                    <div style="display: none">{{$total1 += ($item->total)}}</div>
                  </tr>

                   @endforeach

                  </tbody>
                  <tfoot>
                   
                        <td colspan="7" style="text-align:center">Total</td>
                        <td colspan="2">@currency ($total1)</td>
                        
                   </tr>
                   
                 </tfoot>
                
                </table>
              </div>
              
              <!-- /.card-body -->
            </div>
            </div>
            </div>
            </div>
            </div>
      
  </section>
           

<!-----------------------------------------------TABEL-AKTUAL-COST ------------------------------------------------------------->
 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Rincian Pengunaan Bantuan Dana (Biaya Aktual)</h3>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
                 <div class="timeline-header ">
                   
                    <a href="{{ route('create-detailakt') }}" class="btn btn-success btn-sm " >Tambah cost</a>
                   
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
                    <th>Spesifikasi</th>
                    <th>Cost (Hari)</th>
                    <th>Qty</th>
                    <th>Total</th>
                    <th>Aksi</th>
                  </tr>

                  </thead>
                  <tbody>
                   @php $total = 0; @endphp
                   @foreach ($dtakt as $pp)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $pp->rbantuandana->kode_bantuan}}</td>
                    <td>{{  date('d/m/Y', strtotime ($pp->tgl)) }}</td>
                    <td>{{ $pp->item }}</td>
                    <td>{{ $pp->sub_item }}</td>
                    <td>{{ $pp->spesifikasi }}</td>
                    <td>{{ $pp->cost_day}}</td>
                    <td>{{ $pp->quantity}}</td>
                    <td>@currency ($pp->total)</td>
                 
                    
                    <td width="120">
                      
                      <a href="{{ asset('img/'.$pp->foto) }}" target="_blank" rel="noopener noreferrer"><i class="far fa-file-image"> </i></a> |
                      <a href="{{ url('edit-detailakt',$pp->id) }}"><i class="fas fa-edit"></i></a> |
                      <a href="{{ url('delete-detailakt',$pp->id) }}"><i class="fas fa-trash-alt" style="color:red"></i></a>
                      
                    </td>
                    <div style="display: none">{{$total += ($pp->total)}}</div>
                  </tr>

                   @endforeach
                 
                  </tbody>
                  <tfoot>
                   
                        <td colspan="8" style="text-align:center">Total</td>
                        <td colspan="2">@currency ($total)</td>
                        
                   </tr>
                       <?php
                            $jumlah=$total1 - $total;
                           
                       ?>

                    <td colspan="8" style="text-align:center">Sisa Bantuan Dana</td>
                        <td colspan="2">@currency ($jumlah)</td>
                        
                   </tr>
                   
                 </tfoot>
                
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
  </section>
            
           
@endsection