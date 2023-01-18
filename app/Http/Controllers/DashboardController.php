<?php

namespace App\Http\Controllers;

use App\Models\Pendapatan;
use App\Models\Pengeluaran;
use App\Models\Dashboard;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $jumlah_pendapatan = Pendapatan::all()->count('uang_masuk > 0');
        $jumlah_pengeluaran = Pengeluaran::all()->count();
        $total_pendapatan = Pendapatan::all()->sum('uang_masuk');
        $total_pengeluaran = Pengeluaran::all()->sum('uang_keluar');


        return view("dashboard", ["title" => "Dashboard"])
            ->with('jumlah_pendapatan', $jumlah_pendapatan)
            ->with('jumlah_pengeluaran', $jumlah_pengeluaran)
            ->with('total_pendapatan', $total_pendapatan)
            ->with('total_pengeluaran', $total_pengeluaran);
    }
}
