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
    <form action="{{url('userchange')}}" method="POST">
        @csrf
        @if (session('success-change'))
            <div class="alert alert-success" role="alert">
                {{ session('success-change') }}
            </div>
        @endif
    <label for="">Name</label>
    <input type="text" name="username" value="{{$user->name}}"><br>
    <label for="">Email</label>
    <input type="text" name="email" value="{{$user->email}}"><br>
{{--    <input type="text" name="username" value="">--}}
    <input type="submit" value="Update">
    </form>
</body>
</html>
