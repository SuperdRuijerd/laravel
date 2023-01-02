<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <style type="text/css">
        table{
            width: 800px;
        }
        table tr td{
            padding: 10px;
        }
    </style>
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

    <h2>KULLANICI DÜZENLE</h2>
    <p>Burası Kullanıcı Düzenleme Bölümü</p>

    <form action="{{ route('user_edit_save', $user->id) }}" class="user-edit-form" method="post">
        @csrf
        <p><input type="text" name="name" value="{{ $user->name }}"> </p>
        <p><input type="email" name="email" value="{{ $user->email }}"></p>
        <p><input type="password" name="password"></p>
        <p><input type="submit" name="update" value="Güncelle"></p>
    </form>

</body>
</html>