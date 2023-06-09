<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Murid</title>
    @vite('resources/sass/app.scss')
</head>

<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                Data Murid
            </div>
            @switch($jenis)
                @case(1)
                    @include('murid.view')
                @break

                @case(2)
                    @include('murid.viewInput')
                @break

                @case(3)
                    @include('murid.viewTrash')
                @break

                @case(4)
                    @include('murid.viewEdit')
                @break

                @default
            @endswitch
        </div>
    </div>
</body>

</html>
