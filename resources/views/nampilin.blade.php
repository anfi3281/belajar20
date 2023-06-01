<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nampilin Halaman Eloquent</title>
    @vite('resources/sass/app.scss')
</head>

<body>

</body>

<div class="text-center container">
    <h1 class="mb-3 mt-5">Daftar Pegawai</h1>
    <div class="row justify-content-center">
        <div class="column">
            <table class="table table-striped" border="1">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                </tr>
                @foreach ($pegawai as $daftarPegawai)
                    <tr>
                        <td>{{ $daftarPegawai->id }}</td>
                        <td>{{ $daftarPegawai->nama }}</td>
                        <td>{{ $daftarPegawai->alamat }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>

</html>
