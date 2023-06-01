<!DOCTYPE html>
<html lang="en">

@php
    session_start();
@endphp

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nampilin Halaman Eloquent</title>
    @vite('resources/sass/app.scss')
</head>

<body>

</body>

<div class="container">
    <h1 class="text-center mb-3 mt-5">Daftar Pegawai</h1>
    <div class="container">
        <div class="row">
            <div class="column">
                <a href="/nampilin/input"><button class="btn btn-primary mb-3">Input Data</button></a>
            </div>
        </div>
    </div>
    <div class="row text-center justify-content-center">
        <div class="column">
            <table class="table table-striped" border="1">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Keterangan</th>
                </tr>
                @foreach ($pegawai as $daftarPegawai)
                    <tr>
                        <td>{{ $daftarPegawai->id }}</td>
                        <td>{{ $daftarPegawai->nama }}</td>
                        <td>{{ $daftarPegawai->alamat }}</td>
                        <td>
                            <a name="edit" class="btn btn-warning"
                                href="/nampilin/edit/{{ $daftarPegawai->id }}">Edit</a>
                            <a name="hapus" class="btn btn-danger"
                                href="/nampilin/hapus/{{ $daftarPegawai->id }}">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        {{ $pegawai->links() }}
    </div>
</div>

</html>
