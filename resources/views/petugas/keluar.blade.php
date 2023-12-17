<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exit</title>
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
            left: 550px;
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

    @if (session('error'))
        <div class="notif alert alert-success">
            {{ session('error') }}
        </div>
    @endif

    <script src="js/bootstrap.bundle.min.js"></script>

    <div class="container mt-4">
        {{-- <h1>PETUGAS KELUAR {{ session()->get('username') }}</h1> --}}
        <table class="table table-light table-bordered" border="1" cellpadding="5" cellspacing="0">
            <tr>
                <th style="text-align: center">No Plat</th>
                <th style="text-align: center">Tanggal Masuk</th>
                <th style="text-align: center">Jam Masuk</th>
                <th style="text-align: center">Lantai</th>
                <th style="text-align: center">Nama Ruang</th>
                <th style="text-align: center">Status</th>
                <th style="text-align: center">Biaya</th>
                <th style="text-align: center">Aksi</th>
            </tr>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->plat_nomor }}</td>
                    <td>{{ $item->tanggal_masuk }}</td>
                    <td>{{ $item->jam_masuk }}</td>
                    <td>{{ $item->lantai }}</td>
                    <td>{{ $item->nama_ruang }}</td>
                    <td>{{ $item->status }}</td>
                    <td>10000</td>

                    <td>
                        <form action="kendaraan/{{ $item->plat_nomor }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Keluar" class="btn btn-danger"
                                onClick="return confirm ('Yakin?')">
                        </form>
                    </td>
                </tr>
            @endforeach

        </table>
    </div>
</body>

</html>
