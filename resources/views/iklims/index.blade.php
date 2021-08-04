@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Monitoring Cuaca</h1>
                    <br>
                    <h4 class=" h5 text-gray-800">Kelompok Tani</h4>
                    <select name="poktan" id="poktan" class="form-control"
                    onchange="window.location.href=this.options[this.selectedIndex].value;">
                    <option value="{{ url('iklims/') }}">Seluruh Kelompok</option>
                @foreach($poktan as $k)
                    <option value="{{ url('iklims/poktan', $k->id) }}"
                        {{ $selected == $k->id ? 'selected' : null }}> {{ $k->nama_kelompok }}</option>
                @endforeach   
            </select> 

            </div>
        </div>
    </section>
    <div class="content px-3">
    <div>
    <?php

$city_name = 'Mamuju';
$api_key = 'e4caeef136be476283580911f8a1a90e';
$cnt = '7';

$api_url = 'http://api.openweathermap.org/data/2.5/weather?q='.$city_name.'&appid='.$api_key;

$weather_data = json_decode (file_get_contents ($api_url),true);

$temperature = $weather_data['main']['temp'];
$temperatur_in_celicius = $temperature - 273.15;
$temperature_min = $weather_data['main']['temp_min'];
$speed = $weather_data['wind']['speed'];
$pressure = $weather_data['main']['pressure'];
$humidity = $weather_data['main']['humidity'];
$cloud = $weather_data['weather'][0]['main'];
?>

<div class="container">
    <div class="row mt-4">
    <div class="col-md-12">
            <div role="alert">  
               <h5> <strong>Cuaca Di Mamuju: <?= $cloud; ?></strong> </h5>
            </div>
        </div>
        <br>
        <br>
        <div class="col-md-3">
            <div class="card badge-success p-3 mb-5 shadow rounded">
                <div class="card-body">
                    <h4 class="card-title text-center"> &emsp;&emsp;&emsp;Suhu Udara</h4>
                    <p class="card-text text-center"> <?= $temperatur_in_celicius; ?> ºC</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card badge-success p-3 mb-5 shadow rounded">
                <div class="card-body">
                    <h4 class="card-title text-white text-center"> &emsp;&emsp;Kecepatan Angin </h4>
                    <p class="card-text text-white text-center"> <?= $speed?> km/h</p>
                </div>
            </div>    
        </div>

        <div class="col-md-3">
            <div class="card badge-success p-3 mb-5 shadow rounded">
                <div class="card-body">
                    <h4 class="card-title text-white text-center"> &emsp;&emsp;Tekanan Udara </h4>
                    <p class="card-text text-white text-center"> <?= $pressure ?> hPa</p>
                </div>
            </div>    
        </div>

        <div class="col-md-3">
            <div class="card badge-success p-3 mb-5 shadow rounded">
                <div class="card-body">
                    <h4 class="card-title text-white text-center"> &emsp;&emsp;Kelembaban Udara </h4>
                    <p class="card-text text-white text-center"> <?= $humidity ?> %</p>
                </div>
            </div>    
        </div>
</div>
</div>
</div>




    <div class="content px-3">
    <div>
        <a class="btn btn-success float-left" href="{{ route('iklims.create') }}">
                        +Tambahkan Laporan
        </a>
    </div>
    
       

        <div class="clearfix"></div>
        <div >
        <span style="visibility: hidden">enter</span>
    </div>
        <div class="card">
            <div class="card-body p-0">
                @include('iklims.table')

                <div class="card-footer clearfix">
                    <div class="float-right">
                        
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

