<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('about',function(){
    return view('tentang');
});

Route::get('profile', function(){
    $nama = "Rifa";
    return view('profile', compact('nama'));
});

Route::get('post',function(){
    return "Halaman Post 1";
});

//Route Parameter
Route::get('post/{id}',function($a){
    return "Halaman Post ke - <b>$a</b>";
});

Route::get('bio/{nama}/{umur}/{alamat}',function($a,$b,$c){
    return "Nama : $a"
    . "<br>Umur : $b"
    . "<br>Alamat : $c";
});

//Route Optional Parameter
Route::get('hal/{halaman?}',function($a = 1){
    return "Halaman Post ke - <b>$a</b>";
});

Route::get('pesan/{makanan?}/{minuman?}/{cemilan?}',function($a= null, $b= null, $c= null){
    if($a == null && $b == null && $c == null){
        $d = "Anda Tidak Memesan";
    }if($a != null){
        $d = "Anda Memesan"
        . "<br> Makanan : $a";
    }if($a != null && $b != null){
        $d = "Anda Memesan"
        . "<br> Makanan : $a"
        . "<br> Minuman : $b";
    }if($a != null && $b != null && $c != null){
        $d = "Anda Memesan"
        . "<br> Makanan : $a"
        . "<br> Minuman : $b"
        . "<br> Cemilan : $c";
    }
    return $d;
});

Route::get('biodata', function(){
    $nama = "Rifa";
    $umur = 17;
    $alamat = "Bandung";
    $cita = "Dokter";
    $hobi = "Berenang";
    return view ('biodata', compact('nama','umur','alamat','cita','hobi'));
});

Route::get('barang', function(){
    $id = 1;
    $nb = "Meja";
    $harga = 10000;
    $stok = 2;
    $idsup = 1001;
    return view ('barang', compact('id','nb','harga','stok','idsup'));
});

Route::get('supplier', function(){
    $idsup = 1001;
    $ns = "Sila";
    $no = "08976253";
    $alamat = "Bandung";
    return view ('supplier', compact('id','ns','no','alamat'));
});

Route::get('transaksi', function(){
    $id = 1001;
    $nb = "Kursi";
    $np = "Alliyul";
    $tanggal = "2021-10-14";
    $keterangan = "Sedang Diproses";
    return view ('transaksi', compact('id','nb','np','tanggal','keterangan'));
});

Route::get('pembayaran', function(){
    $id = 1234;
    $tanggal = "2021-10-14";
    $total = 100000;
    $idtransaksi = 1001;
    return view ('pembayaran', compact('id','tanggal','total','idtransaksi'));
});

Route::get('pembeli', function(){
    $id = 1002;
    $nama = "Alliyul";
    $jk = "Laki-Laki";
    $no = "0882021732";
    $alamat = "Bandung";
    return view ('pembeli', compact('id','nama','jk','no','alamat'));
});

Route::get('post/{halaman?}',function($a){
    return view('post', ['posting' => $a]);
});

Route::get('book', function(){
    $books = [
        ['id' => 1, 'title' => 'Belajar Laravel Itu Mudah'],
        ['id' => 2, 'title' => 'Belajar Baca Huruf Hijaiyah'],
        ['id' => 3, 'title' => 'Belajar Baca Aksara Sunda'],
    ];
        return view('book', compact('books'));
});

Route::get('film', function(){
    $bioskop = [
        ['id' => 1, 'judul' => 'Dilan1990', 'sinopsis' => 'Lorem Ipsum', 'aktor' =>
        [
          'aktor1' => "Iqbal",
          'aktor2' => "Vanesa",
          'aktor3' => "Tirtan"
        ]],
        ['id' => 2, 'judul' => 'Conjuring', 'sinopsis' => 'Lorem Ipsum', 'aktor' =>
        [
          'aktor1' => "Lala",
          'aktor2' => "Aliyul",
          'aktor3' => "Rifa"
        ]],
        ['id' => 3, 'judul' => 'Valak', 'sinopsis' => 'Lorem Ipsum', 'aktor' =>
        [
          'aktor1' => "Rio",
          'aktor2' => "Dina",
          'aktor3' => "Ici"
        ]],
        ['id' => 4, 'judul' => 'Conjuring2', 'sinopsis' => 'Lorem Ipsum', 'aktor' =>
        [
          'aktor1' => "Lala",
          'aktor2' => "Aliyul",
          'aktor3' => "Rifa"
        ]],
        ['id' => 5, 'judul' => 'OKB', 'sinopsis' => 'Lorem Ipsum', 'aktor' =>
        [
          'aktor1' => "Nisa",
          'aktor2' => "Keyza",
          'aktor3' => "Altaf"
        ]],
    ];
        return view('film', compact('bioskop'));
});


