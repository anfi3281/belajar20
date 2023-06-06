<div class="card-body">
    <a href="/murid" class="btn btn-primary">Data Murid</a>
    |
    <a href="/murid/trash">Tong Sampah</a>
    |
    <a href="/murid/input">Input Murid</a>
    <br>
    <br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th width="1%">No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th width="13%" class="text-center">Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($anak as $a)
                <tr>
                    <td>{{ $a->id }}</td>
                    <td>{{ $a->nama }}</td>
                    <td>{{ $a->alamat }}</td>
                    <td>
                        <a href="/murid/edit/{{ $a->id }}" class="btn btn-warning">Edit</a>
                        <a href="/murid/hapus/{{ $a->id }}" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$anak->links()}}
</div>
