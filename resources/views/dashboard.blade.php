@extends('layouts.main')
@section('content')
<div>
    <h2 class="fw-bold mb-4">Dashboard</h2>
    <ul class="kotak-menu d-flex justify-content-around gap-3 list-unstyled flex-nowrap">
        <li class="p-2 rounded">
            <a href="#" class="text-decoration-none link-light">
                <span class="angka">{{ $jumlah_pendapatan }}</span>
                <div class="deskripsi mt-2">Jumlah Pendapatan</div>
            </a>
        </li>
        <li class="p-2 rounded">
            <a href="#" class="text-decoration-none link-light">
                <span class="angka">{{ $jumlah_pengeluaran }}</span>
                <div class="deskripsi mt-2">Jumlah Pengeluaran</div>
            </a>
        </li>
        <li class="p-2 rounded">
            <a href="#" class="text-decoration-none link-light">
                <span class="angka mt-4" style="font-size: 2.75rem">Rp{{ $total_pendapatan - $total_pengeluaran }}</span>
                <div class="deskripsi mt-4">Total Aset Bersih</div>
            </a>
        </li>
    </ul>
</div>
@endsection
