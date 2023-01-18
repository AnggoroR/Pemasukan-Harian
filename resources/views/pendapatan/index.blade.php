@extends('layouts.main')
@section('content')
    <div class="d-flex justify-content-between mb-4">
        <h2 class="fw-bold">Daftar Pendapatan</h2>
        @if(session()->has('tambah'))
        <div class="alert alert-success" role="alert">
            {{ session('tambah') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if(session()->has('update'))
        <div class="alert alert-primary" role="alert">
            {{ session('update') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if(session()->has('hapus'))
        <div class="alert alert-danger" role="alert">
            {{ session('hapus') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="col-md-5">
            <form action="{{ route("indexPendapatan") }}">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" autocomplete="off" placeholder="Cari sesuatu...." name="search" value="{{ request('search') }}">
                    <button class="btn btn-outline-primary" type="submit">
                        <i class="bi bi-search"> Search</i>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <table class="table text-center">
        <thead>
            <tr>
                <th scope="col">Uang Masuk</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pendapatan as $pdp)
                <tr>
                    <td>Rp{{ $pdp->uang_masuk }}</td>
                    <td>{{ $pdp->tanggal_masuk }}</td>
                    <td>{{ $pdp->kategori_pendapatan }}</td>
                    <td>
                        <a href="{{ route("editPendapatan",$pdp->id) }}" class="btn btn-warning btn-sm">
                            <img src="images/edit.svg" alt="edit"> Edit
                        </a>
                        <a href="{{ route("deletePendapatan",$pdp->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Apakah kamu yakin ingin menghapus data ini?');">
                            <i class="bi bi-trash"></i> Hapus
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <table class="table text-center">
        <th scope="col">Total Pendapatan: Rp{{ $total_pendapatan }}</th>
    </table>
        <a href="{{ route("createPendapatan") }}" class="float-end icon-tambah rounded p-1">
            <img src="images/plus-circle.svg" alt="Tambah" width="25px" height="25px">
        </a>
        <br>
        <div class="d-flex justify-content-between mt-5">
        <a href="{{ route("dashboard") }}">
            <button type="button" class="btn btn-outline-danger btn-xl">
                <i class="bi bi-chevron-double-left"></i> Kembali
            </button>
        </a>
        {{ $pendapatan->links() }}
        </div>
@endsection
