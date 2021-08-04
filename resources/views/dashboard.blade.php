@extends('layouts.app')
@push('custom-css')
@section('content')
@section('title1','Dashboard')
@section('title2','Dashboard')
<section class="content">
<br>
<div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div>
                <h3>&emsp;Hallo, Admin</h3>
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
                <h3>150</h3>
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
                <h3>53</h3>

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
                <h3>44<sup style="font-size: 20px">K</sup></h3>

                <p>Dana Proyek</p>
              </div>
              <div class="icon">
              <i class="material-icons">attach_money</i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>65<sup style="font-size: 20px">%</sup></h3>

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
        
   <!-- tabel-->
   <div class="container-fluid">
   <h4 style="color: red"> Masalah Penting </h4>
        <div class="row">
          <div class="col-12">
            <div class="card">
    <div class="table-responsive">
    <table class="table">

        <thead>
        <tr>
        <th>Tanggal</th>
        <th>Kelompok Tani</th>
        <th>Masalah Lahan</th>
        <th>Status</th>
        </tr>
        </thead>
        <tbody>
        @foreach($masalahs as $masalah)
            <tr>
            <td>{{ $masalah->tanggal }}</td>
            <td>{{ $masalah->masalah->nama_kelompok }}</td>
            <td>{{ $masalah->masalah_lahan }}</td>
            <td style="color: red">{{ $masalah->status}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
    </div>

   



@endsection