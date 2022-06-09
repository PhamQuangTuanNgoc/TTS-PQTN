<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="POST" action="{{url('/checklogin')}} ">
    {{--        <span style="color: red">{!! $msg !!}</span><br>--}}
    @csrf
    <lable>Username</lable><br>
    <input type="text" name="username"><br><br>
    @error('username')
    <span style="color: red">{{$message}}</span>
    @enderror
    <br>
    <lable>Password</lable><br>
    <input type="password" name="password"><br><br>
    @error('password')
    <span style="color: red">{{$message}}</span>
    @enderror
    <br>
    <input type="submit" value="Đăng nhập" name="btn-login">
</form>
</body>
</html>
