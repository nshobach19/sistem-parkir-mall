<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ruang Parkir</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script type="text/javascript" src="{{ asset('js/app/js') }}"></script>
    <style>
        .btn-info {
            color: white;
        }

        .notif {
            width: fit-content;
            margin: 0 auto;
            animation: fadeOut 3s ease-in-out forwards;
            position: absolute;
            top: 10px;
            left: 545px;
        }

        @keyframes fadeOut {
            0% {
                opacity: 0;
            }

            50% {
                opacity: 1;
            }

            90% {
                opacity: 0;
                display: none;
            }

            100% {
                opacity: 0;
                display: none;
            }
        }
    </style>
</head>

<body>

    @include('layout.navbar')

    <script src="js/bootstrap.bundle.min.js"></script>

    <div class="container">

        <form action="kendaraan/{id}" method="POST">
            @csrf
            @method('PUT')
            <select class="form-select mt-3" name="plat_nomor" id="">
                <option value="Pilih Plat" disabled>--Pilih Plat--</option>
                @foreach ($data as $item)
                    <option value="{{ $item->plat_nomor }}">{{ $item->plat_nomor }}</option>
                @endforeach
            </select>
            <select class="form-select mt-3" name="lantai" id="">
                <option class="form-control" value="" disabled>--Pilih Lantai--</option`>
                <option value="Lantai 1" class="form-control">Lantai 1</option>
                <option value="Lantai 2" class="form-control">Lantai 2</option>
                <option value="Lantai 3" class="form-control">Lantai 3</option>

            </select>
            <select class="form-select mt-3" name="ruang" id="">
                <option value="" disabled>--Pilih Ruang--</option>
                <option value="Ruang 1" class="form-control">Ruang 1</option>
                <option value="Ruang 2" class="form-control">Ruang 2</option>
                <option value="Ruang 3" class="form-control">Ruang 3</option>

            </select>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-success mt-5">Update</button>
            </div>
        </form>
    </div>

    @if (session('error'))
        <div class="notif alert alert-success">
            {{ session('error') }}
        </div>
    @endif

</body>

</html>
