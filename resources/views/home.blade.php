@extends('layouts.index')
@section('content')
<div class="container">
    <div class="d-flex justify-content-md-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
    </div>
    <div class="d-flex justify-content-md-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
    </div>
    <div class="d-flex justify-content-md-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
    </div>
    <div class="d-flex justify-content-md-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
    </div>
    <div>
        <div style="backdrop-filter: blur(3px);">
            <figure class="text-left">
                <blockquote class="blockquote">
                    <h2 class="fw-bold">Selamat datang di website PEMASUKAN HARIAN</h2>
                    <p>Silahkan memulai dengan login terlebih dahulu, <br> jika belum memiliki akun silahkan daftar terlebih dahulu dengan menekan tombol "Daftar".</p>
                </blockquote>
            </figure>
        </div>
        <div >
            <a href="/register" class="btn btn-lg btn-outline-primary text-center px-4" role="button" style="backdrop-filter: blur(5px);">Daftar</a>
        </div>
    </div>
</div>
@endsection
