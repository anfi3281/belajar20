<div class="card-body">
    <a href="/murid">Data Murid</a>
    |
    <a href="/murid/trash" class="btn btn-primary disabled">Tong Sampah</a>
    |
    <a href="/murid/input">Input Murid</a>
    |
    <a href="/murid/restoreAll" class="btn btn-warning">Restore Semuanya</a>
    |
    <a href="/murid/deleteAll" class="btn btn-danger">Hapus Semuanya</a>
    <br>
    <br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th width="1%">No</th>
                <th>Nama</th>
                <th>Orang Tua</th>
                <th>Alamat</th>
                <th width="23%" class="text-center">Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($anak as $a)
                <tr>
                    <td>{{ $a->id }}</td>
                    <td>{{ $a->nama }}</td>
                    @foreach ($orangtua as $ortu)
                        @if ($ortu->id == $a->id)
                            <td>{{ $ortu->orangtua }}</td>
                        @endif
                    @endforeach
                    <td>{{ $a->alamat }}</td>
                    <td>
                        <a href="/murid/restore/{{ $a->id }}" class="btn btn-warning">Restore</a>
                        <a href="/murid/deletepermanent/{{ $a->id }}" class="btn btn-danger">Hapus Selamanya</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $anak->links() }}
</div>
