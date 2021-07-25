@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Monitoring Masalah Lahan</h1>
                    <br>
                    <h4 class=" h5 text-gray-800">Kelompok Tani</h4>
                    <select name="masalah" id="masalah" class="form-control"
                    onchange="window.location.href=this.options[this.selectedIndex].value;">
                    <option value="{{ url('masalahs/') }}">Seluruh Kelompok</option>
                @foreach($nama_kelompok as $k)
                    <option value="{{ url('masalahs/masalah', $k->id) }}"
                        {{ $selected == $k->id ? 'selected' : null }}> {{ $k->nama_kelompok }}</option>
                @endforeach   
            </select> 
                
            </div>
        </div>
    </section>

    <div class="content px-3">
    <div>
        <a class="btn btn-success float-left" href="{{ route('masalahs.create') }}">
                        +Tambahkan Laporan
        </a>
    </div>



        <div class="clearfix"></div>
        <div >
        <span style="visibility: hidden">enter</span>
    </div>

        <div class="card">
            <div class="card-body p-0">
                @include('masalahs.table')

                <div class="card-footer clearfix">
                    <div class="float-right">
                        
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

