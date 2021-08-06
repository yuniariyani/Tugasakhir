<div class="table-responsive">
    <table class="table" id="masalahs-table">
        <thead>
        <tr>
        <th>Nama Kelompok</th>
        <th>Komoditas</th>
        <th>Blok</th>
        <th>Tanggal</th>
        <th>Masalah Lahan</th>
        <th>Status</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($masalahs as $masalah)
            <tr>
            <td>{{ $masalah->masalah->nama_kelompok }}</td>
            <td>{{ $masalah->bloklahan->komoditas }}</td>
            <td>{{ $masalah->bloklahan->nama_blok }}</td>
            <td>{{ $masalah->tanggal }}</td>
            <td>{{ $masalah->masalah_lahan }}</td>
            <td>{{ $masalah->status }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['masalahs.destroy', $masalah->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('masalahs.show', [$masalah->id]) }}"
                           class='btn btn-info'>
                            Detail
                        </a>
                        <a href="{{ route('masalahs.edit', [$masalah->id]) }}"
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
