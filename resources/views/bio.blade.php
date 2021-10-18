<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>Biodata Siswa</center>
    @foreach($bio as $data)
    {{$data->name}} - {{$data->gender}} <br>
    {{$data->height}} - {{$data->weight}} <br>
    {{$data->bornDate}}
    <hr>
    @endforeach
</body>
</html>
