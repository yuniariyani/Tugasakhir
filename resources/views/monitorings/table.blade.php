<div class="table-responsive">
    <table class="table" id="monitorings-table">
        <thead>
        <tr>
            <th>Tanggal</th>
        <th>Poktan</th>
        <th>Komoditas</th>
        <th>Kadar Air</th>
        <th>Suhu Tanah</th>
        <th>Ph</th>
        <th>Subur</th>
        <th>Kelembaban</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($monitorings as $monitoring)
            <tr>
                <td>{{ $monitoring->tanggal }}</td>
            <td>{{ $monitoring->kelompok->nama_kelompok }}</td>
            <td>{{ $monitoring->komoditas }}</td>
            <td>{{ $monitoring->kadar_air }}</td>
            <td>{{ $monitoring->suhu_tanah }}</td>
            <td>{{ $monitoring->ph }}</td>
            <td>{{ $monitoring->subur }}</td>
            <td>{{ $monitoring->kelembaban }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['monitorings.destroy', $monitoring->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('monitorings.show', [$monitoring->id]) }}"
                        class="btn btn-info">
                            Detail 
                        </a>
                        <a href="{{ route('monitorings.edit', [$monitoring->id]) }}"
                        class="btn btn-warning">
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
