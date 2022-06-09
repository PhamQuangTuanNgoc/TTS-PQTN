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
{{--                            <a href="showedit-category-product/{{$value->post_id}}" class="active" ui-toggle-class="">--}}
{{--                                <i class="fa fa-pencil-square-o text-success text-active"></i>--}}
{{--                            </a>--}}
                            <a onclick="return confirm('Bạn có chắc muốn xóa!')" href="{{$value->post_id}}" class="active" ui-toggle-class="">
                                Xóa
                            </a>
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

