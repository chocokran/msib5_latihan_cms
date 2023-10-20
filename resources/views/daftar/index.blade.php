@extends('layout.main')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-5">  
        <main class="form-daftar">
            <h1 class="h3 mb-3 fw-normal text-center">Daftar</h1>
            <form action="/daftar" method="post">
                @csrf
              <div class="form-floating">
                <input type="text" name="name" class="form-control" id="name" placeholder="nama" required>
                <label for="name">Nama</label>
              </div>
              <div class="form-floating">
                <input type="text" name="username" class="form-control" id="username" placeholder="username" required>
                <label for="username">Username</label>
              </div>
              <div class="form-floating">
                <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>
                <label for="email">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                <label for="password">Password</label>
              </div>
              <button class="btn btn-primary w-100 py-2" type="submit">Daftar</button>
              <small>Sudah punya akun? <a href="/login">Login</a></small>
            </form>
          </main>
    </div>
</div>
@endsection