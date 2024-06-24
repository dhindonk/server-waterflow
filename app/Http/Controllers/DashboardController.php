<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\SensorData;

class DashboardController extends Controller
{
    public function index()
    {
        $totalDebitAir = SensorData::sum('waterflow_rate');
        
        // Menghitung jumlah pemakaian berdasarkan asumsi
        $jumlahPemakaian = $totalDebitAir / 2310; // Misalnya, 2310 ml = 1 pemakaian

        // Harga satuan dalam rupiah per liter
        $hargaSatuanPDAM = 59; // 59 Rupiah per liter

        // Menghitung total tagihan
        $totalTagihan = ($totalDebitAir / 1000) * $hargaSatuanPDAM;

        // Format tagihan ke dalam bentuk rupiah
        $formattedTagihan = $this->formatRupiah($totalTagihan);

        return view('pages.dashboard', compact('totalDebitAir', 'jumlahPemakaian', 'formattedTagihan'));
    }

    private function formatRupiah($number)
    {
        return 'Rp ' . number_format($number, 2, ',', '.');
    }
}