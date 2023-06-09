<div class="card-body">
    <a href="/murid">Data Murid</a>
    |
    <a href="/murid/trash">Tong Sampah</a>
    |
    <a href="/murid/input">Input Murid</a>
    |
    <a class="disabled btn btn-warning">Edit Murid</a>
    <br>
    <br>
    @foreach ($anak as $murid)
        <form action="/murid/editprocess/{{ $murid->id }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="input" class="form-control" name="nama" placeholder="Nama" value="{{ $murid->nama }}">
            </div>
            <div class="form-group mt-2">
                <label for="alamat">Alamat</label>
                <input type="input" class="form-control" name="alamat" placeholder="Alamat"
                    value="{{ $murid->alamat }}">
            </div>
    @endforeach
    <input type="submit" name="input" value="Edit" class="btn btn-success mt-3">
    </form>
</div>
