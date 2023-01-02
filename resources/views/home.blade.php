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
            <a href="{{ route('about') }}">Hakkımızda</a>
        </li>
        <li>
            <a href="{{ route('user_create') }}">Kullanıcı Oluştur</a>
        </li>
        <li>
            <a href="{{ route('contact') }}">İletişim</a>
        </li>
    </ul>

    <h2>ANASAYFA</h2>
    <p>Burası Anasayfa Bölümü</p>

</body>
</html>