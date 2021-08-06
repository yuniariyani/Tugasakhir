<div class="table-responsive">
    <table class="table" id="pendapatans-table">
        <thead>
        <tr>
            <th>Kelompok Tani</th>
        <th>Blok Lahan</th>
        <th>Komoditas</th>
        <th>Jumlah Berhasil</th>
        <th>Satuan</th>
        <th>Tanggal Panen</th>
        <th>Pendapatan</th>
            <th colspan="3">Aksi</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pendapatans as $pendapatan)
            <tr>
                <td>{{ $pendapatan->poktan->nama_kelompok }}</td>
            <td>{{ $pendapatan->blok->nama_blok }}</td>
            <td>{{ $pendapatan->blok->komoditas }}</td>
            <td>{{ $pendapatan->jumlah_berhasil }}</td>
            <td>{{ $pendapatan->satuan }}</td>
            <td>{{ $pendapatan->tanggal_panen }}</td>
            <td>Rp. {{ $pendapatan->pendapatan }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['pendapatans.destroy', $pendapatan->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('pendapatans.show', [$pendapatan->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('pendapatans.edit', [$pendapatan->id]) }}"
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
