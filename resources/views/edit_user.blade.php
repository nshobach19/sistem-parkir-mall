<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <script type="text/javascript" src="{{ asset('js/app/js') }}"></script>
    <style>
        .btn-waves-effect-green {
            background-color: #5cb85c;
            color: white;
        }
    </style>

    @include('layout.navbar')

    <div class="container">
        <div class="row mt-4">
            <div class="col s10">
                <div class="card-panel">
                    @foreach ($data as $user)
                        <form method="get" action="/user/update">
                            <label for="desc">Username :</label>
                            <div class="input-field">
                                <input class="form-control mb-2" type="text" name="username" id="username" readonly
                                    value="{{ $user->username }}" required>
                            </div>
                            <label for="desc">Password :</label>
                            <div class="input-field">
                                <input class="form-control mb-2" type="Password" name="password" id="pass"
                                    required>
                            </div>
                            <label for="desc">Nama :</label>
                            <div class="input-field">
                                <input class="form-control mb-2" type="text" name="nama" id="nama"
                                    value="{{ $user->name }}" required>
                            </div>
                            <label for="desc">Alamat :</label>
                            <div class="input-field">
                                <input class="form-control mb-2" type="text" name="alamat" id="alamat"
                                    value="{{ $user->alamat }}" required>
                            </div>
                            <label for="desc">Nomor Telp :</label>
                            <div class="input-field">
                                <input class="form-control mb-2" type="text" name="nomor" id="nomor"
                                    value="{{ $user->no_telp }}" required>
                            </div>
                            <label for="desc">Bagian</label>
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
                            <button class="btn btn-success mt-3 mx-auto">Simpan</button>
                        </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    </body>

</html>
