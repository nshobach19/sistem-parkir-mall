<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body {
            background-color: #f5f5f5;
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
            background-image: url('img/parkir_vector.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position-x: -200px;
            position: relative;
        }

        .login-form {
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0px 0px 10px #888888;
        }

        .form-group {
            margin-bottom: 10px;
        }

        .form-control {
            height: 40px;
        }

        .btn-login {
            background-color: #1e88e5;
            color: #ffffff;
        }

        .container {
            opacity: 0.9;
        }

        .notif {
            position: absolute;
            top: 10px;
        }
    </style>
</head>

<body>
    @if (session('error'))
        <div class="notif alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <form action="{{ route('postlogin') }}" method="POST" class="login-form">
                    @csrf
                    <h3 class="text-center">Welcome</h3>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Enter Username"
                            required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password"
                            placeholder="Enter 8 characters or more" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-login">Log in</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
