@extends('layouts.main')
@section('content')
    <h2 class="fw-bold mb-4 pt-2">Form Pendapatan</h2>
        <form action="{{ route("storePendapatan") }}" method="POST" class="form-custom px-4 pb-5 pt-4 mb-4">
            @csrf
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Uang Masuk</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('uang_masuk') is-invalid @enderror" id="inputEmail3" placeholder="Input uang" name="uang_masuk" required value="{{ old('uang_masuk') }}" autofocus>
                    @error('uang_masuk')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="inputEmail3" name="tanggal_masuk" required value="{{ old('tanggal_masuk') }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="kategori_pendapatan" class="col-sm-2 col-form-label">Keterangan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('kategori_pendapatan') is-invalid @enderror" id="inputEmail3" placeholder="Berikan keterangan" name="kategori_pendapatan" required value="{{ old('kategori_pendapatan') }}">
                    @error('kategori_pendapatan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <a class="float-end">
                <button type="submit" name="submit" class="btn btn-success btn-xl">
                    <i class="bi bi-save"></i> Simpan
                </button>
            </a>
        </form>
        <br><br>
        <a href="{{ route("indexPendapatan") }}">
            <button type="button" class="btn btn-outline-danger btn-xl mt-5">
                <i class="bi bi-chevron-double-left"></i> Kembali
            </button>
        </a>
@endsection


