@extends('layout.main')
@section('content')

<div class="row justify-content-center">
    <div class="col-md-4"> 
      @if (session()->has('berhasil'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('berhasil') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div> 
      @endif
      @if (session()->has('gagal'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('gagal') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div> 
      @endif
        <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal text-center">Login</h1>
            <form action="/login" method="post">
              @csrf
              <div class="form-floating">
                <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" required>
                <label for="email">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                <label for="password">Password</label>
              </div>
              <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
              <small>Belum punya akun? <a href="/daftar">Daftar disini</a></small>
            </form>
          </main>
    </div>
</div>
@endsection