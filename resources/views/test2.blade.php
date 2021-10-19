<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>Pesanan</center>
    Nama Pelanggan : {{$pesanan->nama_pelanggan}} <br>
    Nama Barang : {{$pesanan->nama_barang}} <br>
    qty : {{$pesanan->qty}} <br>
    Tanggal Pesan {{$pesanan->tanggal_pesan}} <br>
    <hr>
</body>
</html>
