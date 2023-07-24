@extends('layout.main')
@section('container')

{{-- <div class="bg-image" style="background-image: url(/img/login-bg.png);"> --}}
<div class="row justify-content-center">
    <div class="col-md-4">
      @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        @endif

        @if(session()->has('loginError'))
      <div class="alert alert-success danger-dismissible fade show" role="alert">
        {{session('loginError')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        @endif
      <div class="card shadow-2-strong mt-5" style="border-radius: 1rem;">
        <div class="card-body p-5 text-center">
        <main class="form-signin w-100 m-auto">
            <form action="/login" method="post">
              @csrf
              <img class="mb-3 center" src="/img/logo.png" alt="" width="65" height="50"> 
              PT. Rifan Financindo Berjangka <strong>Surabaya</strong>
              <h1 class="h3 mb-3 fw-normal">Appointment login</h1>
          
              <div class="form-floating">
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="name@example.com" autofocus required value="{{old('username')}}">
                <label for="username">Username</label>
                @error('username')
                  <div class="invalid-feedback">{{$message}}</div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                <label for="password">Password</label>
              </div>
          
              <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
            </form>
            
          </main>
        </div>
      </div>
    </div>
</div>
{{-- </div> --}}
    
@endsection