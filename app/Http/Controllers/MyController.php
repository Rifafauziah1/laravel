<?php

namespace App\Http\Controllers;
use App\Models\Biodata;
use Illuminate\Http\Request;

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
}
