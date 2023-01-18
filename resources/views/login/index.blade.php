@extends('layouts.index')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-4">
      @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
      @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('loginError') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
      <main class="form-signin">
        <h1 class="h3 mb-3 fw-normal text-center">Silahkan Login</h1>
        <form action="/login" method="post">
          @csrf
          <div class="form-floating my-3">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-floating">
            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
            <label for="password">Password</label>
          </div>
          <div id="password" class="mb-3 text-danger" style="backdrop-filter: blur(5px);"><small>*Jangan bagikan password kepada siapapun!</small></div>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
        </form>
        <small class="d-block text-center mt-3">Belum memiliki akun? <a href="/register">Daftar sekarang!</a></small>
      </main>
    </div>
  </div>
@endsection
