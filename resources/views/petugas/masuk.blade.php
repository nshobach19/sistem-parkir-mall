<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert Plat</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script type="text/javascript" src="{{ asset('js/app/js') }}"></script>
    <style>
        input.plat-nomor {
            width: 50px !important;
        }

        .btn-info {
            color: white;
        }

        .notif {
            width: fit-content;
            margin: 0 auto;
            animation: fadeOut 3s ease-in-out forwards;
            position: absolute;
            top: 10px;
            left: 520px;
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

    {{-- <form action="/kendaraan" method="post">
        @csrf
        <label for="plat">Masukkan Plat nomor</label>
        <input type="text" name="plat_no" id="plat">
        <button type="submit">Masuk</button>
    </form> --}}
    <div class="container">
        <form action="/kendaraan" method="post">
            @csrf
            <div class="d-flex justify-content-center">
                <div class="input-group mb-3 mt-5">
                    <span class="input-group-text" id="inputGroup-sizing-default">Masukkan Plat Nomor</span>
                    <input type="text" name="plat_no" id="plat" class="plat-nomor form-control form-control-sm">
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-success mx-auto">Masuk</button>
            </div>
        </form>
    </div>
    <br>
    <br>


</body>

</html>
