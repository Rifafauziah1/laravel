<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center><h1>Data Post</h1></center>
    @foreach($query as $data)
    <h3>{{$data->title}}</h3>
    <h5>{{$data->content}}</h5>
    <hr>
    @endforeach
</body>
</html>
