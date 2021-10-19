<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>Suplier</center>
    @foreach($suplier as $data)
    Nama : {{$data->nama}} <br>
    alamat : {{$data->alamat}} <br>
    Kode Pos {{$data->kose_pos}} <br>
    Kota : {{$data->kota}} <br>

    <hr>
    @endforeach
</body>
</html>
