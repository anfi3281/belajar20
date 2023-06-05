<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Siswa</title>
    @vite('resources/sass/app.scss')
</head>

<body>
    <h1 class="text-center mt-5 mb-4">Siswa</h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="row justify-content-center mb-2">
                    <div class="col-lg-9">
                        <a href="/siswa/input" class="ml-2"><button class="btn btn-primary">Input</button></a>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <table class="table table-striped" border="1">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Keterangan</th>
                            </tr>
                            @foreach ($siswa as $s)
                                <tr>
                                    <td>{{ $s->id }}</td>
                                    <td>{{ $s->nama }}</td>
                                    <td>{{ $s->alamat }}</td>
                                    <td>
                                        <a href="/siswa/edit/{{ $s->id }}" class="text-warning">Edit</a>
                                        <a href="/siswa/delete/{{ $s->id }}" class="text-danger">Hapus</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        {{ $siswa->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
