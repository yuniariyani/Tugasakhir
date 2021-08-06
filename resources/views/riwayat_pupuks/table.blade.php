<div class="table-responsive">
    <table class="table" id="riwayatPupuks-table">
        <thead>
        <tr>
            <th>Kelompok Tani</th>
        <th>Blok Lahan</th>
        <th>Komoditas</th>
        <th>Tanggal Pupuk</th>
        <th>Jenis Pupuk</th>
        <th>Dosis Pupuk</th>
            <th colspan="3">Aksi</th>
        </tr>
        </thead>
        <tbody>
        @foreach($riwayatPupuks as $riwayatPupuk)
            <tr>
                <td>{{ $riwayatPupuk->poktan->nama_kelompok }}</td>
            <td>{{ $riwayatPupuk->blok->nama_blok }}</td>
            <td>{{ $riwayatPupuk->blok->komoditas }}</td>
            <td>{{ $riwayatPupuk->tanggal_pupuk }}</td>
            <td>{{ $riwayatPupuk->jenis_pupuk }}</td>
            <td>{{ $riwayatPupuk->dosis_pupuk }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['riwayatPupuks.destroy', $riwayatPupuk->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('riwayatPupuks.show', [$riwayatPupuk->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('riwayatPupuks.edit', [$riwayatPupuk->id]) }}"
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
