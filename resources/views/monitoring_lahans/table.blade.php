<div class="table-responsive">
    <table class="table" id="monitoringLahans-table">
        <thead>
        <tr>
            <th>Poktan</th>
        <th>Komoditas</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($monitoringLahans as $monitoringLahan)
            <tr>
                <td>{{ $monitoringLahan->poktan }}</td>
            <td>{{ $monitoringLahan->komoditas }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['monitoringLahans.destroy', $monitoringLahan->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('monitoringLahans.show', [$monitoringLahan->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('monitoringLahans.edit', [$monitoringLahan->id]) }}"
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
