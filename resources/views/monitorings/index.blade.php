@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Monitoring Lahan</h1>
                    <br>
                    <h4 class=" h5 text-gray-800">Kelompok Tani</h4>
                    <select name="kelompok" id="kelompok" class="form-control"
                    onchange="window.location.href=this.options[this.selectedIndex].value;">
                    <option value="{{ url('monitorings/') }}">Seluruh Kelompok</option>
                @foreach($kelompok as $k)
                    <option value="{{ url('monitorings/kelompok', $k->id) }}"
                        {{ $selected == $k->id ? 'selected' : null }}> {{ $k->nama_kelompok }}</option>
                @endforeach   
            </select> 
 
                <br>

    
                </div>
            </div>
        </div>
    <div class="content px-3">
    <div>
        <a class="btn btn-success float-left" href="{{ route('monitorings.create') }}">
                        +Tambahkan Laporan
        </a>
    </div>
    <br>

      

        <div class="clearfix"></div>
        <div >
        <span style="visibility: hidden">enter</span>
    </div>
        <div class="card">
            <div class="card-body p-0">
                @include('monitorings.table')

                <div class="card-footer clearfix">
                    <div class="float-right">
                        
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

