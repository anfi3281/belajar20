<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Data Pegawai</title>
    @vite('resources/sass/app.scss')
</head>

<body class="bg-primary text-light">
    <div class="container">
        <h1 class="text-center mt-5 mb-3">Input Data Pegawai</h1>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <a href="/nampilin"><button class="btn btn-danger ml-5 mb-3">Kembali</button></a>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <form action="/nampilin/inputprocess" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group mb-1">
                        <label for="Nama">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukkan nama">
                    </div>
                    <div class="form-group mb-1">
                        <label for="Nama">Alamat</label>
                        <input type="text" class="form-control" name="alamat" placeholder="Masukkan alamat">
                    </div>
                    <div class="text-center">
                        <input type="submit" class="btn btn-success mt-3" value="Enter">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
