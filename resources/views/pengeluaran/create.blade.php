@extends('layouts.main')
@section('content')
    <h2 class="fw-bold mb-4 pt-2">Form Pengeluaran</h2>
    <form action="{{ route("storePengeluaran") }}" method="POST" class="form-custom px-4 pb-5 pt-4 mb-4">
        @csrf
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Uang Keluar</label>
            <div class="col-sm-10">
                <input type="text" class="form-control @error('uang_keluar') is-invalid @enderror" id="inputEmail3" placeholder="Input uang" name="uang_keluar" required value="{{ old('uang_keluar') }}" autofocus>
                @error('uang_keluar')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-10">
                <input type="date" class="form-control @error('tanggal_keluar') is-invalid @enderror" id="inputEmail3" name="tanggal_keluar" required value="{{ old('tanggal_keluar') }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="kategori_pengeluaran" class="col-sm-2 col-form-label">Keterangan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control @error('kategori_pengeluaran') is-invalid @enderror" id="inputEmail3" placeholder="Berikan keterangan" name="kategori_pengeluaran" required value="{{ old('kategori_pengeluaran') }}">
                @error('uang_keluar')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                {{-- <select name="kategori_pengeluaran" id="kategori_pengeluaran" class="form-control @error('kategori_pengeluaran') is-invalid @enderror" required value="{{ old('kategori_pengeluaran') }}">
                    <option value="Utang">Utang</option>
                    <option value="Pembelian Barang/Jasa">Pembelian Barang/Jasa</option>
                </select> --}}
            </div>
        </div>
        <a class="float-end">
            <button type="submit" name="submit" class="btn btn-success btn-xl">
                <i class="bi bi-save"></i> Simpan
            </button>
        </a>
    </form>
    <br><br>
        <a href="{{ route("indexPengeluaran") }}">
            <button type="button" class="btn btn-outline-danger btn-xl mt-5">
                <i class="bi bi-chevron-double-left"></i> Kembali
            </button>
        </a>
@endsection
