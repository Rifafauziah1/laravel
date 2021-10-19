<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>Pembeli</center>
    Nama : {{$pembeli->nama}} <br>
    Jenis Kelamin : {{$pembeli->jenis_kelamin}} <br>
    alamat : {{$pembeli->alamat}} <br>
    Kode Pos {{$pembeli->kode_post}} <br>
    Kota : {{$pembeli->kota}} <br>
    Tanggal Lahir : {{$pembeli->tanggal_lahir}} <br>
    <hr>
</body>
</html>
