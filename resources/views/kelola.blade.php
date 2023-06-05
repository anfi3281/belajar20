<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Siswa</title>
    @vite('resources/sass/app.scss')
</head>

<body>
    <h1 class="text-center mt-5 mb-4">Siswa</h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="row justify-content-center mb-2">
                    <div class="col-lg-9">
                        <form action="/siswa/inputProcess" method="POST">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-danger" name="kembali" value="Kembali"></input>
                        </form>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-9 mt-2">
                        @if (isset($siswa))
                            <form action="/siswa/kelola/{{ $siswa->id }}" method="POST">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="input" name="nama" class="form-control" placeholder="Nama"
                                        value="{{ $siswa->nama }}">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="input" name="alamat" class="form-control" placeholder="Alamat"
                                        value="{{ $siswa->alamat }}">
                                </div>
                                <input type="submit" class="btn btn-warning mt-3" name="edit"
                                    value="Edit"></input>
                            @else
                                <form action="/siswa/kelola/1" method="POST">
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="input" name="nama" class="form-control" placeholder="Nama">
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <input type="input" name="alamat" class="form-control" placeholder="Alamat">
                                    </div>
                                    <input type="submit" class="btn btn-primary mt-3" name="input"
                                        value="Submit"></input>
                                    {{ method_field('PUT') }}
                        @endif
                        {{ csrf_field() }}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
