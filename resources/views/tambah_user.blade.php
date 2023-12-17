<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <script type="text/javascript" src="{{ asset('js/app/js') }}"></script>
</head>

<body>
    <style>
        .btn-waves-effect-green {
            background-color: #5cb85c;
            color: white;
        }
    </style>

    @if (session()->get('role') == 'Admin')
        @include('layout.navbar')
    @endif

    <div class="container">
        <div class="row">
            <div class="col s12">
                <div class="card-panel">

                    <form method="get" action="user/add_user">
                        {{ csrf_field() }}
                        <label style="color:black;font-size:100%" for="desc">Username</label>
                        <div class="input-field">
                            <input class="form-control mb-2" type="text" name="username" id="username" required>
                        </div>
                        <label style="color:black;font-size:100%" for="desc">Password</label>
                        <div class="input-field">
                            <input class="form-control mb-2" type="password" name="password" id="password" required>
                        </div>
                        <label style="color:black;font-size:100%" for="desc">Nama Lengkap</label>
                        <div class="input-field">
                            <input class="form-control mb-2" type="text" name="nama" id="nama" required>
                        </div>
                        <label style="color:black;font-size:100%" for="desc">Alamat</label>
                        <div class="input-field">
                            <input class="form-control mb-2" type="text" name="alamat" id="alamat" required>
                        </div>
                        <label style="color:black;font-size:100%" for="desc">Nomor Telp</label>
                        <div class="input-field">
                            <input class="form-control mb-2" type="text" name="nomor" id="nomor" required>
                        </div>
                        <label style="color:black;font-size:100%" for="desc">Bagian</label>
                        <br>
                        <select class="form-select mb-2" name="role" id="role" class="browser-default">
                            <option value="Admin">Admin</option>
                            <option value="Petugas Masuk">Petugas Masuk</option>
                            <option value="Petugas Keluar">Petugas Keluar</option>
                            <option value="Petugas Ruang">Petugas Ruang</option>
                        </select>
                        <label style="color:black;font-size:100%" for="desc">MALL</label>
                        <select class="form-select mb-2" name="kdmall" id="kdmall" class="browser-default">
                            <option value="Royal Plasa">Royal Plasa</option>
                            <option value="Tunjungan Plasa">Tunjungan Plasa</option>
                            <option value="Surabaya Plasa">Surabaya Plasa</option>
                        </select>
                        <button class="btn btn-success mt-3">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
