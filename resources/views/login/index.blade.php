@extends('layout.main')
@section('konten')
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <main class="form-signin">
                <div class="text-center">
                    <img src="img/logo.png" class="rounded" alt="..." width="300" height="auto">
                </div>
                <h1 class="h3 mb-3 fw-normal text-center">Login</h1>
                @if (session()->has('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <form action="/login" method="POST">
                    @csrf
                    <div class="form-floating">
                        <input type="text" name="username" required
                            class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username"
                            autofocus required value="{{ old('username') }}">
                        <label for="username">Username</label>
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" required class="form-control" id="password"
                            placeholder="Password">
                        <label for="password">Password</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                </form>
                <small class="d-block text-center mt-2">Belum punya akun ? <a href="/register">Buat Akun</a></small>
                <small class="d-block text-center mt-2"> <a href="/">Kembali<span
                            data-feather="corner-down-left"></span></a></small>
            </main>
        </div>
    </div>
@endsection
