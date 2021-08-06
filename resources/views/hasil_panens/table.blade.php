<div class="table-responsive">
    <table class="table" id="hasilPanens-table">
        <thead>
        <tr>
            <th>Kelompok Tani</th>
        <th>Blok Lahan</th>
        <th>Komoditas</th>
        <th>Jumlah Berhasil</th>
        <th>Jumlah Gagal</th>
        <th>Satuan</th>
        <th>Tanggal Panen</th>
            <th colspan="3">Aksi</th>
        </tr>
        </thead>
        <tbody>
        @foreach($hasilPanens as $hasilPanen)
            <tr>
                <td>{{ $hasilPanen->poktan->nama_kelompok }}</td>
            <td>{{ $hasilPanen->blok->nama_blok }}</td>
            <td>{{ $hasilPanen->blok->komoditas }}</td>
            <td>{{ $hasilPanen->jumlah_berhasil }}</td>
            <td>{{ $hasilPanen->jumlah_gagal }}</td>
            <td>{{ $hasilPanen->satuan }}</td>
            <td>{{ $hasilPanen->tanggal_panen }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['hasilPanens.destroy', $hasilPanen->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('hasilPanens.show', [$hasilPanen->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('hasilPanens.edit', [$hasilPanen->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
