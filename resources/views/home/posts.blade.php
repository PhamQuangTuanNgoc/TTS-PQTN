<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="table-agile-info">
    <div class="panel panel-default">
        <a class="btn btn-primary" href="{{url('post/create')}}">Thêm bài viết</a>
        <div class="panel-heading text-center text-danger">
            Danh Sách Bài Viết
        </div>
        <div class="table-responsive">
            <table class="table table-striped b-t b-light">
                <thead>
                <tr>
                    <th>Tên bài viết</th>
                    <th>nội dung</th>
                    <th>View</th>
                    <th>Option</th>
                </tr>
                </thead>
                @foreach($posts as $value)
                    <tbody>
                    <tr>
                        <td>{{$value->title}}</td>
                        <td>{{$value->content}}</td>
                        <td>{{$value->view}}</td>
                        <td>
                            <form action="{{url('post/'.$value->post_id)}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>
</body>
</html>

