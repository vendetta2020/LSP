<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Admin</title>
    @include('link')
</head>
<body>
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-md-4">
                <h1>Login Admin</h1>
                <h5>Akun Admin Hanya Dimiliki Oleh Pengurus Sekolah!</h5>
            </div>
            <div class="col-md-4 col-sm-12 px-3 shadow rounded px-4">
                <div class="d-flex justify-content-center align-items-center my-4">
                    <img src="data:image/png;base64,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" alt=""
                        width="165" style="border-radius:10px 20px 30px 40px;" class="px-2">
                </div>
                <form action="{{ url('/login') }}" method="POST">
                    @csrf
                    @if (session('error'))
                        <div class="alert alert-danger" role="alert">{{ session('error') }}</div>
                    @endif
                    <div class="input-control my-2">
                        <label for="email">Email : </label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>

                    <div class="input-control my-2">
                        <label for="password">Password :</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div style="float: right;">
                        <button type="submit" class="btn btn-outline-primary my-4 px-4 py-2">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
@include('script')
</html>
