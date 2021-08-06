<div class="table-responsive">
    <table class="table" id="riwayatPenanganans-table">
        <thead>
        <tr>
            <th>Kelompok Tani</th>
        <th>Blok Lahan</th>
        <th>Gejala</th>
        <th>Jenis Penanganan</th>
        <th>Deskripsi</th>
            <th colspan="3">Aksi</th>
        </tr>
        </thead>
        <tbody>
        @foreach($riwayatPenanganans as $riwayatPenanganan)
            <tr>
                <td>{{ $riwayatPenanganan->poktan->nama_kelompok }}</td>
            <td>{{ $riwayatPenanganan->blok->nama_blok }}</td>
            <td>{{ $riwayatPenanganan->gejala }}</td>
            <td>{{ $riwayatPenanganan->jenis_penanganan }}</td>
            <td>{{ $riwayatPenanganan->deskripsi }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['riwayatPenanganans.destroy', $riwayatPenanganan->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('riwayatPenanganans.show', [$riwayatPenanganan->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('riwayatPenanganans.edit', [$riwayatPenanganan->id]) }}"
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
