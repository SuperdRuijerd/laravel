<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Ekranı</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center align-items-center g-2 mt-5">
            <div class="col-md-6">
                <div class="shadow-lg p-3 mb-5 bg-body rounded">
                    <div class="d-flex justify-content-center">
                        <h1>Şifre Sıfırla</h1>
                    </div>
                    <form name="login-form" method="post" action="{{ route('register_post') }}" class="form-group">
                    @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">E-posta Adresiniz</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="mb-3 d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">Şifreyi Sıfırla</button>
                        </div>
                        <div class="row mt-3">
                            <a class="link-secondary col-md-9" href="{{ route('login') }}">Giriş Yap</a>
                            <a class="link-secondary col-md-3" href="{{ route('register') }}">Kayıt Ol</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>
</html>