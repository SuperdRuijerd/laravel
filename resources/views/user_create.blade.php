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
            <a href="{{ route('contact') }}">İletişim</a>
        </li>
    </ul>

    <h2>KULLANICI OLUŞTUR</h2>
    <p>Burası Kullanıcı Oluşturma Bölümü</p>

    <form action="{{ route('user_create_save') }}" class="user-create-form" method="post">
        @csrf
        <p><input type="text" name="name" value="{{ old('name') }}"> </p>
        <p><input type="email" name="email" value="{{ old('email') }}"></p>
        <p><input type="password" name="password"></p>
        <p><input type="submit" name="create" value="Oluştur"></p>
    </form>

    <p></p>

    <table border="1">
        <thead>
            <tr>
                <td colspan="5" align="center"><h2>KULLANICILAR</h2></td>
            </tr>
        </thead>
        <tbody>
            <tr style="font-weight: bold;">
                <td>No</td>
                <td>İsim Soyisim</td>
                <td>Email</td>
                <td>Oluşturma Tarihi</td>
                <td>İşlemler</td>
            </tr>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td><a href="{{ route('user_edit', $user->id) }}">Edit</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>