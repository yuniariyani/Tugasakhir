<div class="table-responsive">
    <table class="table" id="iklims-table">
        <thead>
        <tr>
            <th>Tanggal</th>
        <th>Kelompok Tani</th>
        <th>Komoditas</th>
        <th>Cuaca</th>
        <th>Suhu</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($iklims as $iklim)
            <tr>
                <td>{{ $iklim->tanggal }}</td>
            <td>{{ $iklim->poktan->nama_kelompok}}</td>
            <td>{{ $iklim->komoditas }}</td>
            <td>{{ $iklim->cuaca }}</td>
            <td>{{ $iklim->suhu }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['iklims.destroy', $iklim->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('iklims.show', [$iklim->id]) }}"
                           class='btn btn-info'>
                            Detail
                        </a>
                        <a href="{{ route('iklims.edit', [$iklim->id]) }}"
                           class='btn btn-warning'>
                            Edit
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
