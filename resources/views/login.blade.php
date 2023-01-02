<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Giriş Yap</title>
    <style>
        table tr{
            height: 40px;
        }
        table input[type='text'], input[type='password']{
            width: 250px;
            height: 20px;
        }
        table button{
            height: 25px;
            width: 150px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form action="{{ route('logincheck') }}" method="post" name="login">
        @csrf
        <table width="800px">
            <thead>
                <th>
                    <td colspan="2">
                        <h2>Giriş Yap</h2>
                    </td>
                </th>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <b>Kullanıcıadı: </b>
                    </td>
                    <td>
                        <input type="text" name="username">
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>Şifre: </b>  
                    </td>
                    <td>
                        <input type="password" name="password">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td align="left">
                        <button name="loginButton">Giriş Yap</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</body>
</html>