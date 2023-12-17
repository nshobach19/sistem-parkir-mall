<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .btn-waves-effect-orange_white-text {
            background-color: #0275d8;
            color: white;
        }

        .btn-waves-effect-red-white-text {
            background-color: #d9534f;
            color: white;
        }

        .btn-waves-effect-orange-white-text {
            background-color: #f0ad4e;
            color: white;
        }
    </style>
</head>

<body>
    <div class="row">
        <div class="col s12">
            <br />
            <a href="/tambah"><button class="btn-waves-effect-orange_white-text">Tambah
                    Data</button></a> <br>
            <div class="card-panel white-text blue">
                <h3>Daftar User</h3>
                </br>
                <table border="1" cellspacing="5" cellpadding="5">
                    <thead>
                        <tr>
                            <td align="center">Username</td>
                            <td align="center">Nama</td>
                            <td align="center">No_Telp</td>
                            <td align="center">Bagian</td>
                            <td align="center">Mall</td>
                            <td align="center">Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $usr)
                            <tr>
                                <td>
                                    {{ $usr->username }}
                                </td>
                                <td>
                                    {{ $usr->name }}
                                </td>
                                <td>
                                    {{ $usr->no_telp }}
                                </td>
                                <td>
                                    {{ $usr->role }}
                                </td>
                                <td>
                                    {{ $usr->kdmall }}
                                </td>
                                <td>
                                    <a href="/user/delete/{{ $usr->id }}"
                                        onclick="return confirm('Admin Yakin ingin menghapusnya?')">
                                        <button class="btn-waves-effect-red-white-text">Hapus</button></a>
                                    <a href="/user/edit/{{ $usr->id }}"><button
                                            class="btn-waves-effect-orange-white-text">Edit</button></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
