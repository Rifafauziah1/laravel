<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>Barang</center>
    @foreach($pembeli as $data)
    Nama : {{$data->nama}} <br>
    Jenis Kelamin : {{$data->jenis_kelamin}} <br>
    alamat : {{$data->alamat}} <br>
    Kode Pos {{$data->kode_post}} <br>
    Kota : {{$data->kota}} <br>
    Tanggal Lahir : {{$data->tanggal_lahir}} <br>

    <hr>
    @endforeach
</body>
</html>
