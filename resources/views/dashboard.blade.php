@extends('layouts.app')
@section('title','Agrikita')
@push('custom-css')
@section('content')
@section('title1','Dashboard')
@section('title2','Dashboard')
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          <?php echo $chartData ?>
          
        ]);

        var options = {
          title: 'Bantuan Dana Kelompok Tani'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
       
   
 


<section class="content">
<br>
<div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div>
               
                </div>
            </div>
        </div>


<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$total_kelompok}}</h3>
                <p>Kelompok Tani</p>
              </div>
              <div class="icon">
              <i class="material-icons">groups</i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$penyuluh}}</h3>
                <p>Penyuluh</p>
              </div>
              <div class="icon">
              <i class="material-icons">people</i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>{{$anggota_kelompok}}</h3>
                <p>Anggota Kelompok Tani</p>
              </div>
              <div class="icon">
              <i class="material-icons">assignment_ind</i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>0</h3>
                <p>Hasil Panen</p>
              </div>
              <div class="icon">
              <i class="material-icons">grass</i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        </div>
        </div>
      
        <br>
          
   
        
  <!-- tabel-->
  <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Masalah Lahan Kelompok Tani</h3>
                 </div>
                 <div class="card-body">
                 <div class="timeline-header">
                 </div>

                 <div class="table-responsive">
                 <table class="table">

                 <thead>
                  <tr>
                  <th>Date</th>
                  <th>Poktan</th>
                  <th>Masalah Lahan</th>
                  <th>Status</th>
                  </tr>
                  </thead>
                  <tbody>
                   @foreach($masalahs as $masalah)
                   <tr>
                    <td>{{ date('d/m/Y', strtotime ($masalah->tanggal)) }}</td>
                    <td>{{ $masalah->masalah->nama_kelompok }}</td>
                    <td>{{ $masalah->masalah_lahan }}</td>
                    <td style="color: red">{{ $masalah->status}}</td>
                   </tr>
                   @endforeach
                  </tbody>
                  </table>

    </div>
    </div>
    </div>
</div>
</div>


     <div id="piechart" style="width: 1420px; height: 450px;"></div>
     
  



@endsection