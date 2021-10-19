<?php

namespace App\Http\Controllers;
use App\Models\Biodata;
use Illuminate\Http\Request;
use App\Models\barang;
use App\Models\pesanan;
use App\Models\pembelian;
use App\Models\pembeli;
use App\Models\suplier;

class MyController extends Controller
{
    public function latihan()
    {
        $result = "Latihan Controller";
        return view('latihan', compact('result'));
    }
    public function biodatasaya()
    {
        $nama = "Rifa Fauziah";
        $umur = "17 Tahun";
        $jk = "Perempuan";
        $tanggal = "2004-06-25";
        $alamat = "Bandung";
        return view('biodatasaya', compact('nama','umur','jk','tanggal','alamat'));
    }
    public function bio()
    {
        //mengambil semua data dari model biodata
        $bio = Biodata::all();
        return view('bio', compact('bio'));
    }
    public function barang()
    {
        //mengambil semua data dari model biodata
        $barang = barang::all();
        return view('barang2', compact('barang'));
    }
    public function pesanan()
    {
        $pesanan = pesanan::all();
        return view('pesanan', compact('pesanan'));
    }
    public function pembelian()
    {
        $pembelian = pembelian::all();
        return view('pembelian', compact('pembelian'));
    }
    public function pembeli()
    {
        $pembeli = pembeli::all();
        return view('pembeli2', compact('pembeli'));
    }
    public function suplier()
    {
        $suplier = suplier::all();
        return view('suplier', compact('suplier'));
    }
    public function test($id)
    {
        $barang = barang::findOrFail($id);
        return view('test', compact('barang'));
    }
    public function test2($id)
    {
        $pesanan = pesanan::findOrFail($id);
        return view('test2', compact('pesanan'));
    }
    public function test3($id)
    {
        $pembelian = pembelian::findOrFail($id);
        return view('test3', compact('pembelian'));
    }
    public function test4($id)
    {
        $pembeli = pembeli::findOrFail($id);
        return view('test4', compact('pembeli'));
    }
    public function test5($id)
    {
        $suplier = suplier::findOrFail($id);
        return view('test5', compact('suplier'));
    }

}
