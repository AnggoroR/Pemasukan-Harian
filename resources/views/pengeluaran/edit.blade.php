<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Pengeluaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            font-weight: 400;
        }

        .color-orange, .page-item .page-link {
            color: #FF6D4C !important;
        }

        .page-item.active .page-link {
            color: white !important;
            background: #FF6D4C !important;
            border: none;
        }

        .shadow-md {
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }

        .shadow-rounded {
            box-shadow: rgba(0, 0, 0, 0.2) 0px 5px 15px;
        }

        .sidebar-menu li {
            font-size: 1.2rem;
        }

        .sidebar-menu li h1 {
            font-size: 1.25rem;
            font-weight: bold;
            padding: .5rem 0;
            margin: 1rem 0 0 0;
        }

        .sidebar-menu li h1 svg {
            padding: .25rem;
            width: 36px;
            height: 36px;
            background: #FF6D4C;
            color: #fff;
            border-radius: 50rem;
        }

        .kotak-menu li {
            flex-basis: 30%;
            color: white;
        }

        .kotak-menu li .angka {
            display: block;
            line-height: 1.15;
            font-size: 5rem;
            font-weight: bold;
            text-align: right;
            padding: 0 1rem;
        }

        .kotak-menu li .deskripsi {
            font-size: 1.25rem;
        }

        .kotak-menu li:nth-child(1) {
            background: orangered;
        }

        .kotak-menu li:nth-child(2) {
            background: green;
        }

        .kotak-menu li:nth-child(3) {
            background: blue;
        }

        .logout-button {
            right: 1rem;
            bottom: 1rem;
        }

        .form-custom {
            font-family: Montserrat;
            font-style: normal;
            font-weight: normal;
            font-size: 20px;
            line-height: 29px;
            background: #FFFFFF;
            box-shadow: 0px 5px 25px rgba(0, 0, 0, 0.15);
            border-radius: 25px;
        }

        .icon-navbar:hover {
            background-color: #dbf1ff;
        }

        .li-sidebar:hover {
            background-color: #dbf1ff;
        }
    </style>
