<header class="mb-3 shadow-md bg-white">
    <nav class="navbar sticky-top d-flex">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold text-primary fst-italic" href="#" style="font-family: Lucida Bright;">PEMHAR</a>
            <div class="d-flex justify-content-end align-items-center">
                <div class="mx-3">
                    <a href="/" class="text-decoration-none text-dark link-primary mx-2">Home</a>
                    <a href="#" class="text-decoration-none text-dark link-primary mx-3" onclick="return confirm('Belum tersedia');">Tentang</a>
                    <a href="/help" class="position-relative rounded-circle icon-navbar px-1 pb-2 pt-1 mx-2" title="Help"><img src="images/help.svg" alt="Help" width="25"></a>
                    <a href="#" class="position-relative px-1 pb-2 pt-1 rounded-circle icon-navbar mx-2" onclick="return confirm('Tidak ada pemberitahuan');" title="Notifikasi">
                        <img src="images/bell.svg" alt="Notifikasi" width="25">
                    </a>
                </div>
                <ul class="my-1 list-unstyled" style="margin-right: 60px">
                    @auth
                      <li class="dropdown icon-navbar rounded-pill px-2 py-1">
                        <a class="nav-link dropdown-toggle" href="#" id="" role="button" data-bs-toggle="dropdown" aria-expanded="false" title="Username">
                            <img src="images/person-circle.svg" alt="Notifikasi" width="25"> {{ auth()->user()->username }}
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
