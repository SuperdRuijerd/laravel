<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>
<body>
    <ul>
        <li>
            <a href="{{ route('home') }}">Anasayfa</a>
        </li>
        <li>
            <a href="{{ route('user_create') }}">Kullanıcı Oluştur</a>
        </li>
        <li>
            <a href="{{ route('login') }}">Giriş Yap</a>
        </li>
        <li>
            <a href="{{ route('contact') }}">İletişim</a>
        </li>
    </ul>

    <h2>HAKKIMIZDA</h2>
    <p>Burası Hakkımızda Bölümü</p>
</body>
</html>