</head>
<body>
    <header class="mb-3 shadow-md">
        <nav class="navbar sticky-top bg-white d-flex">
            <div class="container-fluid">
                <a class="navbar-brand fw-bold text-primary fst-italic" href="#" style="font-family: Lucida Bright;">PEMHAR</a>
                <div class="d-flex justify-content-end align-items-center">
                    <div class="mx-3">
                        <a href="/" class="text-decoration-none text-dark link-primary mx-2">Home</a>
                        <a href="#" class="text-decoration-none text-dark link-primary mx-3" onclick="return confirm('Belum tersedia');">Tentang</a>
                        <a href="#" class="position-relative rounded-circle icon-navbar px-1 pb-2 pt-1 mx-2" onclick="return confirm('Kamu bisa membuat, mencari, memperbaharui, dan menghapus data dari tabel pendapatan, pengeluaran, dan ketersediaan uang yang ada pada sistem kami melalui pilihan menu yang ada pada sidebar.   *Pilihan menu sidebar akan tampil ketika anda telah login.');" title="Help"><svg xmlns="http://www.w3.org/2000/svg" width="25" class="bi bi-question-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
                          </svg></a>
                        <a href="#" class="position-relative px-1 pb-2 pt-1 rounded-circle icon-navbar mx-2" onclick="return confirm('Tidak ada pemberitahuan');" title="Notifikasi">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" class="bi bi-bell" viewBox="0 0 16 16">
                                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
                            </svg>
                        </a>
                    </div>
                    <ul class="my-1 list-unstyled" style="margin-right: 60px">
                        @auth
                          <li class="dropdown icon-navbar rounded-pill px-2 py-1">
                            <a class="nav-link dropdown-toggle" href="#" id="" role="button" data-bs-toggle="dropdown" aria-expanded="false" title="Username">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                  </svg> {{ auth()->user()->username }}
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li>
                                  <form action="/logout" method="post">
                                        @csrf
                                      <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-left"></i> Logout</button>
                                  </form>
                              </li>
                            </ul>
                          </li>
                        @else
                        <li>
                            <a href="/login" class="nav-link text-decoration-none mx-2 text-dark link-primary">
                                <i class="bi bi-box-arrow-in-right"></i> Login
                            </a>
                        </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section class="container-xxl pb-3">
        <div class="d-grid gap-3" style="grid-template-columns: 13rem 1fr; height: 490px;">
            <aside class="rounded-3 shadow-rounded col-lg-12">
                <div class="flex-shrink-0 pt-2 pb-1 fs-5 rounded-top">
                    <a href="#" class="d-block link-primary text-decoration-none text-dark py-1 px-2" title="Profil">
                        <svg xmlns="http://www.w3.org/2000/svg" width="33" class="bi bi-person-circle mx-2 my-1" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                        </svg> {{ auth()->user()->name }}
                        <p class="text-muted mx-2 fst-italic" style="font-size: 14px">{{ auth()->user()->email }}</p>
                    </a>
                </div>
                <hr class="m-0 p-0">
                <br>
                <ul class="sidebar-menu list-unstyled container lh-lg">
                    <li>
                        <a href="{{ route("dashboard") }}" class="fs-6 text-decoration-none li-sidebar rounded-pill p-2" style="color: black;">
                            <i class="bi bi-layout-text-sidebar-reverse"></i></i> Dashboard
                        </a>
                    </li>
                  <li>
                        <a href="{{ route("indexPendapatan") }}" class="fs-6 text-decoration-none li-sidebar rounded-pill p-2" style="color: black;">
                            <i class="bi bi-graph-up-arrow"></i> Pendapatan
                        </a>
                  </li>
                  <li>
                        <a href="{{ route("indexPengeluaran") }}" class="fs-6 text-decoration-none li-sidebar rounded-pill p-2" style="color: black;">
                            <i class="bi bi-graph-down-arrow"></i> Pengeluaran
                        </a>
                  </li>
                  <li>
                        <a href="{{ route("indexUangtersedia") }}" class="fs-6 text-decoration-none li-sidebar rounded-pill p-2" style="color: black;">
                            <i class="bi bi-cash-stack"></i> Ketersediaan Uang
                        </a>
                  </li>
                </ul>
            </aside>
            <main class="container-fluid">
        <h2 class="fw-bold mb-4 pt-2">Edit Pengeluaran</h2>
        <form action="{{ route("updatePengeluaran",$pgl->id) }}" method="POST" class="form-custom px-4 pb-5 pt-4 mb-4">
        @csrf
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Uang Keluar</label>
            <div class="col-sm-10">
                <input type="text"  class="form-control @error('uang_keluar') is-invalid @enderror" id="inputEmail3" placeholder="Input uang" name="uang_keluar" value="{{ $pgl->uang_keluar }}">
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
                <input type="date" class="form-control" id="inputEmail3" name="tanggal_keluar" value="{{ $pgl->tanggal_keluar }}">
            </div>
        </div>
        <div class="row mb-3">
            {{-- @php
                $semua_kategori_pgl = [
                    "Utang",
                    "Pembelian Barang/Jasa"
                ]
            @endphp --}}
            <label for="kategori_pengeluaran" class="col-sm-2 col-form-label">Keterangan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control @error('kategori_pengeluaran') is-invalid @enderror" id="inputEmail3" placeholder="Berikan keterangan" name="kategori_pengeluaran" required value="{{ $pgl->kategori_pengeluaran }}">
                @error('uang_keluar')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                {{-- <select name="kategori_pengeluaran" id="kategori_pengeluaran" class="form-control">
                    @foreach ($semua_kategori_pgl as $kategori_pengeluaran)
                        @if ($kategori_pengeluaran == $pgl->kategori_pengeluaran)
                        <option value="{{ $kategori_pengeluaran }}" selected>{{ $kategori_pengeluaran }}</option>
                        @else
                        <option value="{{ $kategori_pengeluaran }}">{{ $kategori_pengeluaran }}</option>
                        @endif
                    @endforeach
                </select> --}}
            </div>
        </div>
        <button type="submit" class="btn btn-primary float-end">
            <i class="bi bi-cloud-upload"> Update</i>
        </button>
        </form>
        <br><br>
        <a href="{{ route("indexPengeluaran") }}" class="">
            <button type="button" class="btn btn-outline-danger btn-xl mt-5">
                <i class="bi bi-chevron-double-left"></i> Kembali
            </button>
        </a>
        </main>
        </div>
    </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
