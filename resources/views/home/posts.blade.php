<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="table-agile-info">
    <div class="panel panel-default">
        <a style="font-size: 20px;background-color: red;width: 120px;height: 80px" href="{{url('post/create')}}">Thêm bài viết</a>
        <div class="panel-heading">
            Danh Sách Bài Viết
        </div>
        <div class="table-responsive">
            <table class="table table-striped b-t b-light">
                <thead>
                <tr>
                    <th>Tên bài viết</th>
                    <th>nội dung</th>
                    <th>Option</th>
                </tr>
                </thead>
                @foreach($posts as $value)
                    <tbody>
                    <tr>
                        <td>{{$value->title}}</td>
                        <td>{{$value->content}}</td>
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

