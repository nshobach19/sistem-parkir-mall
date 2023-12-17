<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Parkir</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script type="text/javascript" src="{{ asset('js/app/js') }}"></script>
    <style>
        .btn-info {
            color: white;
        }
    </style>
</head>

<body>

    @include('layout.navbar')

    <script src="js/bootstrap.bundle.min.js"></script>

    <div class="container mt-4">
        {{-- <h1>PETUGAS KELUAR {{ session()->get('username') }}</h1> --}}
        <table class="table table-light table-bordered" border="1" cellpadding="5" cellspacing="0">
            <tr>
                <th style="text-align: center">NO</th>
                <th style="text-align: center">No Plat</th>
                <th style="text-align: center">Tanggal Masuk</th>
                <th style="text-align: center">Jam Masuk</th>
                <th style="text-align: center">Lantai</th>
                <th style="text-align: center">Nama Ruang</th>
                <th style="text-align: center">Tanggal Keluar</th>
                <th style="text-align: center">Jam Keluar</th>
                <th style="text-align: center">Status</th>
                <th style="text-align: center">Biaya</th>

            </tr>
            @php
                $i = 1;
                $total = 0;
            @endphp
            @foreach ($data as $item)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $item->plat_nomor }}</td>
                    <td>{{ $item->tanggal_masuk }}</td>
                    <td>{{ $item->jam_masuk }}</td>
                    <td>{{ $item->lantai }}</td>
                    <td>{{ $item->nama_ruang }}</td>
                    <td>{{ $item->tanggal_keluar }}</td>
                    <td>{{ $item->jam_keluar }}</td>
                    <td>{{ $item->status }}</td>
                    <td>{{ $item->biaya }}</td>
                    @php
                        $total += $item->biaya;
                    @endphp
                </tr>
            @endforeach
            <tr>
                <td colspan="9" class="text-center"><b>TOTAL</b></td>
                <td>{{ $total }}</td>
            </tr>
        </table>
    </div>
</body>

</html>
