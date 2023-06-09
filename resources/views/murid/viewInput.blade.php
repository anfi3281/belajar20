<div class="card-body">
    <a href="/murid">Data Murid</a>
    |
    <a href="/murid/trash">Tong Sampah</a>
    |
    <a href="/murid/input" class="btn btn-primary">Input Murid</a>
    <br>
    <br>
    <form action="/murid/inputprocess" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="input" class="form-control" name="nama" placeholder="Nama">
        </div>
        <div class="form-group mt-2">
            <label for="alamat">Alamat</label>
            <input type="input" class="form-control" name="alamat" placeholder="Alamat">
        </div>
        <input type="submit" name="input" value="Input" class="btn btn-success mt-3">
    </form>
</div>
