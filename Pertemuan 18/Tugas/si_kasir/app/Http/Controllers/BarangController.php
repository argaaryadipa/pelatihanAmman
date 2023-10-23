<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\CssSelector\XPath\Extension\FunctionExtension;

class BarangController extends Controller
{
    public function listBarang() {
        $datas = [
            ['nama' => 'kemeja', 'jumlah' => 10, 'harga' => 50000],
            ['nama' => 'celana', 'jumlah' => 15, 'harga' => 70000],
            ['nama' => 'hoodie', 'jumlah' => 20, 'harga' => 60000]
        ];
        return view('barang/list', compact('datas'));
    }

    public function listBarangDiskon() {
        $diskon = [
            ['nama' => 'kemeja bekas', 'jumlah' => 10, 'harga' => 50000],
            ['nama' => 'celana bekas', 'jumlah' => 15, 'harga' => 70000],
            ['nama' => 'hoodie bekas', 'jumlah' => 20, 'harga' => 60000]
        ];
        return view('barang/diskon/list', compact('diskon'));
    }
}
