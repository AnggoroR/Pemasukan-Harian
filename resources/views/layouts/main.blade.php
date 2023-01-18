<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="css/style.css" rel="stylesheet">
</head>
<body class="col-lg-12 col-sm-12 col-md-12">
    @include('navbar.index')
    <section class="container-xxl pb-3">
        <div class="d-grid gap-3" style="grid-template-columns: 13rem 1fr; height: 490px;">
            <aside class="rounded-3 shadow-rounded col-lg-12">
                <div class="flex-shrink-0 pt-2 pb-1 fs-5 rounded-top">
                    <a href="#" class="d-block link-primary text-decoration-none text-dark py-1 px-2" title="Profil">
                        <img src="images/person-circle.svg" alt="Profil" width="33" class="mx-2 my-1"> {{ auth()->user()->name }}
                        <p class="text-muted mx-2 fst-italic" style="font-size: 14px">{{ auth()->user()->email }}</p>
                    </a>
                </div>
                <hr class="m-0 p-0">
                <br>
                <ul class="sidebar-menu list-unstyled container lh-lg ">
                    <li>
                        <a href="{{ route("dashboard") }}" class="fs-6 text-decoration-none li-sidebar rounded-pill p-2" style="color: black;">
                            <i class="bi bi-layout-text-sidebar-reverse"></i> Dashboard
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
                @yield('content')
            </main>
        </div>
    </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
