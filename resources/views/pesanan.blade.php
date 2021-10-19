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
    @foreach($pesanan as $data)
    Nama Pelanggan : {{$data->nama_pelanggan}} <br>
    Nama Barang : {{$data->nama_barang}} <br>
    qty : {{$data->qty}} <br>
    Tanggal Pesan {{$data->tanggal_pesan}} <br>
    <hr>
    @endforeach
</body>
</html>
