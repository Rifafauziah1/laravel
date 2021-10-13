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
    return "<h1>Hello</h1>"
   . "<br> Selamat datang di webapp saya"
   . "Laravel emang keren";
});

Route::get('profile', function(){
    $nama = "Rifa";
    return "Nama Saya <b>$nama</b>";
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
