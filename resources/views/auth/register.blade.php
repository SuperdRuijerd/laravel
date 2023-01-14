<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıt Ol</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center align-items-center g-2 mt-5">
            <div class="col-md-6">
                <div class="shadow-lg p-3 mb-5 bg-body rounded">
                    <div class="d-flex justify-content-center">
                        <h1>Kayıt Ol</h1>
                    </div>
                    <form name="login-form" method="post" action="{{ route('register_post') }}" class="form-group">
                    @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Ad Soyad</label>
                            <input type="name" name="name" class="form-control" id="name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">E-posta Adresiniz</label>
                            <input type="email" name="email" class="form-control" id="email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Şifreniz</label>
                            <input type="password" name="password" class="form-control" id="password">
                        </div>
                        <div class="mb-3">
                            <label for="confirm_password" class="form-label">Şifre Tekrar</label>
                            <input type="password" name="confirm_password" class="form-control" id="confirm_password">
                        </div>
                        <div class="mb-3 d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">Kayıt Ol</button>
                        </div>
                        <div class="row mt-3">
                            <a class="link-secondary col-md-9" href="{{ route('login') }}">Giriş Yap</a>
                            <a class="link-secondary col-md-3" href="{{ route('reset_password') }}">Şifremi unuttum</a>
                        </div>
                    </form>
                     @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>
</html>