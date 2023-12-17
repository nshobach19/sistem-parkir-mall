<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SISTEM PARKIR</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script type="text/javascript" src="{{ asset('js/app/js') }}"></script>
    <style>
        body {
            width: 100%;
        }

        .btn-info {
            color: white;
        }

        a.btn.btn-success {
            width: fit-content;
            display: block;
            margin: 0 auto !important;
        }
    </style>
</head>

<body>

    @include('layout.navbar')

    <div class="container mt-4">

        <h3 class="mb-2">DATA PEGAWAI</h3>
        <table class="table table-responsive table-hover ">
            <tr>
                <th>Username</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No Handphone</th>
                <th>Role</th>
                <th>Aksi</th>
            </tr>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->username }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->no_telp }}</td>
                    <td>{{ $item->role }}</td>
                    <td>
                        <a href="/user/delete/{{ $item->id }}"
                            onclick="return confirm('Admin Yakin ingin menghapusnya?')">
                            <button class="btn btn-danger">Hapus</button></a>
                        <a href="/user/edit/{{ $item->id }}"><button class="btn btn-warning">Edit</button></a>
                    </td>
                </tr>
            @endforeach

        </table>
        <a class="btn btn-success" href="/register">Tambah User</a>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
