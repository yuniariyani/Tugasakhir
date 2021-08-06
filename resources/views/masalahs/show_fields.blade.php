Kelompok Tani: {{ $masalah->masalah->nama_kelompok }}
<br>
Komoditas    : {{ $masalah->bloklahan->komoditas }}
<br>
Blok Lahan   : {{ $masalah->bloklahan->nama_blok }}
<br>
<br>
<br>
<div class="table-responsive">
    <table class="table" id="masalahs-table">
        <thead>
        <tr>
        <th>Masalah Lahan</th>
        <th>Solusi Lahan</th>
        <th>Tindak Lanjut</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        
            <tr>
            <td>{{ $masalah->masalah_lahan }}</td>
            <td>{{ $masalah->solusi }}</td>
            <td>{{ $masalah->tindak_lanjut }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['masalahs.destroy', $masalah->id], 'method' => 'delete']) !!}
                    
                        <a href="{{ route('masalahs.solusi', [$masalah->id]) }}"
                           class='btn btn-warning'>
                            Edit
                        </a>
                        
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
       
        </tbody>
    </table>
</div>


