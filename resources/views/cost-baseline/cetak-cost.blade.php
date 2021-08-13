<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style type="text/css">
		        table tr td,
	        	table tr th{
		          	font-size: 13pt;
		       }
        table.static {
            position: relative;
            border: 1px solid #543535;
        }
    </style>
    <title>BAST</title>
    </head>
    <body>
    <br>
	<center>
		<h4 align="center" ><b>Laporan Bantuan Dana Kelompok Tani</b></h4>
	</center>
  <br>
         @foreach ($dtbantuan as $item)
	<p style=" margin: 0px 0px 5px 14px !important;"><b>Kelompok Tani      :</b>  {{ $item->relasigroup->nama_kelompok }} </p>
  <p style=" margin: 0px 14px 10px 14px !important;"><b>Nama Bantuan Dana  :</b>  {{ $item->nama_bantuan}} </p>
        @endforeach
        
        <br>
         <p style=" margin: 0px 14px 10px 14px !important;">1. Anggaran Biaya Bantuan Dana</p>
	      <table class='table table-bordered'  style="width:98%;" align="center" >
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Wbs Item</th>
                    <th>WBS Sub-Item</th>
                    <th>Spesifikasi</th>
                    <th>Cost (Hari)</th>
                    <th>Qty</th>
                    <th>Total</th>
                   
                  </tr>

                  </thead>
                  <tbody>
                   @php $total1 = 0; @endphp
                   @foreach ($dtcetakcost as $item)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->rbantuandana->kode_bantuan}}</td>
                    <td>{{ $item->item }}</td>
                    <td>{{ $item->sub_item }}</td>
                    <td>{{ $item->spesifikasi }}</td>
                    <td>{{ $item->cost_day}}</td>
                    <td>{{ $item->quantity}}</td>
                    <td>@currency ($item->total)</td>
                 
                    
                    
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
        

        <div class="form-group">
                  <p style=" margin: 0px 14px 10px 14px !important;">2. Pengeluaran Penggunaan Bantuan Dana</p>
                  <table class='table table-bordered'  style="width:98%;" align="center" >
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Date</th>
                    <th>Wbs Item</th>
                    <th>WBS Sub-Item</th>
                    <th>Spesifikasi</th>
                    <th>Cost (Hari)</th>
                    <th>Qty</th>
                    <th>Total</th>
                
                  </tr>

                  </thead>
                  <tbody>
                   @php $total = 0; @endphp
                   @foreach ($dtcetakakt as $pp)
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
                 
                    
                
                    <div style="display: none">{{$total += ($pp->total)}}</div>
                  </tr>

                   @endforeach
                 
                  </tbody>
                  <tfoot>
                   
                        <td colspan="8" style="text-align:center">Total</td>
                        <td colspan="2">@currency ($total)</td>
                        
                   </tr>
                 </tfoot>
                
                </table>
         </div>

           <div class="form-group">
                  <table class='table table-bordered'  style="width:98%;" align="center" >
                  <thead>
                  <tr>
                    
                    <th width="300px"><center>Sisa Bantuan Dana</center></th>
             
                  </tr>

                  </thead>
                  <tbody>
                   
                  <tr>
                   <?php
                            $jumlah=$total1 - $total;     
                   ?>
                        <td><center>@currency ($jumlah)<center></td>
                  </tr>

                 
                 
                  </tbody>
                
                
                </table>
         </div>
          
          
 <script type="text/javascript">
      window.print();
    </script> 
    </body>
    </html>
    